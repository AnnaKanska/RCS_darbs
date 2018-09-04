<?php

// var_dump($_POST);

$connection = mysqli_connect("localhost","root","","Contacts_form");

$error = false;

if(isset($_POST['name'])){
    print "ok";
    $name = $_POST['name'];
    $email = $_POST['e-mail'];
    $phone = $_POST['phone'];
    $message = $_POST['text'];


if (strlen($name)<3){
    echo "enter name";
    $error = true;
    
}

if (strlen($email)<6){
    echo "enter e-mail";
    $error = true;
} 

if (strlen($phone)<8){
    echo "enter phone number";
    $error = true;
} 

if (strlen($message)<30){
    echo "enter message";
    $error = true;
} 


if (!$connection){
    die("Database connerction failed");
}

$sql = "INSERT INTO `contactus` (`Name`, `Email`, `Phone`, `Message`)";
    $sql .= "VALUES ('$name', '$email', '$phone', '$message')";

    $result = mysqli_query($connection, $sql);

    if (!$result){
        die("Query error: ". mysqli_error($connection));
    }

}

    ?>

<?php if($error == false){?>
    <script>
        localStorage.setItem("msg", "Success");
        // localStorage.setItem("msg", "Success");
        
    </script>
<?php }; ?>


<?php if($error == true){?>
    <script>
        localStorage.setItem("msg", "Error");
        // localStorage.setItem("msg", "Success");
        
    </script>
<?php }; ?>

    <script type="text/javascript">location.href = 'http://localhost:8080/laravel/blog/public/contact';</script>