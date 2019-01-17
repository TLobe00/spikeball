## Orders
The following documents how to use the Laravel API Wrapper to access
the functionality of the [Shopify Admin Order API](https://help.shopify.com/en/api/reference/orders/order).
- [Requests](#requests)
- [Request Modification](#request-modifications)
- [Responses](#responses)

### Requests
##### Order Methods
```php
Shopify::order()->create($order)?: OrderResponse;
Shopify::order()->all(): OrderResponse;
Shopify::order()->find($order_id): OrderResponse;
Shopify::order()->update($order): OrderResponse;
Shopify::order()->delete($order_id): OrderResponse;
```
##### Order Count Method
```php
Shopify::orderCount()->all(): ?int;
```
##### Order Action Methods
```php
Shopify::orderClose()->create($order_id): OrderResponse;
Shopify::orderOpen()->create($order_id): OrderResponse;
Shopify::orderCancel()->create($order_id): OrderResponse;
```
### Request Modifications
##### Order Params
The Order Params method returns a request parmas object for modifying a
GET request. This object can be modified with fluent methods to
customize the request for the following order
request methods: all, find, and count.
```php
$order_params = Shopify::orderPrams();
```
By itself no modification to the base request will happen.

###### fields(array $field_names)

```php
$order_params->fields(['first_name', 'last_name', 'email']);
```

###### createdAtMax(string $timestamp)
```php
$order_params->createdAtMax('2014-04-25T16:15:47-04:00');
```
###### Chaining Request Params
Each of the methods above returns the object itself so chainging is
possible.
```php
$order_params = Shopify::orderParams()
     ->fields(['first_name', 'last_name', 'email'])
     ->createdAtMax('2014-04-25T16:15:47-04:00')
     ->openStatus();
```
The object can then be used by passing it in as an optional argument,
to GET requests.
```php
Shopify::order()->all($order_params);
Shopify::order()->find($order_id, $order_params);
Shopify::order()->count($order_params);
```
### Responses
All order requests return an OrderResponse object.
##### Accessing the response object
```php
$response = Shopify::order()->all();
```
##### Using the response
The OrderResponse object contains data about
the response. These data can be accessed by the following methods:
###### orders()
```php
$orders = $response->orders();

/* iterating over each order */
foreach($orders as $order){
    var_dump($order->name);
}
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
###### size():?int
```
$size = $response->size();

var_dump($size);
```

