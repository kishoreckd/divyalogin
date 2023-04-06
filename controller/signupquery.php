<?php



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
    $_SESSION['already-exists-error'] = 'The user already exists';
    header("location:/signuppage");
  }
  else {
    
  $sql= $app['db']->query("INSERT INTO datas(name,email,password) 
  VALUES('$name','$email','$password')");
  // echo"done";    
  $_SESSION['data']=[
      'name'=>$name
  ];

  header('location:/home');
   
  }



}
catch (Exception $e){
  die("connection error".$e->getmessage());


}