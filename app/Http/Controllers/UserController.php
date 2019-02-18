<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::paginate(25));
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
    public function show(User $user)
    {
    
        if (auth()->user()->id !== $user->id) {
            return response()->json([
                'status' => 'error',
                'message' => 'You can only view your own profile.'
            ], 403);
        }else{
            return new UserResource($user);
        }
      
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
    public function update(Request $request,User $user)
    {
        $credentials = $request->only('phone_number', 'address');

        $rules = [
            'phone_number' => ['required', 'string', 'max:14', 'unique:users,phone_number,'.$user->id],
            'address' => ['string'],
        ];

        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json([
                'status' => 'error', 
                'message' => $validator->messages()
            ], 400);
        }
        
        if (auth()->user()->id !== $user->id) {
            return response()->json([
                'status' => 'error',
                'message' => 'You can only edit your own profile.'
            ], 403);
        }

        $user->update($request->only(['phone_number', 'address']));

        return response()->json([
            'status' => 'success', 
            'message' => 'Update profile success'
        ], 200);
    }

    public function updatePassword(Request $request, $user)
    {
        $user =User::find($user);
        $rules = [
            'current_password' => ['required', 'string', 'min:8', 'regex:/^(?=.*\d)(?=.*[a-zA-Z]).[^\s]{8,}$/'],
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*\d)(?=.*[a-zA-Z]).[^\s]{8,}$/', 'confirmed'],
        ];

        $messages = [
            'current_password.regex' => 'Password must be minimun of 8 character combination letter and number.',
            'password.regex' => 'Password must be minimun of 8 character combination letter and number.',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return response()->json([
                'status' => 'error', 
                'message' => $validator->messages()
            ], 400);
        }
        
        if ($request->user()->id !== $user->id) {
            return response()->json([
                'status' => 'error',
                'message' => 'You can only edit your own password.'
            ], 403);
        }

        $current_password = auth()->User()->password;           
      
        if(Hash::check($request['current_password'], $current_password))
        {           
            $user_id = auth()->User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request['password']);;
            $obj_user->save(); 
            return response()->json([
                'status' => 'success', 
                'message' => 'Update password success'
            ], 200);
        }
        else
        {           
            $error = array('current-password' => 'Please enter correct current password');
            return response()->json([
                'status' => 'error', 
                'message' => 'Please enter correct current password'
            ], 400); 
        }
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
