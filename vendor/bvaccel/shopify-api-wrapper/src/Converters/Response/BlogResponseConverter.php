<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Blog;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class BlogResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class BlogResponseConverter extends ResponseConverter
{
    /**
     * @var MetafieldResponseConverter
     */
    protected $metafield_parser;

    /**
     * BlogJsonParser constructor.
     */
    public function __construct()
    {
        $this->metafield_parser = new MetafieldResponseConverter;
    }

    /**
     * @param \stdClass $json
     * @return ShopifyResource|Blog
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $blog = new Blog();
        $blog->allowOverride();
        $blog->id                   = $json->id ?? null;
        $blog->created_at           = $json->created_at ?? null;
        $blog->updated_at           = $json->updated_at ?? null;
        $blog->commentable          = $json->commentable ?? null;
        $blog->feedburner           = $json->feedburner ?? null;
        $blog->feedburner_location  = $json->feedburner_location ?? null;
        $blog->handle               = $json->handle ?? null;
        $blog->template_suffix      = $json->template_suffix ?? null;
        $blog->title                = $json->title ?? null;
        $blog->metafield            = $json->metafield ?? false ? $this->metafield_parser->process($json->metafield) : null;
        $blog->tags                 = $json->tags ?? false ? explode(',', $json->tags) : [];

        return $blog;
    }
}
