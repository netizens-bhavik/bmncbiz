<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValidateController extends Controller
{

    public function email_format($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $sanitized_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'status' => 'success',
                'message' => "Email is valid",
                'sanitized_email' => $sanitized_email
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "Email is not valid",
                'sanitized_email' => $sanitized_email
            ]);
        }
    }

    public function url_format($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $sanitized_url = filter_var($url, FILTER_VALIDATE_URL);
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return response()->json([
                'status' => 'success',
                'message' => "URL is valid",
                'sanitized_url' => $sanitized_url
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "URL is not valid",
                'sanitized_url' => $sanitized_url
            ]);
        }
    }

    public function db_email_check($email)
    {
        $user = DB::table('users')->where('email', $email)->first();
        if ($user) {
            return response()->json([
                'status' => 'error',
                'message' => "Email already exists"
            ]);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => "Email is available"
            ]);
        }
    }

    public function domain_details($url){

    }
}
