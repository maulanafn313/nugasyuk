<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Nugas Yuk!</title>
    <link rel="icon" type="img" href="./picture/logo.jpg">
    <link rel="stylesheet" href="./CSS/login.css">
    <!--font motserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Sign In</h2>
            <form action="">
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <!-- email -->

                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <!-- password -->

                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="">Forgot password</a>
                </div>
                <!--remember me and forgot password-->

                <button type="submit" class="sign-in-btn" value="Sign In">Sign In</button>
                <!--tombol login-->

                <div class="divider">
                    Or Sign In with
                </div>
                <div class="picture-google">
                    <img src="./picture/google.png" alt="logo google" width="20">
                </div>
                <!--picture google-->

                <div class="signup-link">
                    Don't have account, <a href="">sign up now!</a>
                </div>
                <!--sign up link-->
            </form>
        </div>
        <!--bagian login-->

        <div class="brand-section">
            <div class="brand-logo">
                <img src="./picture/logo.jpg" alt="logo nugasyuk!" width="300">
            </div>
        </div>
        <!--logo nugasyuk-->
    </div>
</body>
</html>