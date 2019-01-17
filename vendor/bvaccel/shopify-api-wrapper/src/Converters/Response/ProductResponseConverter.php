<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Product;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class ProductResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class ProductResponseConverter extends ResponseConverter
{
    /**
     * @var ProductImageResponseConverter
     */
    private $product_image_converter;

    /**
     * @var ProductVariantResponseConverter
     */
    private $product_variant_converter;

    /**
     * ProductDataParser constructor.
     */
    public function __construct()
    {
        $this->product_image_converter   = new ProductImageResponseConverter();
        $this->product_variant_converter = new ProductVariantResponseConverter();
    }

    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|Product
     */
    public function process(\stdClass $data): ShopifyResource
    {
        $product = new Product();
        $product->allowOverride();
        $product->body_html            = $data->body_html ?? null;
        $product->created_at           = $data->created_at ?? null;
        $product->handle               = $data->handle ?? null;
        $product->id                   = $data->id ?? null;
        $product->options              = $data->options ?? [];
        $product->product_type         = $data->product_type ?? null;
        $product->published_at         = $data->published_at ?? null;
        $product->published_scope      = $data->published_scope ?? null;
        $product->tags                 = array_map('trim', explode(',', $data->tags ?? ""));
        $product->template_suffix      = $data->template_suffix ?? null;
        $product->title                = $data->title ?? null;
        $product->admin_graphql_api_id = $data->admin_graphql_api_id ?? null;
        $product->updated_at           = $data->updated_at ?? null;
        $product->vendor               = $data->vendor ?? null;
        $product->images               = $this->parseChildCollection($this->product_image_converter, $data->images ?? []);
        $product->variants             = $this->parseChildCollection($this->product_variant_converter, $data->variants ?? []);

        return $product;
    }
}