<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\users;
class ResourceCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('user.Display',['user'=>users::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             Validator::make($request->all(),['name'=>'required','email'=>'required|email','city'=>'required','age'=>'required|numeric'])->validate();
             $user=new users();
             $user->name=$request->name;
              $user->email=$request->email;
               $user->city=$request->city;
                $user->age=$request->age;
                 $user->status=0;
                  $user->save();
                  return  redirect()->action('ResourceCtrl@index');

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
         $user=users::where('id','=',$id)->get();

         return view('user.Edit',['users'=>$user]);
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
         return $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $user=users::where('id','=',$id)->delete();
        echo "hheeh";
         //return  redirect()->action('ResourceCtrl@index');
    }
}
