<?php

namespace App\Http\Controllers\Web\Department;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Models\Classes\Department;
use App\Http\Controllers\Controller;
use App\Traits\ActivityLog\ActivityLogTrait;
use Illuminate\Support\Facades\DB;



class DepartmentController extends Controller
{
    use ActivityLogTrait;
    private $department;


    public function __construct()
    {
        $this->department = new Department();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|
     * \Illuminate\Contracts\View\Factory|
     * \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $title = 'Departments';
        $deptCount = 0;
        return view('classes.department')
            ->with('departments', $this->department->departments())
            ->with('title', $title)->with('deptCount', $deptCount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param CreateDepartmentRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateDepartmentRequest $request)
    {

        $dept = $this->department->create([
            'dept_name' => strtoupper($request->dept_name),
            'created_by' => auth()->user()->uuid
        ]);

        $this->create_activity('Created new department - '.$dept->dept_name);

        session()->flash('success', $dept->dept_name.' department  added successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param Department $department
     * @return \Illuminate\Contracts\View\Factory
     * |\Illuminate\View\View
     */
    public function edit(Department $department)
    {
        $title = 'Edit Department';
        return view('classes.department')
            ->with('department', $department)
            ->with('title', $title);
    }

    /**
     * @param CreateDepartmentRequest $request
     * @param Department $department
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateDepartmentRequest $request, Department $department)
    {
        $data['dept_name'] = strtoupper($request->dept_name);
        $data['updated_by'] = auth()->user()->uuid;

        DB::beginTransaction();
        try {
            $department->update($data);

            $this->create_activity('Updated department name from '. $department->dept_name. ' to ' .strtoupper($request->dept_name));

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            throw $ex;
        }

        session()->flash('success','Department  Updated successfully');

        return redirect()->route('department.index');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $id;
    }
}
