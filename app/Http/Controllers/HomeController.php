<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use App\Site;
use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('adminpanel.home');
    }

    public function profile()
    {

    }

    public function sites()
    {
        return view('adminpanel.sites');

    }

    public function checklinks()
    {
        foreach (Site::all() as $site) {
            if ($site->connection_type == 1) {
                $woocommerce = new Client(
                    $site->url, // Your store URL
                    $site->public_key, // Your consumer key
                    $site->private_key, // Your consumer secret
                );
                $links = $woocommerce->get('products');
                foreach ($links as $link) {
                    $a=Link::all()->where('url',$link->permalink)->first();

                    if (Link::all()->where('url',$link->permalink)->first()){
                        echo $link->permalink;
                        echo "<br>";
                    }else{
                        $newlink = new Link();
                        $newlink->site_id = 2;
                        $newlink->link_type_id = 1;
                        $newlink->title = $link->name;
                        $newlink->desc = $link->description;
                        $newlink->url = $link->permalink;
                        if ($link->images) {
                            $newlink->img_url = $link->images[0]->src;
                        } else {
                            $newlink->img_url = 0;
                        }
                        $newlink->save();
                    }
                }
            }
        }

        return view('test', compact('links'));
    }
}
