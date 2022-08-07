<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Domain;
use Auth;

class DomainController extends Controller
{
    function index(Request $request) {

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'domain' => 'required',
                'sub_domain' => 'required'
            ]);
           $domain = new Domain();
           $domain->name = $request->domain;
           $domain->subdomain = $request->sub_domain;
           $domain->user_id = Auth::User()->id;
           $domain->save();
           return redirect()->back();
        }
        return view('add-domain');
    }
}
