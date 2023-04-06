<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./view/style.css">
</head>
<body>
    <form action="/loginquery" method="post">
        <div class="main">
            <h2>Login</h2>
            <label for="">Email<signupview/label>
            <input type="email" name="login_email"  placeholder="UserName" required>

       
            <label for="">Password</label>
            <input type="password" name="login_password" placeholder="Password" required>

            <input type="submit" value="login">

           <p><a href="/signuppage">Create an New Account?</a></p>
        </div>
    </form>
   
    
</body>
</html>