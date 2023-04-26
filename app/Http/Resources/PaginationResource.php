<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;
use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;

/**
 * Transform the resource into an array.
 *
 * @mixin   LengthAwarePaginator
 */
class PaginationResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */

    #[ArrayShape(['collection' => "\Illuminate\Support\Collection", 'pagination' => "array"])]
    public function toArray(Request $request): array|JsonSerializable|Arrayable
    {
        return [
            'collection' => $this->collection,
            'pagination' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'perPage' => $this->perPage(),
                'currentPage' => $this->currentPage(),
                'totalPages' => $this->lastPage()
            ]
        ];
    }
}
