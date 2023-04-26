<?php

namespace App\Http\Resources\Company;

use App\Enums\Common\DateTimeEnum;
use App\Http\Resources\User\ClientUserItemResource;
use App\Models\Company\ClientCompany;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Transform the resource into an array.
 *
 * @mixin   ClientCompany
 */
class ClientCompanyItemResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'operation_classification'=>$this->operation_classification,
            'name' => $this->name,
            'date_start' => $this->date_start->format(DateTimeEnum::DATE_TIME_FORMAT),
            'date_end' => $this->date_end->format(DateTimeEnum::DATE_TIME_FORMAT),
            'client_users' => $this->whenLoaded('client_users', function () {
                return ClientUserItemResource::collection($this->client_users);
            }, null),
            'next_billing_date' => $this->next_billing_date?->format(DateTimeEnum::DATE_TIME_FORMAT),
            'next_billing_amount' => $this->next_billing_amount,
            'client_classification' => $this->client_classification,
            'payment_classification' => $this->payment_classification,
            'use_classification' => $this->use_classification,
            'note' => $this->note,
        ];
    }
}
