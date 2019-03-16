<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get users
        # $users = User::all();
        $users = User::paginate(15);

        // return collection of users
        return UserResource::collection($users);
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
         //jika method 'PUT' maka fungsi update data, namun jika tidak maka fungsi create data method 'POST' 
         $user = $request->isMethod('PUT') ? User::findOrFail($request->user_id) : new User;
        
         $user->id = $request->input('user_id');
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = $request->input('password');
         $user->phone_number = $request->input('phone_number');

         if ($user->save()) {
             return new UserResource($user);
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
        // get single users
        $user = User::findOrFail($id); 
        
        // return single users as a resources
        return new UserResource($user);
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
        // get single users
        $user = User::findOrFail($id); 
        
        // return single users as a resources
        if($user->delete()){
            return new UserResource($user);
        }
    }
}
