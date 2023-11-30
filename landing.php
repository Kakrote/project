<?php
include("conection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <style>
        .wrapper.active{
            height: 700px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo-removebg-preview.png" alt="Logo">
        </div>
        <nav class="navigation">
            <!-- <a href="home page.html">Home</a>
            <a href="#">About</a>
            <a href="servies.html">Services</a>
            <a href="#">Contact</a> -->
            <button class="buttonlogin-popup">Login</button>
        </nav>
    </header>
    <div class="text">
        <p>
            At <u style="color: rgb(201, 36, 36);">B For blood</u> , we believe in the extraordinary power of generosity, compassion, and community. Our mission is simple yet profound: to save lives by connecting donors with those in need. Every drop of blood donated has the potential to be a lifeline for someone facing a medical emergency, surgery, or a chronic condition. By being here, you're already making a difference.
        </p>
        <p> <br>
            Blood donation is a selfless act that directly impacts the lives of patients across the globe. Whether it’s a child battling leukemia, an accident victim in need of immediate transfusion, or a surgical patient requiring blood to pull through, your contribution can mean the difference between life and death. It’s a gift that knows no bounds, transcending race, religion, and nationality.</p>
    </div>
    <div class="wrapper">
        <span class="icon-close"><i class="ri-close-line"></i></span>
        <div class="formbox-login">
            <h2>Login</h2>
            <form method="post" action="homepage.php">
                <div class="input-box">
                    <span class="icon"><i class="ri-mail-fill"></i></span>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remainder-foroget">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">forget password?</a>
                </div>
                <button type="submit" value="login" class="btn">Login</button>
                <div class="login-registration">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>


        <div class="formbox-register">
            <h2>Registration</h2>
            <form method="post" action="#">
                <div class="input-box">
                    <span class="icon"><i class="ri-mail-fill"></i></span>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="text" name="bloodgroup" required>
                    <label for="">Blood group</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-user-fill"></i></span>
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="number" name="contect" required>
                    <label for="">Contect</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="text" name="location" required>
                    <label for="">Location</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remainder-foroget">
                    <label ><input type="checkbox">I agree to terms & condition</label>
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
                <div class="login-registration">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>

</body>
</html>

<!-- to send registration data to server database -->

<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $bloodgroup=$_POST['bloodgroup'];
    $name=$_POST['username'];
    $con_num=$_POST['contect'];
    $location=$_POST['location'];
    $pass=$_POST['password'];

    $sql="INSERT INTO data(uname,bgroup,name,conno,address,pass) VALUES ('$email','$bloodgroup','$name','$con_num','$location','$pass')";
    $in=mysqli_query($conn,$sql);
    if($in){
        echo "Register sucesfully";
    }
    else{
        echo "faild";
    }
}
?>

<!-- for log in  -->

<?php
if(isset($_POST["login"])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql2="SELECT * FROM data WHERE uname='$email' AND pass='$pass'";
    $put=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($put)> 0){
        echo "<script>alert('Loged in sucessfully')</script>";
    }
    else{
        echo "<script>alert('Loged in failed')</script>";
    }
}
?>

