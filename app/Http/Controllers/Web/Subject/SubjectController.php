<?php

namespace App\Http\Controllers\Web\Subject;


use App\Http\Requests\Subject\CreateSubjectRequest;
use App\Model\Classes\Subject;
use App\Repositories\Department\DepartmentRepository;
use App\Repositories\Subject\SubjectRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{

    private $subject;
    private $department;

    public function __construct(DepartmentRepository $department, SubjectRepository $subject)
    {
        $this->department = $department;
        $this->subject = $subject;
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
            ->with('subjects', $this->subject->all())
            ->with('departments', $this->department->all())
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

        $data['full_name']      =   ucfirst($request->name);
        $data['short_name']     =   strtoupper($request->short);
        $data['dept_uuid']      =   $request->dept_id;
        $data['created_by']      =  auth()->user()->uuid;

        $this->subject->create($data);

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
