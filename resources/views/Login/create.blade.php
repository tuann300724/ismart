<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>User create form</h2>
        <form method="post" action="{{ route('login.store') }}">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}"
                    placeholder="Enter name" name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" value="{{ old('email') }}"
                    placeholder="Enter email" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" value="{{ old('password') }}"
                    placeholder="Enter password" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role">Role:</label>
                <select class="form-select" id="role" name="role">
                    <option value="Admin" @selected(old('role') == 'Admin')>Admin</option>
                    <option value="User" @selected(old('role') == 'User')>User</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" @checked(old('status') === '1')
                        name="status" value="1" checked>
                    <label class="form-check-label" for="radio1">Active</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" @checked(old('status') === '0')
                        name="status" value="0">
                    <label class="form-check-label" for="radio2">DeActive</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>