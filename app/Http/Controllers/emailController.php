<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
class emailController extends Controller
{
    public function store(Request $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();
        return response()->json([$email, 'message' => 'شكرا لاشتراكك! ']);
    }
}
