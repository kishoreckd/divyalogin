<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/view/style.css">
</head>
<body>
<?php if(isset($_POST['signup'])): ?>
   <?php if($_SESSION['already-exists-error']): ?>
   <span><?php echo $_SESSION['already-exists-error'] ?></span>
   <?php endif; ?>
   <?php endif; ?>

<form action="/signupquery" method="post">
    <div class="main">
        <h2>Sign-Up</h2>
        <label for="">UserName</label>
        <input type="text" name="name"  placeholder="UserName" pattern="[a-z,A-Z]*" required >
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Email" required >

        <label for="">Password</label>
        <input type="password" name="password" required  placeholder="Password">

        <input type="submit" name="signup" value="signup">
        <p><a href="/">Already Have an Account?</a></p>


    </div>
</form>

    
    
</body>
</html>