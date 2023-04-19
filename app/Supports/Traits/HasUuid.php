<?php


namespace App\Supports\Traits;


use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string)Str::uuid();
            }
        });
    }

    /**
     * @inheritDoc
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function getKeyType()
    {
        return 'string';
    }
}
