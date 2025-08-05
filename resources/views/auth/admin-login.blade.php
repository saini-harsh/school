<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - ESchool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet">

    <!-- Login CSS -->
    <link rel="stylesheet" href="{{ asset('css/assets/login.css') }}">
</head>

<body>
    <div class="login-container">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="ESchool Logo" />

        <!-- Heading -->
        <h2>Login Details</h2>

        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <!-- Email Input -->
            <div class="input-field">
                <img src="https://img.icons8.com/ios-filled/50/000000/new-post.png" alt="email icon" />
                <input type="email" name="email" placeholder="Enter Email Address" required>
            </div>

            <!-- Password Input -->
            <div class="input-field">
                <img src="https://img.icons8.com/ios-filled/50/000000/lock-2.png" alt="password icon" />
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>

            <!-- Remember / Forgot -->
            <div class="options">
                <label><input type="checkbox" name="remember"> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <!-- Submit Button -->
            <button class="login-btn" type="submit">SIGN IN</button>
        </form>

        <!-- Quick Role Buttons -->
        <div class="roles-grid">
            <button type="button" onclick="autoLoginAdmin()">ADMIN</button>
            <button type="button" onclick="location.href='{{ route('admin.login') }}'">INSTITUTIONS</button>
            <button type="button" onclick="location.href='{{ route('admin.login') }}'">TEACHER</button>
            <button type="button" onclick="location.href='{{ route('admin.login') }}'">STUDENTS / PARENTS</button>
        </div>
    </div>

    <!-- Auto Login Script -->
    <script>
        function autoLoginAdmin() {
            document.querySelector('input[name="email"]').value = "admin@gmail.com";
            document.querySelector('input[name="password"]').value = "admin";
            document.querySelector('form').submit();
        }
    </script>
</body>

</html>
