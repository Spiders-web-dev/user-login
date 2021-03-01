<?php

if(isset($_GET['userinfo'])){

    $userinfo = $_GET['userinfo'];
    $f = fopen("test.txt","r");

    $data = fread($f, filesize("test.txt"));

    $data_filter = explode("\n",$data);

    for($i = 0; $i < count($data_filter);$i++){
        echo $data_filter[$i];
        echo "<br>"
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
</head>
<body>



    <a href = "logout.php">Logout</a>

    
</body>
</html>