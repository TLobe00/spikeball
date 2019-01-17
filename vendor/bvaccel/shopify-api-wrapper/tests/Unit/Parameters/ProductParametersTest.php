<?php

namespace Tests\Unit\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ProductParameters;

class ProductParametersTest extends \Tests\TestCase
{
    /** @test */
    public function can_build_search_parameters_object()
    {
        $parameters = new ProductParameters();

        $parameters->fields(['tags'])
            ->ids([12345, 12346])
            ->page(12)
            ->limit(5)
            ->sinceId('1')
            ->title('title')
            ->vendor('vendor')
            ->handle('test-handle-1')
            ->updatedAtMin('2018-01-01 00:00:00')
            ->createdAtMin('2018-01-01 00:00:00')
            ->publishedAtMin('2018-01-01 00:00:00')
            ->updatedAtMax('2019-01-01 00:00:00')
            ->createdAtMax('2019-01-01 00:00:00')
            ->publishedAtMax('2019-01-01 00:00:00')
            ->publishedStatus('published')
            ->collectionId('12345');

        $this->assertArrayHasKey('fields', $parameters->getParameters());
        $this->assertArrayHasKey('ids', $parameters->getParameters());
        $this->assertArrayHasKey('page', $parameters->getParameters());
        $this->assertArrayHasKey('limit', $parameters->getParameters());
        $this->assertArrayHasKey('since_id', $parameters->getParameters());
        $this->assertArrayHasKey('title', $parameters->getParameters());
        $this->assertArrayHasKey('vendor', $parameters->getParameters());
        $this->assertArrayHasKey('handle', $parameters->getParameters());
        $this->assertArrayHasKey('updated_at_min', $parameters->getParameters());
        $this->assertArrayHasKey('updated_at_max', $parameters->getParameters());
        $this->assertArrayHasKey('created_at_min', $parameters->getParameters());
        $this->assertArrayHasKey('created_at_max', $parameters->getParameters());
        $this->assertArrayHasKey('published_at_min', $parameters->getParameters());
        $this->assertArrayHasKey('published_at_max', $parameters->getParameters());
        $this->assertArrayHasKey('published_status', $parameters->getParameters());
        $this->assertArrayHasKey('collection_id', $parameters->getParameters());

        $this->assertEquals('tags', $parameters->getParameters()['fields']);
        $this->assertEquals('12345,12346', $parameters->getParameters()['ids']);
        $this->assertEquals('12', $parameters->getParameters()['page']);
        $this->assertEquals('title', $parameters->getParameters()['title']);
        $this->assertEquals('5', $parameters->getParameters()['limit']);
        $this->assertEquals('1', $parameters->getParameters()['since_id']);
        $this->assertEquals('vendor', $parameters->getParameters()['vendor']);
        $this->assertEquals('test-handle-1', $parameters->getParameters()['handle']);
        $this->assertEquals('2018-01-01 00:00:00', $parameters->getParameters()['updated_at_min']);
        $this->assertEquals('2019-01-01 00:00:00', $parameters->getParameters()['updated_at_max']);
        $this->assertEquals('2018-01-01 00:00:00', $parameters->getParameters()['created_at_min']);
        $this->assertEquals('2019-01-01 00:00:00', $parameters->getParameters()['created_at_max']);
        $this->assertEquals('2018-01-01 00:00:00', $parameters->getParameters()['published_at_min']);
        $this->assertEquals('2019-01-01 00:00:00', $parameters->getParameters()['published_at_max']);
        $this->assertEquals('published', $parameters->getParameters()['published_status']);
        $this->assertEquals('12345', $parameters->getParameters()['collection_id']);

    }
}