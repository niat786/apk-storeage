<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2Account;
use Auth;

class B2Controller extends Controller
{
    function index(Request $request) {


        if ($request->isMethod('post')) {

            $messages = [
                'keyID.required' => 'Please enter the Key ID',
                'ApplicationKey.required' => 'Please enter the Application Key',
                'BucketID.required' => 'please enter the Bucket ID',
                'BucketName.required' => 'please enter the Bucket Name',
            ];

            $this->validate($request, [
                'keyID' => 'required|string',
                'ApplicationKey' => 'required|string',
                'BucketID' => 'required|string',
                'BucketName' => 'required|string|alpha_dash',
            ], $messages);

            $user = new B2Account;

            $user->keyid = $request->keyID;
            $user->applicationkey = $request->ApplicationKey;
            $user->bucketid = $request->BucketID;
            $user->bucket_name = $request->BucketName;
            $user->user_id = Auth::User()->id;

            $user->save();
            return redirect()->back()->with('success', 'B2 Account added!');

        }
        return view('connect-b2');
    }

    function store_domain(Request $request){
        dd($request);
    }
}
