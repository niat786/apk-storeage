<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Domain;
use  App\Models\B2Account;
use Auth;
use DB;

class DomainController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'domain' => 'required',
                'sub_domain' => 'required'
            ]);
            if (Domain::where('name', $request->domain)->where('user_id', Auth::User()->id)->where('subdomain', $request->sub_domain)->exists()) {
                return redirect()->back()->with('error', 'The Domain Already Exists!');
            }
            $domain = new Domain();
            $domain->name = $request->domain;
            $domain->subdomain = $request->sub_domain;
            $domain->user_id = Auth::User()->id;
            $domain->save();
            return redirect()->back()->with('success', 'Success, Domain Added!');
        }
        return view('add-domain');
    }

    public function update_domain(Request $request)
    {
        $this->validate($request, [
            'id'=>'required',
            'domain_name'=>'required',
            'subdomain'=>'required',
        ]);

        $domain = Domain::where('id', $request->id)->where('user_id', Auth::User()->id)->first();
        // dd($request->domain_name, $request->subdomain, $request->id);
        if ($domain->count()) {
            $domain->name=$request->domain_name;
            $domain->subdomain=$request->subdomain;
            $domain->save();
            return redirect()->back()->with('success', 'Success, Domain Modified!');
        }
        return redirect()->back()->with('error', 'Sorry, You cannot edit the domain!');
    }

    public function delete_domain(Request $request)
    {
        $this->validate($request, [
            'id'=>'required',
        ]);
        $domain = Domain::where('id', $request->id)->where('user_id', Auth::User()->id)->first();

        if ($domain->count()) {
            $domain->delete();
            return redirect()->back()->with('success', 'Success, Domain Deleted!');
        }
        return redirect()->back()->with('error', 'Sorry, We cannot delete the domain!');
    }

    public function delete_bucket(Request $request)
    {
        $this->validate($request, [
            'id'=>'required',
        ]);
        $bucket = B2Account::where('id', $request->id)->where('user_id', Auth::User()->id)->first();

        if ($bucket->count()) {
            $bucket->delete();
            return redirect()->back()->with('success', 'Success, Domain Deleted!');
        }
        return redirect()->back()->with('error', 'Sorry, We cannot delete the domain!');
    }
}
