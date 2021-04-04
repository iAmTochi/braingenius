<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Requests\User\Staff\CreateStaffRequest;
use App\Models\Classes\Department;
use App\Models\User\Staff;
use App\Traits\UploadPassport;
use App\Traits\User\CreateUserData;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    use UploadPassport, CreateUserData;

    private $department;
    private $staff;

    public function __construct()
    {
        //$this->middleware('isStaff')->only(['profile','update']);

        $this->middleware('isAdmin')->except(['profile','update']);

        $this->department = new Department();
        $this->staff = new Staff();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd($this->staff->all());
        //dd(auth()->user()->staff->first_name.' '.auth()->user()->staff->last_name );
        return view('users.staff.index')
            ->with('title','All Staff')
            ->with('count',0)
            ->with('staffs',$this->staff->staffs());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.staff.create')
//            ->with('types',Type::all())
            ->with('title','Create New Staff Account')
            ->with('departments', Department::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStaffRequest $request)
    {

        DB::beginTransaction();
        try {
            $user = User::create([
                'username' => strtolower($request->first_name.'.'.substr($request->last_name,'0','3').(!empty($request->other_name)?'_'.substr($request->other_name,'0',2):"")),
                'status' => true,
                'type' => 'lvl03',
//                'email' => $request->email,
                'password' => Hash::make('password'),
            ]);


            $data = $this->staffRequest($request);

            if($request->hasFile('image')){
                $data['image'] = $this->hasImage($request,'passport/staff');
            }


            $data['user_uuid'] = $user->uuid;
            $data['created_by'] = auth()->user()->uuid;
            $data['house_uuid'] = $request->sportHouse;


            $this->staff->create($data);

            DB::commit();
        } catch (\Exception $ex) {

            DB::rollBack();
            throw $ex;
        }

        //flash message
        session()->flash('success', 'Great! '. $request->first_name.' '.$request->last_name . ' has been add to the staff list successfully');
        // redirect the user
        return redirect()->route('staff.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('users.profile.staff_profile')
            ->withTitle('Staff profile')
            ->withStaff($staff);
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
     * @param Request $request
     * @param Staff $staff
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Staff $staff)
    {
        $data = $this->staffRequest($request);
        $data['updated_by'] = auth()->user()->uuid;
        // check if new image
        if($request->hasFile('image')){
            $data['image'] = $this->hasImage($request,'passport/staff');
        }

        $staff->update($data);

        //flash message
        session()->flash('success', 'Great! '.$request->title.' '.$request->first_name.' '.$request->last_name . ' has been updated successfully');
        // redirect the admin profile
        return back();
    }


    /**
     * @param $uuid
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($uuid)
    {
        $uuid = Staff::withTrashed()->where('uuid', $uuid)->firstOrFail();
        if ($uuid->trashed()){
            $uuid->deleteImage();
            $uuid->forceDelete();
        } else {

            $uuid->delete();
            $uuid->user->delete();
        }

        session()->flash('success', $uuid->first_name.' '.$uuid->last_name.' Delete successfully');

        return redirect()->back();
    }

    public function profile()
    {
        $staff = auth()->user()->staff;

        return  $this->show($staff);
    }


}
