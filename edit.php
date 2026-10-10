edit 

<?php
    include 'db_connect.php';

    if (isset($_POST['fname'])) {
        $firstname = $_POST['fname'];
        $email_address=$_POST['email_add'];

        $query = "UPDATE users SET first_name = '$firstname', email_address='$email_add', WHERE id = '$id'";
        $result = conn->query(query);

        if ($result) {
            echo "<script>alert('Users Updated successfully!'); window.location.href='index.php';</script>";
        }else{
            echo "Error:".$conn->error;
        }
?>
