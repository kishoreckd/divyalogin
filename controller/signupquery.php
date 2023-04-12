<?php


unset($_SESSION['already-exists-error']);

$name=$_POST['name'];
echo $name;
$email =$_POST['email'];
echo $email;
$password=$_POST['password'];
echo $Password;



try {

  $query= $app['db']->query("SELECT * FROM datas WHERE email = '$email'");
  $dataexist = $query->fetchAll(PDO::FETCH_OBJ);

  if ($dataexist) {
    $_SESSION['user_already_exists_error'] = 'The user already exists';
    header("location:/signuppage");
  }
  else {
    unset( $_SESSION['user_already_exists_error']);
    
  $sql= $app['db']->query("INSERT INTO datas(name,email,password) 
  VALUES('$name','$email',md5('$password'))");
    header('location:/home');
    
  $_SESSION['data']=[
      'email'=>$email
  ];

   
  }



}
catch (Exception $e){
  die("connection error".$e->getmessage());


}