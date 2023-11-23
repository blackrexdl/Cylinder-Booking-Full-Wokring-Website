<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "booking_system";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (name, email, phone, feedback) VALUES ('$name', '$email', '$phone', '$feedback')";

if ($conn->query($sql) === TRUE) {
    $message = "Thanks for your Feedback!";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<script>
    alert("<?php echo $message; ?>");
    window.location.href = 'index.php';
</script>