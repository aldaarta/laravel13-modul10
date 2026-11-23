
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Data Master</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link active" href="{{ route('employees.index') }}">Employee List</a>
                <a class="nav-link" href="{{ route('profile') }}">My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>{{ $pageTitle }}</h2>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">
                Create Employee
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Purnama Anaking</td>
                    <td>purnama.anaking@gmail.com</td>
                    <td>20</td>
                    <td>Show | Edit | Delete</td>
                </tr>
                <tr>
                    <td>Adzanil Rachmadhi</td>
                    <td>adzanil.rachmadhi@gmail.com</td>
                    <td>25</td>
                    <td>Show | Edit | Delete</td>
                </tr>
                <tr>
                    <td>Berlian Rahmy</td>
                    <td>berlian.rahmy@gmail.com</td>
                    <td>23</td>
                    <td>Show | Edit | Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
