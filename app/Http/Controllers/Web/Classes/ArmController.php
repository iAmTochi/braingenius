<?php

namespace App\Http\Controllers\Web\Classes;

use App\Http\Requests\Classes\CreateArmRequest;
use App\Models\Classes\Arm;
use App\Models\Classes\Classes;
use App\Repositories\Classes\ArmRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArmController extends Controller
{

    private $arm;

    public function __construct(ArmRepository $arm)
    {
        $this->arm = $arm;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armCount = 0;
        $classCount = 0;
        $title = "Classes and Arms";
        return view('classes.arm_and_class')
            ->with('arms', Arm::all())->with('armCount', $armCount)
            ->with('classes', Classes::all())->with('classCount', $classCount)
            ->with('title', $title)
            ;
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
    public function store(CreateArmRequest $request)
    {
        $data['arm'] = strtoupper($request->arm);
        $data['created_by'] = Auth::user()->uuid;

        $this->arm->create($data);

        session()->flash('success','Arm add successfully');

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
