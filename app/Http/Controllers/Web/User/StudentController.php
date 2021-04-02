<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Requests\User\Student\CreateStudentRequest;
use App\Models\Classes\ClassArm;
use App\Models\Genotype;
use App\Models\House\SportHouse;
use App\Models\Religion;
use App\Models\ResidenceType;
use App\Models\State\Lga;
use App\Models\State\State;
use App\Models\User;
use App\Models\User\Guardian;
use App\Models\User\Student;
use App\Traits\GenerateUsername;
use App\Traits\UploadPassport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class StudentController extends Controller
{
    use GenerateUsername, UploadPassport;
    private $classArm;

    public function __construct()
    {
        $this->classArm = new ClassArm();
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
            ->with('title', 'Student Registration')
            ->with('states', State::all())
            ->with('lgas', Lga::all())
            ->with('genotypes', Genotype::all())
            ->with('religions', Religion::all())
            ->with('residenceTypes', ResidenceType::all())
            ->with('sportHouses', SportHouse::all())
            ->with('classArms', $this->classArm->classArms());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStudentRequest $request)
    {
        dd($request->all());
        DB::beginTransaction();

        try {
            $guard_user = User::create([
                'username' => $this->generateUsername('','',''),
                'type'=> 'lvl02',
                'status' => true,
                //'email' => 'ugwukelvintochukwu@gmail.com',
                'password' => Hash::make('Welcome@1'),
            ]);
            $stud_user = User::create([
                'username' => $this->generateUsername('','',''),
                'type'=> 'lvl01',
                'status' => true,
                //'email' => 'ugwukelvintochukwu@gmail.com',
                'password' => Hash::make('Welcome@1'),
            ]);

            $guardian = Guardian::create([
                'user_uuid'     => $guard_user->uuid,
                'title'         => $request->title,
                'last_name'     => $request->p_last_name,
                'first_name'    => $request->p_first_name,
                'other_name'    => $request->p_other_name,
                'email'     => $request->p_email,
                'phone'     => $request->p_phone,
                'image'     => $request->p_last_name,
                'house_address'     => $request->home_address,
                'office_address'    => $request->office_address,
                'occupation'        => $request->occupation,
                'next_kin'          => $request->next_kin,
                'next_kin_phone'    => $request->next_kin_phone,
                'created_by'    => auth()->user()->uuid,
            ]);

            $student = Student::create([
                'user_uuid' => $stud_user->uuid,
            ]);


            DB::commit();
        } catch (\Exception $ex) {

            DB::rollBack();
            throw $ex;
        }

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
