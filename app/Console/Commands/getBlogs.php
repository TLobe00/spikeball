<?php

namespace App\Console\Commands;

use App\Exceptions\ShopifyApiError;
use App\Exceptions\ShopifyResourceNotFound;
use Illuminate\Console\Command;
//use BVAccel\ShopifyApiWrapper\Parameters\InventoryLevelParameters;
use BVAccel\ShopifyResources\Resources\Blog;
//use BVAccel\ShopifyApiWrapper\Resources\InventoryLevelSet;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Shopify;

class getBlogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spikeball:getBlogs';

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
        //$res = Shopify::blog()->all();
        $blogparams = new Blog();
        $blogparams->title = "Test";

        $res = Shopify::blog()->create($blogparams);

        dd($res->blog());
    }
}
