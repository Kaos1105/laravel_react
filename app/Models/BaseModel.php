<?php

namespace App\Models;

use App\Supports\Traits\UserStamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBaseModel
 */
class BaseModel extends Model
{
    use HasFactory, UserStamps;

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function createdUserName()
    {
        $createdUser = User::whereId($this->created_by)->first();
        return $createdUser ? $createdUser->name : '';
    }

    public function updatedUserName()
    {
        $updatedUser = User::whereId($this->updated_by)->first();
        return $updatedUser ? $updatedUser->name : '';
    }
}
