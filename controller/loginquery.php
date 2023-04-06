<?php



$Email =$_POST['login_email'];
// echo $Email;
$Password=$_POST['login_password'];
// echo $Password;




try {

  $query= $app['db']->query("SELECT * FROM datas WHERE email = '$Email' and password =md5('$Password') ");
  $dataexist = $query->fetchAll(PDO::FETCH_OBJ);
//   var_dump($dataexist);

  if ($dataexist) {
   
    header("location:/home");
  }
  else {
    
 header("location:/signuppage");
  }



}
catch (Exception $e){
  die("connection error".$e->getmessage());


}