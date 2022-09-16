<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function saveProfile(Request $req)
    {
        $profile = new Profile;
        $profile->first_name = $req->first_name;
        $profile->last_name = $req->last_name;
        $profile->save();

        dd("ok");
    }
}
