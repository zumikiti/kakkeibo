<?php

namespace  App\Actions\Item;

use App\Models\Item;

class CreateItem
{
    public function execute(array $input)
    {
        return Item::create($input);
    }
}
