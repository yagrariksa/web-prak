<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{url('style_fgpw_admin.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="logo"> </div>
        <span class="title">Sign-in</span>
        <form class="form-container">
            <div class="form-field">
                <label>Username / Email </label>
                <input type="text" name="username">
            </div>

            <div class="form-field">
                <label>Password</label>
                <input type="password" name="password">
            </div>

            <input class="submit-btn" type="submit" name="login" value="Login">

        </form>
        <span class="bottom-msg">Forgot Password? <a href="#">Click Here</a> </span>
        <span class="bottom-msg google-btn" onclick="">Continue with Google</span>

    </div>
</body>

</html>