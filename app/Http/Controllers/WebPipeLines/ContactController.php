<?php

namespace App\Http\Controllers\WebPipeLines;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Exception;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function contactsIndex()
    {
        return view('WebView.Contacts.Contacts');
    }

    public function submitContact()
    {
        try {
            throw new Exception('Your error message here');
            $getData = request()->all();

            Mail::to($getData['con_email'])->send(new ContactMail($getData));
            $status = true;
            $statusCode = 200;
            $msg = "successfully";
        } catch (Exception $e) {

            $status = false;
            $statusCode = 400;
            $msg = "Something went wrong.Please try again later..";
            Log::error("Error", [
                'Controller' => 'ContactController',
                'Method' => 'submitContact',
                'Line'  => $e->getLine(),
                'Error'  => $e->getMessage()
            ]);
        }
        return response()->json(
            [
                'status' => $status,
                'statusCode' => $statusCode,
                'msg' => $msg
            ],
            $statusCode
        );
    }
}
