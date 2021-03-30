<?php

namespace App\Http\Controllers\Web\Configurations;

use App\Models\Sessions\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->academic_session = new Session();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_session = $this->academic_session->current_session();
        //dd($current_session->uuid);
        $sessions = $this->academic_session->sessions_list();
        //dd($s[0]['uuid']);
        if($sessions[0]['uuid'] == $current_session->uuid){
            $create_new_session = true;
        } else {
            $create_new_session = false;
        }

        $title = "Academic Sessions";
        return view('configurations.sessions.index')
            ->withSessions($sessions)
            ->withTitle($title)
            ->withActiveSession($current_session->uuid)
            ->withCount(0)
            ->withCreateNewSection($create_new_session);
    }

    /**
     * For moving the session to another term/session
     *
     */
    public function move(){
        $current_session = $this->academic_session->current_session();
        $current_session->uuid;
        $nSessions = $this->academic_session->sessions_list()[0];
        $updateSess = $nSessions->uuid;
        $updateSess->status = true;
        if($updateSess->save()){
            dd('success');
        }


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
    public function store(Request $request)
    {
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
