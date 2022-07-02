<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
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
        $profile =  DB::table('profiles')->where('user_id',$id)->first();
        return View('pages.profile.show',['profile'=>$profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile =  DB::table('profiles')->find($id);
        $users =  DB::table('users')->find($id);
        return View('pages.profile.edit',['profile'=>$profile, 'user'=>$users]);
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
        $profile = new Profile();
        $profile->full_name = $request->input('full_name');
        $profile->email = $request->input('email');
        $profile->address = $request->input('address');
        $profile->birthday = $request->input('birthday');
        $affected = DB::table('profiles')
            ->where('id', $id)
            ->update(['full_name' =>  $profile->full_name,
                'email' => $profile-> email,
                'address' =>  $profile->address,
                'birthday' =>  $profile->birthday
            ]);
        $affected = DB::table('users')
            ->where('id', $id)
            ->update(['name' =>  $profile->full_name,
                'email' =>  $profile->email]);
        return redirect()->route('profile.show', [$id]);
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
