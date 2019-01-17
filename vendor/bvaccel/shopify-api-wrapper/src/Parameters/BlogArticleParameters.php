<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\HandleParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\LimitParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PageParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PublishedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PublishedStatusParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\AuthorParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\TagParameterTrait;

/**
 * Class BlogArticleParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class BlogArticleParameters extends ParameterBuilder
{
    use FieldsParameterTrait,
        HandleParameterTrait,
        SinceIdParameterTrait,
        LimitParameterTrait,
        PageParameterTrait,
        CreatedAtParameterTrait,
        UpdatedAtParameterTrait,
        PublishedAtParameterTrait,
        PublishedStatusParameterTrait,
        AuthorParameterTrait,
        TagParameterTrait;
}
