<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Flash;

class CompanyController extends Controller
{   
    public function __construct(CompanyRepository $companyRepo) {
        $this->companyRepository       = $companyRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data      = $this->companyRepository->get();
            $dataTable = Datatables::of($data);
            $dataTable->addIndexColumn();                     
            return $dataTable
                    ->addColumn('action', 'company.datatable_actions')
                    ->addColumn('logo',function($company) {
                        return '<img width="50" src="'.url($company->logo).'" alt=""/>';
                    })
                    ->rawColumns(['action','logo'])
                    ->make(true);
        }
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCompanyRequest $request)
    {
        $input = $request->all();
        try {
            //Upload the logo
            $filePath      = $request->file('logo')->store('uploads', 'public');
            $fileUrl       = Storage::url($filePath);
            $input['logo'] = $fileUrl;

            //Store the company 
            $company = $this->companyRepository->create($input);    
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }
        Flash::success(__('Save successfully',['operator' => __('Company')]));
        return redirect(route('companies.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = $this->companyRepository->find($id);
        if (empty($company)) {
            Flash::error(__('Not Found',['operator' => __('Company')]));
            return redirect(route('companies.index'));
        }
        return view('company.index',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateCompanyRequest $request)
    {
        $company = $this->companyRepository->find($id);
        if (empty($food_day)) {
            Flash::error('Company not found');
            return redirect(route('companies.index'));
        }
        $input = $request->all();
        try {
            $company = $this->companyRepository->update($input, $id);
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('Updated successfully',['operator' => __('Company')]));
        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = $this->companyRepository->find($id);
        if (empty($company)) {
            Flash::error('Company not found');
            return redirect(route('companies.index'));
        }
        $this->companyRepository->delete($id);

        Flash::success(__('Deleted successfully',['operator' => __('Company')]));
        return redirect(route('companies.index'));
    }
}
