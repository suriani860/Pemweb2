
<?php
// tangkap input login
$email = $_POST['email'];
$password = $_POST['password'];

// validasi login
if($email == 'suriani@gmail.com' && $password == '12345'){
    header('location: dashboard.php');
} else{
    echo "Login gagal";
}