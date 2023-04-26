<?php

namespace App\Http\Resources\Company;

use App\Http\Resources\PaginationResource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;


/**
 * Transform the resource into an array.
 *
 * @mixin   LengthAwarePaginator
 */
class ClientCompanyCollection extends PaginationResource
{

    public $collects = ClientCompanyItemResource::class;

    #[ArrayShape(['collection' => "\Illuminate\Support\Collection", 'pagination' => "array"])]
    public function toArray(Request $request = null): array|JsonSerializable|Arrayable
    {
        return parent::toArray($request);
    }

}
