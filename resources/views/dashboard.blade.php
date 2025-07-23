<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   
    <div class="container mx-auto p-4">
        <!-- Link to Registered Users -->
        <a href="{{ route('registered.users') }}" class="text-blue-600 hover:text-blue-800">
            View Registered Users
        </a>
    </div>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <a href="{{ route('account.register') }}" class="inline-block bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700 mt-4">
                        Register User
                    </a>

                    <!-- Linked Accounts Section -->
                    <h3 class="mt-6 text-lg font-bold">Your Linked Accounts:</h3>

                    @if(count($accounts) > 0)
                        <ul class="mt-2 space-y-2">
                            @foreach($accounts as $account)
                                <li class="p-3 bg-gray-700 rounded">
                                    <strong>Account Type:</strong> {{ $account['accountType'] ?? 'N/A' }} <br>
                                    <strong>Account Number:</strong> {{ $account['accountNumber'] ?? 'N/A' }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="mt-2 text-sm">No linked accounts found.</p>
                    @endif


                    <!-- Registered Users Section -->
                    <h3 class="mt-10 text-lg font-bold">All Registered Users:</h3>

                    @if($registeredUsers->count() > 0)
                        <div class="overflow-x-auto mt-4">
                            <table class="min-w-full bg-gray-100 dark:bg-gray-700 text-sm text-left">
                                <thead class="bg-gray-900 text-black">
                                    <tr>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Linked By (User ID)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-900 dark:text-black">
                                    @foreach($registeredUsers as $user)
                                        <tr class="border-b border-gray-300 dark:border-gray-600">
                                            <td class="px-4 py-2">{{ $user->api_user_name }}</td>
                                            <td class="px-4 py-2">{{ $user->api_user_email }}</td>
                                            <td class="px-4 py-2">{{ $user->user_id }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="mt-2 text-sm">No registered users found.</p>
                    @endif
                   <!-- Show success message -->
@if(session('success'))
<div class="p-4 mb-4 text-green-800 bg-green-100 border border-green-300 rounded">
    {{ session('success') }}
</div>
@endif

<!-- Show login errors -->
@if($errors->has('login'))
<div class="p-4 mb-4 text-red-800 bg-red-100 border border-red-300 rounded">
    {{ $errors->first('login') }}
</div>
@endif

@foreach ($registeredUsers as $user)
<div class="p-4 border mb-4 rounded-md bg-white shadow">
    <p><strong>Name:</strong> {{ $user->api_user_name }}</p>
    <p><strong>Email:</strong> {{ $user->api_user_email }}</p>

    <!-- Login Form -->
    <form method="POST" action="{{ route('registered.login') }}">
        @csrf
        <input type="hidden" name="email" value="{{ $user->api_user_email }}">

        <div class="mt-2">
            <label>Password:</label>
            <input type="password" name="password" class="border p-1 rounded w-full" required>
        </div>

        @if($errors->has('password'))
            <p class="text-red-600 text-sm mt-1">{{ $errors->first('password') }}</p>
        @endif

        <button type="submit" class="mt-2 bg-blue-600 text-black px-3 py-1 rounded">
            Login as this user
        </button>
    </form>
</div>
@endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
