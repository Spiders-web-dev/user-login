<?php
$username = $_POST['username'];
$password = $_POST['password'];
$error = "";
$success = "";

$f = fopen("test.txt","r");

$data = fread($f, filesize("test.txt"));

$data_filter = explode("\n",$data);

for($i = 0; $i < count($data_filter);$i++){
   
    if(usset($_POST['submit'])){
        if($username==$data_filter[i]){
          if($password==$data_filter[i])
    
    else{
        $error = "invalid password"
    
    }

        }
    
}
?>