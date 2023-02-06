<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QR Code Generator</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-4">
    <form action="{{route('save')}}" method="POST">
        @csrf
        <label for="url">URL</label>
        <input type="text" name="url" id="url">
        <input type="submit">
    </form>
    <div class="card">
        <div class="card-header">
            <h2>Simple QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->generate('https://google.com') !!}
        </div>
    </div>
</div>
</body>
</html>
