<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class siteController extends Controller
{
    public function show()
    {
        $sites = Site::all()->where('user_id', Auth::id());
        return view('adminpanel.sites', ['sites' => $sites]);
    }

    public function new()
    {
        return view('adminpanel.sites.new_site');
    }

    public function create()
    {
        $validate_data = Validator::make(\request()->all(), [
            'title' => 'required',
            'url' => 'required',
            'desc' => 'required',
        ])->validated();
        $site = new Site();
        $site->title = $validate_data['title'];
        $site->url = $validate_data['url'];
        $site->desc = $validate_data['desc'];
        $site->user_id = Auth::id();
        $site->save();

        return redirect(route('sites'));
    }

    public function edit($id)
    {
        $site = Site::findOrFail($id);
        return view('adminpanel.sites.edit_site', [
            'site' => $site
        ]);

    }

    public function update($id){
        $validate_data = Validator::make(\request()->all(), [
            'title' => 'required',
            'url' => 'required',
            'desc' => 'required',
        ])->validated();

        $site = Site::findOrFail($id);
        $site->title = $validate_data['title'];
        $site->url = $validate_data['url'];
        $site->desc = $validate_data['desc'];
        $site->user_id = Auth::id();
        $site->update();

        return redirect(route('sites'));
    }

    public function delete($id){
        $site = Site::findOrFail($id);
        $site->delete();
        return redirect(route('sites'));
    }

}
