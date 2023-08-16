<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ChangeLanguageRequest;

class LocalizationController extends Controller
{
    public function setLang(ChangeLanguageRequest $request)
    {
        Session::put("locale",$request->locale);
        return redirect()->back();
    }


}
