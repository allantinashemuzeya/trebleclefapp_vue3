<?php

namespace App\Http\Controllers;

use App\Http\Services\Gallery\Gallery;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Http\Services\Schools\School;
use App\Models\Student;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SitePagesController extends Controller
{
    //

    public function networks(): \Inertia\Response
    {

        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        $data = [
            'currentStudent'=>$currentStudent,
            'pageTitle' => 'Treble Clef Networks',
            'schools' => (new School())->getAll()
        ];

        return Inertia::render('Networks', $data );
    }

    public  function gallery(){

        $galleries = (new Gallery())->getAll();
        return view('gallery', ['galleries' => $galleries]);
    }

    public function office(){

        if(Auth::user()->userType === 1){
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        else if(Auth::user()->userType === 2){
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        }
        else{
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $tutors = Tutors::all();
        $tutors_ = [];

        foreach ($tutors as $tutor){
            $tutors_[] = User::where('id', $tutor->userId)->first();
        }

        return Inertia::render('Office',  [ 'pageTitle' => '','currentUser'=>$currentUser,'tutors'=>$tutors_]);
    }

    public function chat()
    {

        if(Auth::user()->userType === 1){
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        else if(Auth::user()->userType === 2){
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        }
        else{
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        return view('chatify.index',  [ 'pageTitle' => '','currentUser'=>$currentUser,]);

    }

}
