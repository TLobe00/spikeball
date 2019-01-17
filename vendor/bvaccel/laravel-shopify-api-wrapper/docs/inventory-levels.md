## Inventory Levels
The following documents how to use the Laravel API Wrapper to access
the functionality of the [Shopify Admin Inventory Level API](https://help.shopify.com/en/api/reference/inventory/inventorylevel).
- [Requests](#requests)
- [Request Modification](#request-modifications)
- [Responses](#responses)

### Requests
##### Inventory Level
```
Shopify::inventoryLevel()->all($params)?: MultipleInventoryLevelResponse;
Shopify::inventoryLevel()->delete($inventory_item_id, $location_id): SingleInventoryLevelResponse;
```
##### Inventory Level Action Methods
```
Shopify::inventoryLevelConnect()->create($params): SingleInventoryLevelResponse;
Shopify::inventoryLevelAdjust()->create($params): SingleInventoryLevelResponse;
Shopify::inventoryLevelSet()->create($params): SingleInventoryLevelResponse;
```
### Request Modifications

### Responses
All Inventory Level requests return either a SingleInventoryLevelResponse or MultipleInventoryLevelResponseObject object.
##### Accessing the response object
```
$response = Shopify::inventoryLevel()->all($params);
```
##### Using the response
The MultipleInventoryLevelResponse object contains data about
the response. These data can be accessed by the following methods:
###### inventoryLevels()  ```MultipleInventoryLevelResponse only```
```
$inventory_levels = $response->inventoryLevels();

/* iterating over each */
foreach($inventory_levels as $inventory_level){
    var_dump($inventory_level->id);
}
```
###### inventoryLevel()  ```SingleInventoryLevelResponse only```
```
$inventory_level = $response->inventoryLevel();

var_dump($inventory_level->id);

```
###### wasSuccessful()
```
$was_successful = $response->wasSuccessful();

if($was_successful){
    // do something
}
```

###### statusCode()
```
$stauts_code = $response->statusCode();

if($status_code === 200){
    // do something
}
```

###### errors()
```
$errors = $response->errors();

foreach($errors as $error){
    var_dump($error->message);
}
```

