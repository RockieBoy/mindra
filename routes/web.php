<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
})->name("login");

Route::post("/login", function (Request $request) {
    $url = 'http://192.168.100.14:8005/api/v1/auth/login';

    $response = Http::post($url, [
        'email' => $request->email,
        'password' => $request->password,
    ]);

    if ($response->successful()) {
        $data = $response->json();

        $token = $data["data"]['token'] ?? null;
        if ($token) {
            Session::put('auth_token', $token);

            return redirect()->to("/");
        } else {
            return redirect()->back();
        }
    } else {
        return redirect()->back();
    }
});

Route::get('/sign-up', function () {
    return view('auth.sign_up');
});

Route::get('/', function () {
    $token = session('auth_token');

    $response1 = Http::withToken($token)->post("http://192.168.100.14:8005/api/third-party/sme/zoom/check-status");
    $response2 = Http::withToken($token)->get("http://192.168.100.14:8005/api/third-party/sme/zoom/view-zoom-schedule");

    if ($response1->successful() && $response2->successful()) {
        $data = $response1->json();
        $meetRequest = $data["data"];

        $data = $response2->json();
        $meetSchedule = $data["data"];

        return view("dashboard", compact("meetRequest", "meetSchedule"));
    }

    // return view('dashboard');
})->middleware("auth.token");
