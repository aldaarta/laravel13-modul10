
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <h1 class="display-5 fw-bold">{{ $pageTitle }}</h1>
            <p class="fs-4">Welcome to Laravel 13!</p>
            <p>This is the Home Page.</p>
        </div>
    </div>
</body>
</html>
