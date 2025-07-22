<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\RegisteredUser;

class DashboardController extends Controller
{
    public function index()
    {
        $registeredUsers = RegisteredUser::all();
        $user = Auth::user();
        $email = $user->email;

        // Fetch accounts from external API
        $response = Http::get("http://95.111.246.245:9345/api/users/by-email/{$email}");

         $accounts = $response->successful() ? $response->json() : [];

        return view('dashboard', [
            'registeredUsers' => $registeredUsers,
            'accounts' => $accounts,
        ]);
    }
}
