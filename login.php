
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-image: url(4.png);
            background-size: cover;
            background-repeat: no-repeat;
            box-sizing: border-box;

        }

        .logo {
            padding-top: 33px;
        }

        .logo img {
            width: 10%;
            margin-left: 575px;
        }

        .enter {
            margin: 20px 12px;
        }

        .enter span {
            font-family: 'Pacifico', cursive;
            color: white;
            font-size: 22px;
            margin-left: 550px;
        }

        .login {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            width: 340px;
            position: relative;
            /* color: #FAEDA5; */
            color: white;
            background-color: #2F3554;
            padding: 16px;
            word-wrap: break-word;
            justify-content: center;
            margin-left: 470px;
            margin-top: auto;
            border-radius: 6px;

        }

        .text-box input {
            padding: 5px 12px;
            font-size: 14px;
            line-height: 20px;
            width: 90%;
            border-radius: 6px;
            border: 1px solid black;
            margin-top: 4px;
            margin-bottom: 16px;
        }

        .signin input {
            font-family: 'Poppins', sans-serif;
            background-color: #0066FF;
            width: 98%;
            position: relative;
            display: inline-block;
            padding: 5px 16px;
            font-size: 14px;
            font-weight: var(--base-text-weight-medium, 500);
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            color: white;
            user-select: none;
            border: none;
            border-radius: 6px;
            -webkit-appearance: none;
            appearance: none;
        }

        .newuser {
            font-family: 'Poppins', sans-serif;
            width: 349px;
            position: relative;
            color: white;
            background-color: #2F3554;
            padding: 16px;
            word-wrap: break-word;
            justify-content: center;
            margin-left: 470px;
            margin-top: auto;
            border-radius: 6px;
            text-align: center;
            margin-top: 17px;
            padding: 5px 12px;
        }

        .newuser p {
            font-size: 14px;
        }

        .newuser p a {
            text-decoration: none;
            color: #3c91e6;

        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="logo3.1.png">
        </div>
    </div>
    <div class="enter">
        <span>Sign in to DesignHub</span>
    </div>
    <form>

        <div class="login">
            <div class="text-box">
                <label>Username or email address</label>
                <input type="text" required name="username">
            </div>
            <div class="text-box">
                <label>Password</label><br>
                <input type="password" name="password"required>
            </div>
            <div class="signin">
                <input type="submit" value="Sign in" name="submit">
            </div>

        </div>
        <div class="first-time">
            <div class="newuser">
                <p>New to This Website? <a href="signup.html" target="_blank">Create new account</a>.</p>
            </div>
        </div>

    </form>
</body>

</html>
<!-- <input type="submit" name="commit" value="Sign in" class="btn btn-primary btn-block js-sign-in-button" data-disable-with="Signing in…" data-signin-label="Sign in" data-sso-label="Sign in with your identity provider" development="false"> -->