<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Create an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie variables
        $cookie_name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Return JSON response with cookie
        return response()->json($data, 200)
                         ->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
