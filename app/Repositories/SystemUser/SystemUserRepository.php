<?php

namespace App\Repositories\SystemUser;

use Prettus\Repository\Contracts\RepositoryInterface;


interface SystemUserRepository extends RepositoryInterface
{
    //
    public function findByFilters();

    public function findAll();

    public function showWithRelationship(string $id);
}
