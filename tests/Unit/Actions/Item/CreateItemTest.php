<?php

namespace Tests\UnitActions\Item;

use App\Actions\Item\CreateItem;
use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateItemTest extends TestCase
{
    use RefreshDatabase;

    public function testCreate()
    {
       $input = Item::factory()->make()->toArray();

       $create = app(CreateItem::class);

       $create->execute($input);

       $this->assertDatabaseHas('items', $input);
    }
}
