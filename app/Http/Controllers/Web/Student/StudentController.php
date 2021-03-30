<?php

namespace App\Http\Controllers\Web\Student;

use App\Models\Genotype;
use App\Models\House\SportHouse;
use App\Models\Religion;
use App\Models\ResidenceType;
use App\Models\State\Lga;
use App\Models\State\State;
use App\Repositories\Classes\ClassArmRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($this->classArm->all());
        return view('users.student.create')
            ->withTitle('Student Registration')
            ->withStates(State::all())
            ->withLgas(Lga::all())
            ->withGenotypes(Genotype::all())
            ->withReligions(Religion::all())
            ->withResidenceTypes(ResidenceType::all())
            ->withSportHouses(SportHouse::all())
            ->withClassArms($this->classArm->all());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        //
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
