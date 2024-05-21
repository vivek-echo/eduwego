<?php

namespace App\Http\Controllers\ApplicationPipeLines;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsNoticeController extends Controller
{
    public function contentPageNewsNoticeIndex()
    {
        return view('ApplicationView.ContentPage.ContentPageNewsNoticeIndex');
    }

    public function submitNewsNoticeForm()
    {
        $getData = request()->all();
        $newsField = isset($getData['newsFields']) ? $getData['newsFields'] : [];
        $newsPublish = isset($getData['newsPublish']) ? $getData['newsPublish'] : [];
        $noticeField = isset($getData['noticeFields']) ? $getData['noticeFields'] : [];
        $noticePublish = isset($getData['noticePublish']) ? $getData['noticePublish'] : [];
        $respNews = [];
        $respNotice = [];
        // dd($newsField);
        if ($newsField[0]) {

            foreach ($newsField as $kyNews => $newsVal) {
                // dd(isset($newsPublish[$kyNews]));
                $resNews['news'] = $newsVal;
                $resNews['newsPublish'] = isset($newsPublish[$kyNews]) == true ? 2 : 1;
                $resNews['publishDate'] = date('Y-m-d H:i:s');

                array_push($respNews, $resNews);
            }
        }
        if ($noticeField[0]) {
            foreach ($noticeField as $kyNotice => $noticeVal) {
                $resNotice['notice'] = $noticeVal;
                $resNotice['noticePublish'] = isset($noticePublish[$kyNotice]) == true ? 2 : 1;
                $resNotice['publishDate'] = date('Y-m-d H:i:s');
                array_push($respNotice, $resNotice);
            }
        }
        if ($respNews) {

            DB::table('news')->update([
                'deletedFlag' => 1
            ]);
            DB::table('news')->insert($respNews);
        }
        if ($respNotice) {

            DB::table('notice')->update([
                'deletedFlag' => 1
            ]);
            DB::table('notice')->insert($respNotice);
        }
        return response()->json([
            'status' => true,
            'statusCode' => 200,
            'msg' => "Data updated Successfully"
        ], 200);
        // dd( $getData);
        // dd("dasbjkcjh");
    }

    public function getNewsNoticeData()
    {
        $news =  DB::table('news')->where('deletedFlag', 0)->get();
        $notice =  DB::table('notice')->where('deletedFlag', 0)->get();
        $respNews = [];
        $respNotice = [];
        if ($news->isNotEmpty()) {

            foreach ($news as $newsVal) {
                $resNews['newsField'] = $newsVal->news;
                $resNews['isPublished'] = $newsVal->newsPublish == 2 ? true : false;
                array_push($respNews, $resNews);
            }
        } else {
            $respNews = [
                [
                    'newsField' => "",
                    'isPublished' => false
                ]
            ];
        }
        if ($notice->isNotEmpty()) {

            foreach ($notice as $noticeVal) {
                $resNotice['noticeField'] = $noticeVal->notice;
                $resNotice['isPublished'] = $noticeVal->noticePublish == 2 ? true : false;
                array_push($respNotice, $resNotice);
            }
        } else {
            $respNotice = [
                [
                    'noticeField' => "",
                    'isPublished' => false
                ]
            ];
        }

        return response()->json([
            'news' => $respNews,
            'notice' => $respNotice,
            'status' => true,
            'statusCode' => 200,
            'msg' => "Data updated Successfully"
        ], 200);
    }
}
