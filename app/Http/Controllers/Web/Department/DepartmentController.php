<?php

namespace App\Http\Controllers\Web\Department;

use App\Helpers\UuidHelper;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Models\Classes\Department;
use App\Repositories\Department\DepartmentRepository;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Browser;

class DepartmentController extends Controller
{
    private $department;

    public function __construct(DepartmentRepository $department)
    {
        $this->department = $department;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Departments';
        $deptCount = 0;
        return view('classes.department')
            ->with('departments', Department::all())
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartmentRequest $request)
    {

//        Browser::browserName();
        $browserDetails = Browser::browserName();
        $browser = Browser::platformName();
//        dd($browserDetails."::".$browser);
        dd(UuidHelper::r());
        $data['dept_name'] = strtoupper($request->dept_name);
        $data['created_by'] = Auth::user()->uuid;

        $this->department->create($data);

        session()->flash('success','Department  Added successfully');

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Department $department)
    {
        $title = 'Edit Department';
        return view('classes.department')
            ->with('department', $department)
            ->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDepartmentRequest $request, Department $department)
    {
        $data['dept_name'] = strtoupper($request->dept_name);
        $data['updated_by'] = Auth::user()->uuid;

        $department->update($data);

        session()->flash('success','Department  Updated successfully');

        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
