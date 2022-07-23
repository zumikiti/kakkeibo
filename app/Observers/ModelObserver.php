<?php

namespace App\Observers;

use App\Actions\Database\LogDatabaseCreator;
use App\Actions\Database\LogDatabaseDeleter;
use App\Actions\Database\LogDatabaseUpdater;
use Illuminate\Database\Eloquent\Model;

class ModelObserver
{
    public function __construct()
    {
    }

    /**
     * Handle the model "creating" event.
     *
     * @param Model $model
     */
    public function creating(Model $object)
    {
        $logDbCreator = app(LogDatabaseCreator::class);
        $logDbCreator->execute($object);
    }

    /**
     * Handle the model "updating" event.
     *
     * @param Model $model
     */
    public function updating(Model $object)
    {
        $logDbUpdater = app(LogDatabaseUpdater::class);
        $logDbUpdater->execute($object);
    }

    /**
     * Handle the model "deleting" event.
     *
     * @param Model $model
     */
    public function deleting(Model $object)
    {
        $logDbDeleter = app(LogDatabaseDeleter::class);
        $logDbDeleter->execute($object);
    }
}
