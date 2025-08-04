<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - ESchool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/assets/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="ESchool" />
        <h2>Login Details</h2>

        <form>
            <div class="input-field">
                <img src="https://img.icons8.com/ios-filled/50/000000/new-post.png" alt="email icon" />
                <input type="email" placeholder="Enter Email Address" required>
            </div>

            <div class="input-field">
                <img src="https://img.icons8.com/ios-filled/50/000000/lock-2.png" alt="password icon" />
                <input type="password" placeholder="Enter Password" required>
            </div>

            <div class="options">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forget Password?</a>
            </div>

            <button class="login-btn" type="submit">SIGN IN</button>
        </form>

        <div class="roles-grid">
            <button type="button">ADMIN</button>
            <button type="button">INSITUTIONS</button>
            <button type="button">TEACHER</button>
            <button type="button">STUDENTS / PARENTS</button>
        </div>
    </div>
</body>

</html>
