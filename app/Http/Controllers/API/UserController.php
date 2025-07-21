<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    protected $apiBase;

    public function __construct()
    {
        $this->apiBase = config('services.external_api.base_url');
    }

    public function login(Request $request)
    {
        $response = Http::post("{$this->apiBase}/users/login", [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // Save token if returned
            session(['api_token' => $data['token'] ?? null]);

            return response()->json($data);
        }

        return response()->json(['error' => 'Login failed'], $response->status());
    }

    public function findAllUsers()
    {
        $response = Http::withToken(session('api_token'))
            ->get("{$this->apiBase}/users/findAll");

        return response()->json($response->json(), $response->status());
    }


    public function create()
    {
        $accountTypes = ['SAVINGS', 'CHECKING', 'CREDIT', 'LOAN', 'INVESTMENT', 'RETIREMENT', 'BUSINESS', 'JOINT', 'TRUST', 'OTHER'];
        return view('account.create', compact('accountTypes'));
    }

    // Store: Send request to API to create account
    // public function addAccount(Request $request)
    // {
    //     $userId = $request->input('user_id');
    //     $accountType = $request->input('accountType');
    
    //     try {
    //         $response = Http::withOptions([
    //             'query' => [
    //                 'accountType' => $accountType
    //             ]
    //         ])->put("http://95.111.246.245:9345/api/users/addAccount/{$userId}");
    
    //         if ($response->successful()) {
    //             return redirect()->back()->with('success', 'Account created successfully!');
    //         } else {
    //             return redirect()->back()->with('error', 'API Error: ' . $response->body());
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Failed to create account: ' . $e->getMessage());
    //     }
    // }
    
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'phoneNumber' => 'required|string',
        ]);
    
        try {
            $response = Http::post("http://95.111.246.245:9345/api/users/register", [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['password'],
                'phoneNumber' => $validated['phoneNumber'],
            ]);
    
            if ($response->successful()) {
                return redirect()->back()->with('success', 'User registered successfully!');
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to register user: ' . $e->getMessage());
        }
    }
    
}
