<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'ravi.bhoraniya77@gmail.com';
    $subject = "Conatc Information";
    $message = "";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <localhost@localhost.com>' . "\r\n";

    $message .= "Full Name : ".$name."<br/>";
    $message .= "Email Address : ".$email."<br/>";
    $message .= "Phone Number: ".$phone."<br/>";

    mail($to,$subject,$message,$headers);

    echo '
        <script>
            alert("Thank you! your detail successfully send.");
            window.location.href = "index.html";
        </script>
    ';

} else {
    header("location:index.html");
}
