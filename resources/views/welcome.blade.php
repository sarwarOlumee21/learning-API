<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Cards</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;

            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 0;
        }

        .card {
            width: 350px;
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;

            border-radius: 10px;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin: 8px 0;
        }
    </style>
</head>
<!-- <body>
    @foreach ($users as $user)
        <div class="card">
            <h2>{{ $user['name'] ?? 'نام‌کاربری' }}</h2>
            <p><strong>ID:</strong> {{ $user['id'] ?? 'نامشخص' }}</p>
            <p><strong>Email:</strong> {{ $user['email'] ?? 'نامشخص' }}</p>
            <p><strong>Verified:</strong> {{ $user['email_verified_at'] ? 'Yes' : 'No' }}</p>
            <p><strong>Created:</strong> {{ $user['created_at'] }}</p>
            <p><strong>Updated:</strong> {{ $user['updated_at'] }}</p>
        </div>
    @endforeach -->

<div>
    <h1>just for testing <b>Event listeners</b></h1>
    <a href="{{ route('resident') }}">View Residents</a>
</div>
</body>
</html>