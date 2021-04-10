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
use App\Traits\ActiveSession;
use App\Traits\GenerateUsername;
use App\Traits\UploadPassport;
use App\Traits\User\CreateUserData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class StudentController extends Controller
{
    use CreateUserData, GenerateUsername, UploadPassport, ActiveSession;
    private $classArm;
    private $student;
    private $guardian;

    public function __construct()
    {
        $this->classArm = new ClassArm();
        $this->student  = new Student();
        $this->guardian = new Guardian();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->student->students());
        return view('users.student.index')
            ->with('title','All Student')
            ->with('count',0)
            ->with('students', $this->student->students());
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


//        dd($request->all());
        $guard_username = $this->generateUsername($request->p_first_name, $request->p_last_name, $request->p_other_name);
        $stud_username = $this->generateUsername($request->first_name, $request->last_name, $request->other_name);
        DB::beginTransaction();
        try {
#=============== Creating guardian's account =========================
            $guard_user = User::create([
                'username' => $guard_username,
                'type'=> 'lvl02',
                'status' => true,
                //'email' => 'ugwukelvintochukwu@gmail.com',
                'password' => Hash::make('Welcome@1'),
            ]);

#===============Creating Student's account =================================
            $stud_user = User::create([
                'username' => $stud_username,
                'type'=> 'lvl01',
                'status' => true,
                //'email' => 'ugwukelvintochukwu@gmail.com',
                'password' => Hash::make('Welcome@1'),
            ]);

#================ Creating guardian's profile ==========================
            $guardian_data = $this->guardianData($request, $guard_user->uuid);
            if($request->hasFile('p_image')){
                $guardian_data['image'] = $this->hasImage($request,'passport/guardians',NULL, $guard_username,'p_image');
            }
            $this->guardian->create($guardian_data);




#================ Creating student's profile ==========================

            $student_data = $this->studentData($request, $stud_user->uuid, $guard_user->uuid, $this->currentSession()->uuid);
            if($request->hasFile('image')){
                $student_data['image'] = $this->hasImage($request,'passport/students',NULL, $stud_username);
            }

            $this->student->create($student_data);
           

            DB::commit();
        } catch (\Exception $ex) {

            DB::rollBack();
            throw $ex;
        }

        //flash message
        session()->flash('success', 'Great! '. $request->first_name.' '.$request->last_name . ' has been registered successfully');
        // redirect the user
        return redirect()->route('student.index');

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
