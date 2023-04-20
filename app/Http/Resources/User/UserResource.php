<?php

namespace App\Http\Resources\User;

use App\Models\User;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * Transform the resource into an array.
 *
 * @mixin   User
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray(Request $request)
    {
        return [
            'login_id' => $this->login_id,
            'name' => $this->name,
            'code' => $this->code,
        ];
    }
}
