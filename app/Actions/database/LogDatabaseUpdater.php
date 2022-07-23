<?php

namespace App\Actions\Database;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

/**
 * 更新したユーザーを新しいオブジェクトの行に登録
 */
class LogDatabaseUpdater
{
    public function __construct()
    {
    }

    /**
     * 更新したユーザーを新しい行に登録
     * @param Model $object 新規作成されたオブジェクト
     * @return Model
     */
    public function execute(Model $object)
    {
        if ($registerer = Auth::user()) {
            $object->updated_user_id = $registerer->id;
        }

        return $object;
    }
}
