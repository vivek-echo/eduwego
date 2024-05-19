<?php

namespace App\Http\Controllers\WebPipeLines;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function homeIndex(){
        $news =  DB::table('news')->where('newsPublish',2)->where('deletedFlag', 0)->get();
        $notice =  DB::table('notice')->where('noticePublish',2)->where('deletedFlag', 0)->get();
        $resp['news']= $news;
        $resp['notice']= $notice;

        return view('WebView.Home.Home',$resp);
    }
    public function nursingIndex(){
        return view('WebView.Nursing.Nursing');
    }
    public function paramedicalsIndex(){
        // resources\views\WebView\Paramedecials\Paramedicals.blade.php
        return view('WebView.Paramedicals.Paramedicals');
    }
    public function galleryIndex(){
        return view('WebView.Gallery.Gallery');
    }
    public function contactsIndex(){
        return view('WebView.Contacts.Contacts');
    }
    public function facilitiesIndex(){
        return view('WebView.Facilities.Facilities');
    }
    public function scholarshipIndex(){
        return view('WebView.Scholarship.Scholarship');
    }
    public function ramaKrishnaSchoolIndex(){
        return view('WebView.School.RamaKrishnaSchool');
    }
    public function sapthagiriSchoolIndex(){
        return view('WebView.School.SapthagiriSchool');
    }
    public function SriKrishnaCollegeIndex(){
        return view('WebView.School.SriKrishnaCollege');
    }
}