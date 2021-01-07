<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use App\Site;
use App\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class   SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $sites = $user->sites;
        return view('adminpanel.sites', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('adminpanel.sites.new_site');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SiteRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(SiteRequest $request)
    {
        $validate_data = $request->validated();
        $site = new Site();
        $site->title = $validate_data['title'];
        $site->url = $validate_data['url'];
        $site->desc = $validate_data['desc'];
        $site->connection_type = $validate_data['connection_type'];
        $site->public_key = $validate_data['public_key'];
        $site->private_key = $validate_data['private_key'];
        $site->user_id = Auth::id();
        $site->save();

        return redirect(route('sites.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Site $site
     * @return Application|Factory|Response|View
     */
    public function edit(Site $site)
    {
        return view('adminpanel.sites.edit_site',compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteRequest $request
     * @param Site $site
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(SiteRequest $request, Site $site)
    {
        $validate_data = $request->validated();
        $site->title = $validate_data['title'];
        $site->url = $validate_data['url'];
        $site->desc = $validate_data['desc'];
        $site->connection_type = $validate_data['connection_type'];
        $site->public_key = $validate_data['public_key'];
        $site->private_key = $validate_data['private_key'];
        $site->user_id = Auth::id();
        $site->update();

        return redirect(route('sites.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Site $site
     * @return Application|RedirectResponse|Response|Redirector
     * @throws Exception
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return redirect(route('sites.index'));
    }
}
