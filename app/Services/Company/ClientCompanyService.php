<?php

namespace App\Services\Company;

use App\Repositories\Company\ClientCompanyRepository;

class ClientCompanyService implements IClientCompanyService
{
    private ClientCompanyRepository $clientCompanyRepository;

    public function __construct(ClientCompanyRepository $clientCompanyRepository)
    {
        $this->clientCompanyRepository = $clientCompanyRepository;
    }

    public function getList()
    {
        return $this->clientCompanyRepository->getListByFilters();
    }
}
