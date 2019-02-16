<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index(Request $request)
    {
        $words = array(
            'korea'=>'han quoc',
            'read'=>'doc',
            'hello'=>'xin chao',
            'speak'=>'noi',
            'listen'=>'nghe',
            'go'=>'di');
        $status = false;
        foreach ($words as $key=>$word) {
            $find = $request->english;
            if ( $find === $key){
                $status = true;
                return view('result', compact('word'));
            }
        }

        if (!$status){
            return view('kq');
        }


    }
}
