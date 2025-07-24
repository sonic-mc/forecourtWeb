<x-app-layout>
    <x-slot name="header">
    </x-slot>

<div class="container">
    <h2>Fetch Account Info</h2>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('dashboard.account.fetch') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="account_id">Select Account ID</label>
            <select name="account_id" id="account_id" class="form-control" required>
                @foreach ($accountIds as $id)
                    <option value="{{ $id }}">{{ $id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Fetch Account</button>
    </form>

    @isset($account)
        <div class="card mt-4">
            <div class="card-header">Account Details</div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $account['id'] }}</p>
                <p><strong>Credit:</strong> {{ $account['credit'] }}</p>
                <p><strong>Debit:</strong> {{ $account['debit'] }}</p>
                <p><strong>Account Type:</strong> {{ $account['accountType'] }}</p>
                <p><strong>Status:</strong> {{ $account['accountStatus'] }}</p>
                <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($account['createdAt'])->toDayDateTimeString() }}</p>
            </div>
        </div>
    @endisset
</div>
</x-app-layout>
