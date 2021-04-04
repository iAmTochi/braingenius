<?php

namespace App\Http\Controllers\Web\Subject;


use App\Http\Requests\Subject\CreateSubjectRequest;

use App\Models\Classes\Department;
use App\Models\Classes\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{

    private $subject;
    private $department;

    public function __construct()
    {
        $this->department = new Department();
        $this->subject = new Subject();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = 'Subject';
        $subjectCount = 0;
        return view('classes.subjects')
            ->with('subjects', $this->subject->subjects())
            ->with('departments', $this->department->departments())
            ->with('title', $title)->with('subjectCount', $subjectCount);
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
    public function store(CreateSubjectRequest $request)
    {

        $this->subject->create([
            'full_name' => ucfirst($request->full_name),
            'short_name' => strtoupper($request->short_name),
            'dept_uuid' => $request->department,
            'created_by' => auth()->user()->uuid
        ]);

        session()->flash('success','Subject created successfully');

        return back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
