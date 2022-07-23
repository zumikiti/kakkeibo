<?php

namespace App\Actions\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

/**
 * 新規作成したユーザーを新しいオブジェクトの行に登録
 */
class LogDatabaseCreator
{
    public function __construct()
    {
    }

    /**
     * 新規作成したユーザーを新しい行に登録
     * @param Model $object 新規作成されたオブジェクト
     * @return Model
     */
    public function execute(Model $object)
    {
        if ($registerer = Auth::user()) {
            $object->created_user_id = $registerer->id;
        }

        return $object;
    }
}
