<?php

namespace App\Containers\Company\UI\WEB\Controllers;

use App\Containers\Company\Models\Company;
use App\Containers\Company\UI\WEB\Requests\CreateCompanyRequest;
use App\Containers\Company\UI\WEB\Requests\DeleteCompanyRequest;
use App\Containers\Company\UI\WEB\Requests\GetAllCompaniesRequest;
use App\Containers\Company\UI\WEB\Requests\FindCompanyByIdRequest;
use App\Containers\Company\UI\WEB\Requests\UpdateCompanyRequest;
use App\Containers\Company\UI\WEB\Requests\StoreCompanyRequest;
use App\Containers\Company\UI\WEB\Requests\EditCompanyRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Http\Request;

/**
 * Class Controller
 *
 * @package App\Containers\Company\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllCompaniesRequest $request
     */
    public function index(GetAllCompaniesRequest $request)
    {
        $companies = Apiato::call('Company@GetAllCompaniesAction', [$request]);

        return view('company::list_of_company',
            ['companies' => $companies]);
    }

    /**
     * Show one entity
     *
     * @param FindCompanyByIdRequest $request
     */
    public function show(FindCompanyByIdRequest $request)
    {
        $company = Apiato::call('Company@FindCompanyByIdAction', [$request]);

        return view('company::show_edit_page',
        ['company' => $company]);
    }

    /**
     * Create entity (show UI)     *
     * @param CreateCompanyRequest $request
     */
    public function create(CreateCompanyRequest $request)
    {
        return view('company::create_company');
    }

    /**
     * Add a new entity
     *
     * @param StoreCompanyRequest $request
     */
    public function store(StoreCompanyRequest $request)
    {
        $company = Apiato::call('Company@CreateCompanyAction', [$request]);

        return redirect('company/index')
            ->with('success', 'Company created successfully');
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditCompanyRequest $request
     */
    public function edit(EditCompanyRequest $request)
    {
        $company = Apiato::call('Company@GetCompanyByIdAction', [$request]);

        // ..
    }

    /**
     * @param UpdateCompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCompanyRequest $request)
    {
        $company = Apiato::call('Company@UpdateCompanyAction', [$request]);

        return redirect('company/index')
            ->with('success', 'Company updated successfully');
    }

    /**
     * @param DeleteCompanyRequest $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(DeleteCompanyRequest $request)
    {

        $company = Apiato::call('Company@DeleteCompanyAction', [$request]);

        return redirect('company/index');
    }
}
