<?php

namespace App\Repositories\Company;

use App\Models\Company\ClientCompany;
use App\Models\SystemUser;
use App\Supports\Traits\HasPagination;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Eloquent\BaseRepository;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;


class ClientCompanyRepositoryEloquent extends BaseRepository implements ClientCompanyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    use HasPagination;

    public function model(): string
    {
        return ClientCompany::class;
    }

    protected string $defaultSort = 'id';

    protected array $defaultSelect = [
        'client_companies.id',
        'client_companies.name',
        'client_companies.name_kana',
        'client_companies.operation_classification',
        'client_companies.date_start',
        'client_companies.date_end',
        'client_companies.bill_to',
        'client_companies.in_charge_name',
        'client_companies.in_charge_tel',
        'client_companies.in_charge_email',
        'client_companies.next_billing_date',
        'client_companies.next_billing_amount',
        'client_companies.contract_history',
        'client_companies.client_classification',
        'client_companies.payment_classification',
        'client_companies.note',
        'client_companies.use_classification',
        'client_companies.created_by',
        'client_companies.updated_by',
        'client_companies.created_at',
        'client_companies.updated_at',
    ];

    protected array $allowedFilters = [
        'name',
    ];

    protected function allowedExactFilters(): array
    {
        return [
            AllowedFilter::exact('id'),
        ];
    }

    protected function allowedScopedFilters(): array
    {
        return [
        ];
    }

    protected function allowedCustomFilters(): array
    {
        return [
        ];
    }

    protected array $allowedSorts = [
        'updated_at',
        'name',
        'id',
    ];

    protected function allowedCustomSorts(): array
    {
        return [
        ];
    }

    protected array $allowedIncludes = [
    ];

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        //$this->pushCriteria(app(RequestCriteria::class));
    }

    protected function filters(): QueryBuilder
    {
        return QueryBuilder::for($this->model)
            ->allowedFilters([
                ...$this->allowedFilters,
                ...$this->allowedExactFilters(),
                ...$this->allowedScopedFilters(),
                ...$this->allowedCustomFilters(),
            ])
            ->allowedIncludes($this->allowedIncludes)
            ->allowedSorts([
                ...$this->allowedSorts,
                ...$this->allowedCustomSorts()
            ])
            ->defaultSort($this->defaultSort)
            ->select($this->defaultSelect);
    }

    public function getListByFilters(): LengthAwarePaginator
    {
        return $this->filters()->with(['client_users' => function (HasMany $hasMany){
            $hasMany->select(['id', 'client_company_id', 'name', 'login_id']);
        }])->paginate($this->getPerPage());
    }

    public function findByFilters(): LengthAwarePaginator
    {
        return $this->filters()->paginate($this->getPerPage());
    }

    public function findAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->filters()->get();
    }

    public function showWithRelationship(string $id): \Illuminate\Database\Eloquent\Model|QueryBuilder
    {
        return QueryBuilder::for(SystemUser::whereId($id))
            ->allowedIncludes($this->allowedIncludes)
            ->select($this->defaultSelect)
            ->firstOrFail();
    }
}
