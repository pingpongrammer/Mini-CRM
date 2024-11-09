<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Company Created</title>
</head>
<body>
    <h1>New Company Created</h1>

    <p>A new company has been added:</p>
    
    <p><strong>Name:</strong> {{ $company->name }}</p>
    <p><strong>Email:</strong> {{ $company->email }}</p>
    <p><strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>

    @if ($company->logo)
        <p><strong>Logo:</strong></p>
        <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 200px;">
    @endif

    <p>Thank you for using our system!</p>
</body>
</html>
