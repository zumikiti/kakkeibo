<?php

namespace Tests\UnitActions\Item;

use App\Actions\Item\CreateItem;
use App\Models\Item;
use ReflectionClass;
use Tests\TestCaseWithDb;

class CreateItemTest extends TestCaseWithDb
{
    public function testCreate()
    {
       $input = Item::factory()->make()->toArray();

       $create = app(CreateItem::class);

       $create->execute($input);

       $this->assertDatabaseHas('items', $input);
    }
}
