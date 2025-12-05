<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieConsentController extends Controller
{
    public function store(Request $request)
    {
        session(['cookie_consent' => true]);
        return response()->json(['message' => 'Consentement aux cookies enregistré']);
    } //
}
