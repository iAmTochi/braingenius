<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Requests\Admin\CreateAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\User\Admin;
use App\Repositories\Admin\AdminRepository;
use App\Traits\UploadPassport;
use App\Traits\User\CreateUserData;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use UploadPassport, CreateUserData;
    private  $admin;

    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(auth()->user()->admin->uuid);
        return view('users.admin.index')
            ->with('title','All Administrator')
            ->with('count',0)
            ->with('admins',$this->admin->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.admin.create')

            ->with('title','Create New Administrator Account');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdminRequest $request)
    {

        DB::beginTransaction();
        try {
            $user = User::create([
                'username' => $request->username,
                'status' => true,
                'type' => $request->type,
                'email' => $request->email,
                'password' => Hash::make('password'),
            ]);

            $data = $this->adminRequest($request);
            if($request->hasFile('image')){
                $data['image'] = $this->hasImage($request,'passport/admin');
            }
            $data['user_uuid'] = $user->uuid;
            $data['created_by'] = auth()->user()->uuid;

            $this->admin->create($data);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            throw $ex;
        }


        //flash message
        session()->flash('success', 'Great! '. $request->first_name.' '.$request->last_name . ' has been add to the administrator list successfully');
        // redirect the user
        return redirect()->route('admin.index');

    }

    /**
     * @param Admin $admin
     * @return mixed
     */
    public function show(Admin $admin)
    {

        return view('users.profile.admin_profile')
            ->withTitle('Admin profile')
            ->withAdmin($admin);
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
     * @param UpdateAdminRequest $request
     * @param Admin $admin
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $data = $this->adminRequest($request);
        // check if new image
        if($request->hasFile('image')){
            $data['image'] = $this->hasImage($request,'passport/admin',$admin);
        }

        $data['updated_by'] = auth()->user()->uuid;

        $admin->update($data);

        //flash message
        session()->flash('success', 'Great! '. $request->first_name.' '.$request->last_name . ' has been updated successfully');
        // redirect the admin profile
        return redirect()->back();
    }

    /**
     * @param $uuid
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($uuid)
    {

        $admin = Admin::withTrashed()->where('uuid', $uuid)->firstOrFail();
        if ($admin->trashed()){
            $admin->deleteImage();
            $admin->forceDelete();
        } else {

            $admin->delete();
            $admin->user->delete();
        }

        session()->flash('success', 'Admin Delete successfully');

        return redirect()->back();


    }

    public function profile()
    {
       $admin = auth()->user()->admin;

        return  $this->show($admin);
    }




}
