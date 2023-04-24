<?php

namespace App\Repositories\SystemUser;

use App\Models\SystemUser;
use App\Supports\Traits\HasPagination;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Prettus\Repository\Eloquent\BaseRepository;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;


class SystemUserRepositoryEloquent extends BaseRepository implements SystemUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    use HasPagination;

    public function model()
    {
        return SystemUser::class;
    }

    protected string $defaultSort = 'id';

    protected array $defaultSelect = [
        'system_users.id',
        'system_users.name',
        'system_users.login_id',
        'system_users.lock_flag',
        'system_users.failure_count',
        'system_users.last_locked_at',
        'system_users.created_at',
        'system_users.created_by',
        'system_users.updated_at',
        'system_users.updated_by'
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
