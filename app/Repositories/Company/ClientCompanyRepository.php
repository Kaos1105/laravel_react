<?php

namespace App\Repositories\Company;

use Prettus\Repository\Contracts\RepositoryInterface;


interface ClientCompanyRepository extends RepositoryInterface
{
    //
    public function findByFilters();

    public function getListByFilters();

    public function findAll();

    public function showWithRelationship(string $id);
}
