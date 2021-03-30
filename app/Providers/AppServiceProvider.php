<?php

namespace App\Providers;

use App\Models\Sessions\Session;
use App\Repositories\Admin\EloquentAdmin;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\Classes\ArmRepository;
use App\Repositories\Classes\ClassArmRepository;
use App\Repositories\Department\DepartmentRepository;
use App\Repositories\Classes\EloquentArm;
use App\Repositories\Classes\EloquentClassArm;
use App\Repositories\Department\EloquentDepartment;
use App\Repositories\Staff\EloquentStaff;
use App\Repositories\Staff\StaffRepository;
use App\Repositories\State\EloquentState;
use App\Repositories\State\StateRepository;
use App\Repositories\Student\EloquentStudent;
use App\Repositories\StudentRepository;
use App\Repositories\Subject\EloquentSubject;
use App\Repositories\Subject\SubjectRepository;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ArmRepository::class, EloquentArm::class);
        $this->app->singleton(ClassArmRepository::class, EloquentClassArm::class);
        $this->app->singleton(DepartmentRepository::class, EloquentDepartment::class);
        $this->app->singleton(SubjectRepository::class, EloquentSubject::class);
        $this->app->singleton(StaffRepository::class, EloquentStaff::class);
        $this->app->singleton(AdminRepository::class, EloquentAdmin::class);
        $this->app->singleton(StudentRepository::class, EloquentStudent::class);
        $this->app->singleton(StateRepository::class, EloquentState::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('active_session', Session::where('status',1)->first() );
        Builder::$defaultStringLength = 191;

    }
}
