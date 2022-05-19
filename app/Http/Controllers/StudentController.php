<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\studentStoreRequest;
class StudentController extends Controller
{
    public function index()
    {
        //here we can see all the students ::all()
        $students = Student::all();
        //this returns us thestudents data from the db
        return view('students.index')->with('students', $students);
    }

    public function create()
    {
        //here we can create a new student using create view
        return view('students.create');
    }

    public function store(studentStoreRequest $request)
    {
        //here we stored the data which we created earlier in the above create()
        $input = $request->all();
        //the student modele ask all the requested data from the user
        Student::create($input);
        //here return all filled data into db

        return redirect('student')->with('flash_message', 'Student Added!');
    }

    public function show($id)
    {
        //here we can sho our student details using their id or name
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit($id)
    {
        //here we can edit the student data ->find ($id)
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, $id)
    {
        //here first find the data we want update
        $student = Student::find($id);
        //then fill the requested data in
        $input = $request->all();
        //update the requested data
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }

    public function destroy($id)
    { // here we can delete the student data by id
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
