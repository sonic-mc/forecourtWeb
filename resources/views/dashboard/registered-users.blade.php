<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Registered Users</h2>

        @if (session('error'))
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if (!empty($users))
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Name</th>
                            <th class="border border-gray-300 px-4 py-2">Email</th>
                            <th class="border border-gray-300 px-4 py-2">Phone Number</th>
                            <th class="border border-gray-300 px-4 py-2">Account(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $user['id'] }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user['name'] }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user['email'] }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user['phoneNumber'] }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    @if(!empty($user['accounts']))
                                        <ul>
                                            @foreach($user['accounts'] as $account)
                                                <li>
                                                    <strong>{{ $account['accountType'] }}</strong> - 
                                                    Status: {{ $account['accountStatus'] }} |
                                                    Credit: {{ $account['credit'] }} |
                                                    Debit: {{ $account['debit'] }} |
                                                    Created: {{ \Carbon\Carbon::parse($account['createdAt'])->format('d M Y H:i') }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No accounts available</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No users found.</p>
        @endif
    </div>
</x-app-layout>
