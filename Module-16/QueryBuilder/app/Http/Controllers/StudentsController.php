<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    function student(Request $request){
        // $resulth = [];
        $students = DB::table('students') -> get();  //see all data in students table
        // $studentss = DB::table('students') -> find(3); //find a particular id your whole database
        // $students = DB::table('students') -> max('age'); //see largest numberic value in your database
        // $students = DB::table('students') -> limit(2) -> get();  //see particular data in students table for example limit(2) means visible only first 2 data
        // $students = DB::table('students') -> select(['name', 'age']) -> limit(3) -> get(); //see a few arguments that you select in your data
        // $students = DB::table('students') -> select(['name', 'age']) -> limit(3) -> toSql(); //see which query run your phpmyadmin database (sql)
        // $students = DB::table('students') -> where('gender', '=', 'M') -> orWhere('name', '=', 'Jessy') -> get(); //set a condition
        // $students = DB::table('students') -> where('gender', '=', 'M')  //set condition with grouping
        //     ->orWhere(function(Builder $query){
        //         return $query -> where('gender', '=', 'F')
        //         -> where('age', '<', '12');
        //     }) -> get();
        // $students = DB::table('students')  //joing value in selected database
        //     ->join('marks', 'marks.student_id', '=', 'students.id') -> get();
        // $students = DB::table('students') -> pluck('name', 'age');  //see only particular value that's you want
        // $students = DB::table('students') -> whereIn('age',['11', '13']) -> get();  //see particular value in a range
        return $students;
        // $resulth[] = $students;
        // $resulth[] = $studentss;
        // return $resulth;          //if you want to run all query together
    }
}
