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
    public function bscNursingIndex(){
        return view('WebView.Nursing.bScNursing');
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
    public function sowrabhaInsIndex(){
        return view('WebView.School.SowrabhaIns');
    }
    public function englightInsIndex(){
        return view('WebView.School.EnglightIns');
    }
    public function enlightSchoolIndex(){
        return view('WebView.School.EnlightSchool');
    }   
    //start added by deepak on 20-05-2024
    public function MSCNursingIndex(){
        return view('WebView.Nursing.MSCNursing');
    }
    public function PbbscNursingIndex(){
        return view('WebView.Nursing.PbbscNursing');
    }
    public function GnmNursingIndex(){
        return view('WebView.Nursing.GnmNursing');
    }
  
    public function downloadPdf()
    {
        // dd("ascjh bhg");
        $filePath = public_path('assets/Sowrabha-Prospectus.pdf'); // Path to your PDF file
// dd($filePath);
        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        return response()->download($filePath, 'Sowrabha-Prospectus.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}