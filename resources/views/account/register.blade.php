<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register Account') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
        <h2 class="text-2xl font-semibold mb-6">Register Account</h2>

        @if(session('success'))
            <div class="p-3 bg-green-100 text-green-800 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="p-3 bg-red-100 text-red-800 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('account.register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Name</label>
                <input type="text" name="name" required class="w-full border rounded px-3 py-2" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full border rounded px-3 py-2" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Phone Number</label>
                <input type="text" name="phoneNumber" required class="w-full border rounded px-3 py-2" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full border rounded px-3 py-2" />
            </div>

            <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                ➕ Register Account
            </button>
        </form>
    </div>
</x-app-layout>
