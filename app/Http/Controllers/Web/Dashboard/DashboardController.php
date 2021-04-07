<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classes\Classes;
use App\Models\User\Admin;
use App\Models\User\Guardian;
use App\Models\User\Staff;
use App\Models\User\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $students;
    private $guardians;
    private $staffs;
    private $admins;
    private $classes;


    public function __construct(){
        $this->students  = new Student();
        $this->guardians = new Guardian();
        $this->staffs    = new Staff();
        $this->admins    = new Admin();
        $this->classes   = new Classes();
    }

    public function index()
    {
       return view('dashboard.admin')
           ->with('title', 'Dashboard')
           ->with('total_students',  $this->students->count())
           ->with('male_students',   $this->students->where('gender','M')->count())
           ->with('female_students', $this->students->where('gender','F')->count())
           ->with('total_guardians', $this->guardians->count())
           ->with('total_staff',     $this->staffs->count())
           ->with('total_admin',     $this->admins->count())
           ->with('classes',     $this->classes->all('name'));
    }
}
