<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Resources\Company\ClientCompanyCollection;
use App\Services\Company\IClientCompanyService;
use Inertia\Inertia;

class ClientCompanyController extends Controller
{
    private IClientCompanyService $clientCompanyService;

    public function __construct(IClientCompanyService $clientCompanyService)
    {
        $this->clientCompanyService = $clientCompanyService;
    }

    public function index(): \Inertia\Response
    {
        $companies = $this->clientCompanyService->getList();
        return Inertia::render('Profile/Edit',  ClientCompanyCollection::make($companies)->toArray(request()));
    }

}
