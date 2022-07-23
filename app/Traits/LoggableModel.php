<?php

namespace App\Traits;

use App\Observers\ModelObserver;

/**
 * モデルの作成・編集・削除する時に認証したユーザーを記録する
 */
trait LoggableModel
{
    public static function bootLoggableModel()
    {
        static::observe(new ModelObserver());
    }
}
