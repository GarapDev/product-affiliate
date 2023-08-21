<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * display member register page.
     *
     * @return View
     */
    public function memberRegisterView(): View
    {
        return view('auth.register-member');
    }
}
