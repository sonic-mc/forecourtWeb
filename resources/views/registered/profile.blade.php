<x-app-layout>
    <x-slot name="header">
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2 class="text-2xl font-bold mb-4">Logged in as {{ $user['name'] }}</h2>
    <p><strong>Email:</strong> {{ $user['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $user['phoneNumber'] ?? 'N/A' }}</p>

    <hr class="my-6">

    <form method="POST" action="{{ route('registered.addAccount', ['id' => $user['id']]) }}">
        @csrf
        @method('PUT')
        <label class="block mb-2 font-semibold">Add Account Type:</label>
        <select name="accountType" class="border p-2 w-full mb-4" required>
            <option value="">-- Select Type --</option>
            <option value="SAVINGS">SAVINGS</option>
            <option value="CHECKING">CHECKING</option>
            <option value="CREDIT">CREDIT</option>
            <option value="LOAN">LOAN</option>
            <option value="INVESTMENT">INVESTMENT</option>
            <option value="RETIREMENT">RETIREMENT</option>
            <option value="BUSINESS">BUSINESS</option>
            <option value="JOINT">JOINT</option>
            <option value="TRUST">TRUST</option>
            <option value="OTHER">OTHER</option>
        </select>

        <button type="submit" class="bg-blue-600 text-black px-4 py-2 rounded">
            Add Account
        </button>
    </form>

    @if(isset($user['accounts']) && count($user['accounts']))
        <h3 class="text-xl mt-6 font-semibold">User Accounts</h3>
        <ul class="mt-2 space-y-2">
            @foreach($user['accounts'] as $account)
                <li class="border p-2 rounded bg-gray-50">
                    <strong>{{ $account['accountType'] }}</strong> - 
                    Status: {{ $account['accountStatus'] }} |
                    Credit: {{ $account['credit'] }} |
                    Debit: {{ $account['debit'] }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
</x-app-layout>
