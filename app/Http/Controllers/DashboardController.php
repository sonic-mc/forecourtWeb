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

    public function loginRegisteredUser(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $response = Http::post("http://95.111.246.245:9345/api/users/login", [
        'email' => $request->email,
        'password' => $request->password,
    ]);

    if ($response->successful()) {
        $data = $response->json();

        // Optional: Store user data in session for later use
        session([
            'logged_in_user' => $data,         // Store full user object
            'user_id' => $data['id'] ?? null,  // Specifically store user ID
            'user_name' => $data['name'] ?? '',
        ]);

        return redirect()->route('registered.profile')->with('success', 'Logged in successfully as ' . $data['name']);
    } else {
        // You can also get error details if the API returns them
        $error = $response->json()['message'] ?? 'Login failed. Please check your credentials.';
        return back()->withErrors(['login' => $error]);
    }
}

public function showProfile()
{
    $user = session('logged_in_user');

    if (!$user) {
        return redirect()->back()->withErrors(['not_logged_in' => 'No registered user is logged in.']);
    }

    return view('registered.profile', compact('user'));
}


public function addAccount(Request $request, $id)
{
    $validated = $request->validate([
        'accountType' => 'required|string|in:SAVINGS,CHECKING,CREDIT,LOAN,INVESTMENT,RETIREMENT,BUSINESS,JOINT,TRUST,OTHER',
    ]);

    // Make the API request to add the account
    $response = Http::put("http://95.111.246.245:9345/api/users/addAccount/{$id}?accountType= $request->accountType");

    // Log the status and full response for debugging
    \Log::error('API Response: ', [
        'status' => $response->status(),
        'body' => $response->body(),
        'json' => $response->json(),
    ]);

    // Check if the request was successful
    if ($response->successful()) {
        return back()->with('success', 'Your account has been successfully added!');
    } else {
        // Return the error details to the user
        $errorMessage = $response->json()['message'] ?? 'Unknown error. Please try again later.';
        return back()->withErrors(['account' => "Failed to add account: $errorMessage"]);
    }
}


}
