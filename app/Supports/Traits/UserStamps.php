<?php


namespace App\Supports\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

trait UserStamps
{
    public static function bootUserStamps()
    {
        $userId = Auth::id();
        if ($userId) {
            static::creating(function ($model) use ($userId) {
                if ($userId && self::checkUserStampColumn($model->getTable(), 'created_by')) {
                    $model->created_by = $userId;
                }

                if ($userId && self::checkUserStampColumn($model->getTable(), 'updated_by')) {
                    $model->updated_by = $userId;
                }
            });

            static::updating(function ($model) use ($userId) {
                if ($userId && self::checkUserStampColumn($model->getTable(), 'updated_by')) {
                    $model->updated_by = $userId;
                }
            });
        }
    }

    public static function checkUserStampColumn($model, $column): bool
    {
        return Schema::hasColumn($model, $column);
    }

    public function manualUpdateTimeStamps(bool $wasModelChanged)
    {
        if (!$wasModelChanged && $this->updated_at) {
            $this->updated_at = Carbon::now();
            $this->save();
        }
    }
}
