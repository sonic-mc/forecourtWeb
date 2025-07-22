<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\RegisteredUser;

class AuthController extends Controller
{
    protected $apiBase = "http://95.111.246.245:9345/api";

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $response = Http::post("{$this->apiBase}/users/login", [
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        if ($response->successful()) {
            $userData = $response->json();

            // Optionally store in session
            session(['user' => $userData]);

            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['login_error' => 'Invalid credentials or server error.']);
        }
    }

        public function loginToApiAccount(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);

            $response = Http::post("http://95.111.246.245:9345/api/users/login", [
                'email' => $request->email,
                'password' => $request->password,
            ]);

            if ($response->successful()) {
                $apiUser = $response->json();

                // Store the API account in session separately
                session(['linked_api_user' => $apiUser]);

                return redirect()->route('dashboard')->with('success', 'Linked API account logged in!');
            }

            return back()->withErrors(['api_login_error' => 'Failed to log into API account']);
        }

            }



class UserController extends Controller
{
    protected $apiBase;

    public function __construct()
    {
        $this->apiBase = config('services.external_api.base_url');
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
                // Save registered user locally
                RegisteredUser::create([
                    'user_id' => auth()->id(),
                    'api_user_name' => $validated['name'],
                    'api_user_email' => $validated['email'],
                ]);
    
                return redirect()->back()->with('success', 'User registered successfully!');
            } else {
                return redirect()->back()->with('error', 'API Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to register user: ' . $e->getMessage());
        }
    }
    
}
