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
        $sub = Subject::all();
       // dd($this->subject->subjects());
     //dd($sub[0]->department());

        return view('classes.subjects')
                  ->with('subjects', $sub)
                 ->with('departments', $this->department->departments())
                 ->with('title', $title)
                 ->with('subjectCount', $subjectCount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
        $subject = Subject::where('uuid', $id)->first();
        $subject->full_name = $request->full_name;
        $subject->short_name = $request->short_name;
        $subject->dept_uuid = $request->department;

       // dd($subject);
        if($subject->save()){
            Session()->flash('success', 'Subject Updated Successfully');
            return redirect()->back();
        }

        
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $subject = Subject::where('id', $id)->first();
        if($subject->delete()){
            Session()->flash('error', 'Subject Deleted Successfully');
            return redirect()->back();
        }
    }
}
