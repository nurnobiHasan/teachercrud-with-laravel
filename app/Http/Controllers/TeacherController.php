<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data["shoteacher"]=Teacher::all();
        if(Session()->has("message")){
            $this->data["message"]=Session()->get("message");
        }
        return view("show.studentshow",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["editdata"]=new teacher();
       return view("add.addstudent",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=$request->only("name","email","number","address");
      Teacher::insert($data);
      Session()->flash("message","teacher insert successfully");
      return redirect()->to("/teachers");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
            $this->data["singleinfo"]=$teacher;
            return view("showe.rki",$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $this->data["editdata"]=$teacher;
        return view("add.addstudent",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
       $edditsingledata=$request->all();
       $teacher->name=$edditsingledata["name"];
       $teacher->email=$edditsingledata["email"];
       $teacher->number=$edditsingledata["number"];
       $teacher->address=$edditsingledata["address"];
       $teacher->save();
       Session()->flash("message","teacher update successfully");
       return redirect()->to("/teachers");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        Session()->flash("message","teacher delete successfully !");
        return redirect()->to("/teachers");
    }
}
