<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show()
    {
        $profiles=Profile::all()->where('user_id',Auth::id());
        if (count($profiles)==0){
            $profile = new Profile([
                'user_id' => Auth::id(),
                'fname' => 'نام شما...',
                'lname' => 'نام خانوادگی شما...',
                'address' => 'آدرس شما...',
                'ostan' => 'استان شما...',
                'shahr' => 'شهر شما...',
                'phone' => '09xxxxxxxxx',
                'about_me' => 'توضیحاتی درباره شما...',
            ]);
            $profile->save();
            return redirect()->route('profile');
        }else{
            foreach ($profiles as $profile){
                $fname=$profile->fname;
                $lname=$profile->lname;
                $address=$profile->address;
                $ostan=$profile->ostan;
                $shahr=$profile->shahr;
                $phone=$profile->phone;
                $about_me=$profile->about_me;
                $img=$profile->src_img;
            }
        }
        return view('adminpanel.profile',[
            'fname'=>$fname,
            'lname'=>$lname,
            'address'=>$address,
            'ostan'=>$ostan,
            'shahr'=>$shahr,
            'phone'=>$phone,
            'about_me'=>$about_me,
            'img'=>$img,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $profile=Profile::all()->where('user_id',Auth::id());
        $profile->fname=\request('fname');
        $profile->lname=\request('lname');
        $profile->address=\request('address');
        $profile->ostan=\request('ostan');
        $profile->shahr=\request('shahr');
        $profile->phone=\request('phone');
        $profile->about_me=\request('about_me');
        $profile->src_img=\request('img');

        $profile->save();
        return view('adminpanel.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
