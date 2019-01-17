<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;

use BVAccel\ShopifyResources\Resources\OrderNoteAttribute;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class OrderNoteAttributeResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $note_attribute = new OrderNoteAttribute;
        $note_attribute->allowOverride();
        $note_attribute->name  = $data->name;
        $note_attribute->value = $data->value;

        return $note_attribute;
    }
}