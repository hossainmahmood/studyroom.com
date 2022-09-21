<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$teachers = Teacher::all();
        //print($teachers);
        return response()->view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
		$validated = $request->validate([
        'name' => 'required',
        'sex' => 'required',
		'dob' => 'required',
    ]);


        $teacher = new Teacher();
        $teacher->fullName = $request->name;
        $teacher->sex =  $request->sex;
        $teacher->dob = $request->dob;
        $teacher->email = $request->email;
        $teacher->mobile = $request->mobile;
        $teacher->department = $request->department;
        $teacher->designation = $request->designation;
        $teacher->joinDate = $request->joinDate;
        //exit($request);
        $teacher->save();
		//return view('admin.teachers.create');
        return redirect()->action([TeacherController::class,'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::where('id',$id)->first();
       return $teacher;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teacher::where('id',$id)->first();
        //return response()->view('admin.teachers.edit',compact('teachers'));
        return response()->json(["teacher"=>$teachers]);
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
        $teacher = Teacher::where('id',$id)->first();
        $teacher->fill($request->input());
        $teacher->saveOrFail();
        return redirect()->action([TeacherController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::where('id',$id)->first();
        $teacher->delete();
        return redirect()->action([TeacherController::class,'index']);
      //exit($id."Deleted Suc");
    }
}
