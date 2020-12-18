<?php

namespace App\Http\Controllers\Web\Classes;

use App\Http\Requests\Classes\CreateClassArmRequest;
use App\Model\Classes\ClassArm;
use App\Repositories\Classes\ClassArmRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassArmController extends Controller
{
    private $classArm;


    public function __construct(ClassArmRepository $classArm)
    {
        $this->classArm = $classArm;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd($this->classArm->all());
        $classArmCount = 0;
        $title = "Manage class arms";
        return view('classes.class_arm')->with('classArms', $this->classArm->all())
            ->with('classArmCount', $classArmCount)
            ->with('title', $title);
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
    public function store(CreateClassArmRequest $request)
    {
        $data['class_uuid'] = $request->class_id;
        $data['arm_uuid'] = $request->arm_id;
        $data['created_by'] = Auth::user()->uuid;


        if($this->classArm->isClassArmExist($request->class_id, $request->arm_id) > 0){

            //flash message
            session()->flash('error', 'Oops!  The Class arm you are trying to add is already existing');
            // redirect the user
            return redirect()->back();
        }

        $this->classArm->create($data);

        session()->flash('success','Class Arm add successfully');

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
