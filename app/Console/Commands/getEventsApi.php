<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use App\Models\InventorySkuLinkage;
//use BVAccel\ShopifyApiWrapper\Resources\Product;
//use BVAccel\ShopifyApiWrapper\Resources\ProductVariant;
//use Illuminate\Console\Command;
//use Shopify;
use Log;
//use GuzzleHttp;
use GuzzleHttp\Client;
use App\event_details;
use App\createdby;
use App\location;

class getEventsApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spikeball:getevents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $headers = [env('HEROKU_KEY') => env('HEROKU_PASS')];
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('HEROKU_URI'),
            // You can set any number of default request options.
            //'timeout'  => 2.0,
            'headers' => $headers
        ]);

        // Create a client with a base URI
//        $client = new GuzzleHttp\Client(['base_uri' => 'https://spikeball-dev.herokuapp.com/api/games/']);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'shopify');

        //dd($response->getBody()->getContents());
        $respBody = json_decode($response->getBody()->getContents(), true);

        foreach ($respBody['games'] as $event) {
          //dd($event);
          $object = json_decode(json_encode($event), FALSE);
          //dd($object);
          $eventDBrecord = event_details::where('ext_id', $object->_id)->get()->first();
          //dd($eventDBrecord);
          if ( is_null($eventDBrecord) ) {
            //dd($object->location);
            $loc = $this->insertLocation($object->location);
            $locid = $loc->id;

            $creator = $this->insertCreator($object->createdBy);
            $creatorid = $creator->id;
            //dd($object);

            $createEvent = new event_details;

            $createEvent->ext_id = $object->_id;
            $createEvent->title = $object->title;
            $createEvent->starts_at = date('Y-m-d', strtotime($object->startAt)); //$fixed = date('Y-m-d', strtotime($date));
            $createEvent->ends_at = date('Y-m-d', strtotime($object->endAt));
            $createEvent->description = $object->description;
//            $createEvent->reg_info = $object
//            $createEvent->url = $object
//            $createEvent->reg_fee = $object
            $createEvent->is_sanctioned = ($object->isSanctioned ? 1 : 0);
            $createEvent->is_tournament = ($object->isTournament ? 1 : 0);
            $createEvent->location_id = $locid;
            $createEvent->createdby_id = $creatorid;

            $createEvent->save();

            print "Successfully added: " . $createEvent->title . "\n";

//            $data = new event_details;
//            $data->name = 'Test';
//            $data->save();
//            dd($data->id);

          } else {
            print "NOTE: " . $object->title . " already exists\n";
          }
        }

        //dd($respBody);

    }

    private function insertLocation($location) {

      //dd($location->place_id);

      $newlocation = location::firstOrNew(['place_id'=>$location->place_id]);

      $newlocation->place_id = $location->place_id;
      $newlocation->formatted_address = $location->formatted_address;
      $newlocation->lat = $location->geometry->location->lat;
      $newlocation->lng = $location->geometry->location->lng;

      foreach ( $location->address_components as $addritem ) {

        switch ($addritem->types[0]) {
          case 'subpremise':
            $newlocation->subpremise = $addritem->short_name;
            break;
          case 'street_number':
            $newlocation->street_number = $addritem->short_name;
            break;
          case 'route':
            $newlocation->route = $addritem->short_name;
            break;
          case 'neighborhood':
            $newlocation->neighborhood = $addritem->short_name;
            break;
          case 'locality':
            $newlocation->locality = $addritem->short_name;
            break;
          case 'administrative_area_level_2':
            $newlocation->adm_area_2 = $addritem->short_name;
            break;
          case 'administrative_area_level_1':
            $newlocation->adm_area_1 = $addritem->short_name;
            break;
          case 'country':
            $newlocation->country = $addritem->short_name;
            break;
          case 'postal_code':
            $newlocation->postal_code = $addritem->short_name;
            break;
        }
      }

      //dd($newlocation);
      $newlocation->save();
      return location::select('id')->where('place_id', $newlocation->place_id)->get()->first();
    }

    private function insertCreator($createdby) {
      $newcreator = createdby::firstOrNew(['display_name'=>$createdby->displayName],['first_name'=>$createdby->firstName],['last_name'=>$createdby->lastName]);
      $newcreator->display_name = $createdby->displayName;
      $newcreator->first_name = $createdby->firstName;
      $newcreator->last_name = $createdby->lastName;
      $newcreator->save();
      return createdby::select('id')->where('display_name', $newcreator->display_name)->get()->first();
    }
}
