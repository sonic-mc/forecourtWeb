<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    // Index: Fetch all accounts for the logged-in user
    public function index()
    {
        $user = Auth::user();

        try {
            $response = Http::get("http://95.111.246.245:9345/api/account/user/{$user->id}");

            if ($response->successful()) {
                $accounts = $response->json();
                return view('account.index', compact('accounts'));
            } else {
                return redirect()->back()->with('error', 'Could not fetch accounts.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // Freeze account
    public function freeze($accountId)
    {
        try {
            $response = Http::put("http://95.111.246.245:9345/api/accounts/freezeAccount/{$accountId}");

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Account frozen successfully.');
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
    }

    // Get account details
    public function show($accountId)
    {
        try {
            $response = Http::get("http://95.111.246.245:9345/api/accounts/getAccount/{$accountId}");

            if ($response->successful()) {
                $account = $response->json();
                return view('account.show', compact('account'));
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
    }

    // Get account balance
    public function balance($accountId)
    {
        try {
            $response = Http::get("http://95.111.246.245:9345/api/accounts/balance/{$accountId}");

            if ($response->successful()) {
                $balance = $response->json();
                return view('account.balance', compact('balance'));
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
    }

    // Delete account
    public function destroy($accountId)
    {
        try {
            $response = Http::delete("http://95.111.246.245:9345/api/accounts/delete/{$accountId}");

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Account deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
    }
}
