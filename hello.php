<html>
<head>
    <title>Hello From Azure</title>
</head>
<body>
<?php
    if(!empty($_POST)){
       $nama = $_POST['nama'];
       $email = $_POST['email'];
       
       echo 'Hallo, '.$nama. '!';
       echo 'Email: '.$email; 
    }
?>    
</body>
</html>