<?php

namespace App\Http\Controllers\Web\Department;

use App\Helpers\UuidHelper;
use App\Http\Requests\Department\CreateDepartmentRequest;
use App\Models\Classes\Department;


use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;
use Browser;

class DepartmentController extends Controller
{
    private $department;

    public function __construct()
    {
        $this->department = new Department();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//                $bro = Browser::browserName();
                //dd(Browser::isMobile());
//         $browserDetails = Browser::browserName();
//         $browser = Browser::platformName();
//        dd($browserDetails."::".$browser);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartmentRequest $request)
    {

        $this->department->create([
            'dept_name' => strtoupper($request->dept_name),
            'created_by' => auth()->user()->uuid
        ]);

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
