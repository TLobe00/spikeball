<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\BlogArticle;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class BlogArticleResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class BlogArticleResponseConverter extends ResponseConverter
{
    /**
     * @var MetafieldResponseConverter
     */
    protected $metafield_parser;

    /**
     * BlogArticleJsonParser constructor.
     */
    public function __construct()
    {
        $this->metafield_parser = new MetafieldResponseConverter;
    }

    /**
     * @param \stdClass $json
     * @return ShopifyResource|BlogArticle
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $blogarticle = new BlogArticle();
        $blogarticle->allowOverride();
        $blogarticle->id                   = $json->id ?? null;
        $blogarticle->created_at           = $json->created_at ?? null;
        $blogarticle->updated_at           = $json->updated_at ?? null;
        $blogarticle->author               = $json->author ?? null;
        $blogarticle->body_html            = $json->body_html ?? null;
        $blogarticle->image                = $json->image ?? null;
        $blogarticle->handle               = $json->handle ?? null;
        $blogarticle->blog_id              = $json->blog_id ?? null;
        $blogarticle->published            = $json->published ?? null;
        $blogarticle->summary_html         = $json->summary_html ?? null;
        $blogarticle->published_at         = $json->published_at ?? null;
        $blogarticle->user_id              = $json->user_id ?? null;
        $blogarticle->template_suffix      = $json->template_suffix ?? null;
        $blogarticle->title                = $json->title ?? null;
        $blogarticle->metafield            = $json->metafield ?? false ? $this->metafield_parser->process($json->metafield) : null;
        $blogarticle->tags                 = $json->tags ?? false ? explode(',', $json->tags) : [];

        return $blogarticle;
    }
}
