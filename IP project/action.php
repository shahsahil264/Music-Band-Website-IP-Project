<?php
$username = $_POST['Name'];
$email = $_POST['email'];
$age = $_POST['age'];
$aadhar = $_POST['proof'];
$ticket = $_POST['tickets'];
$password = $_POST['pwd'];

$passEnc=md5($password);


if (!empty($username) || !empty($email) || !empty($age) || !empty($aadhar) || !empty($ticket) || !empty($password)){
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "nirvana");

$conn= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect());

}
else{
    $select ="select email from nirvana.master where email = ? limit 1";
    $insert="Insert into master(username,email,age,proof,ticket, password)values(?,?,?,?,?,?)";

    $stmt = $conn->prepare($select);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    
    $rnum=$stmt->num_rows;

    if($rnum==0){ 
        $stmt->close();
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("ssiiss",$username,$email,$age,$aadhar,$ticket,$passEnc);
        $stmt->execute();
       
header("Location: index.php");

    }
    else{
        echo "<script>
alert('Tickets booked using this email-id please try with different email-id');
window.location.href='index.php';
</script>";
    }
$stmt->close();
$conn->close();
}
}
else{
    echo "All fields are required";
    die();
}
?>