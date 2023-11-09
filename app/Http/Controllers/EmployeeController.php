<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use App\Repositories\EmployeeRepository;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Flash;

class EmployeeController extends Controller
{   
    public function __construct(CompanyRepository $companyRepo,EmployeeRepository $employeeRepo,) {
        $this->companyRepository  = $companyRepo;
        $this->employeeRepository = $employeeRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data      = $this->employeeRepository->get();
            $dataTable = Datatables::of($data);
            $dataTable->addIndexColumn();                     
            return $dataTable
                    ->addColumn('action', 'employee.datatable_actions')
                    ->addColumn('company',function($employee) {
                        return $employee->company->name;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $companies = $this->companyRepository->pluck('name','id');
        return view('employee.index',compact('companies'));
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
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();
        try {
            //Store the employee 
            $employee = $this->employeeRepository->create($input);    
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }
        Flash::success(__('Save successfully',['operator' => __('Employee')]));
        return redirect(route('employees.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = $this->employeeRepository->find($id);
        if (empty($employee)) {
            Flash::error(__('Not Found',['operator' => __('Employee')]));
            return redirect(route('employees.index'));
        }
        $companies = $this->companyRepository->pluck('name','id');
        return view('employee.index',compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        $employee = $this->employeeRepository->find($id);
        if (empty($employee)) {
            Flash::error(__('Not Found',['operator' => __('Employee')]));
            return redirect(route('employees.index'));
        }
        $input = $request->all();
        try {
            $employee = $this->employeeRepository->update($input, $id);
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('Updated successfully',['operator' => __('Employee')]));
        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = $this->employeeRepository->find($id);
        if (empty($employee)) {
            Flash::error('Employee not found');
            return redirect(route('employees.index'));
        }
        $this->employeeRepository->delete($id);

        Flash::success(__('Deleted successfully',['operator' => __('Employee')]));
        return redirect(route('employees.index'));
    }
}
