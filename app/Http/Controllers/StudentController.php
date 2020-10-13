<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function __construct(){
        // students è il file .php nella cartella config
        $this->students = config('students');
    }

    public function studenti(){
        // students.php è in config uso compact perchè è un array non associativo
        $data = $this->students;
        // uso compact perchè è un array non associativo
        return view('studenti', compact('data'));
    }


    public function show($id){
        if (!array_key_exists($id, $this->students)) {
            abort(404);
        }
        $student = $this->students[$id];
        return view('show', compact('student'));
    }

    public function slug($nome){
        $trovato = false;
        foreach ($this->students as $studente) {
            if ($studente['slug'] == $nome) {
                $student = $studente;
                $trovato = true;
            }
        }
        if($trovato){
            return view('slug',compact('student'));
        }else {
            abort(404);
        }
    }
}
