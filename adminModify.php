<?php 
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    session_start();
    $id = $_GET['id'];
$sql = "select * from login_details where id = '$id'";
$run = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($run);

$userprofile = $_SESSION["user"];
if($userprofile == true){
    
}
else{
    header('location: index.php');
}
$sqln = "select * from login_details where Username = '".$userprofile."'";
    $runs = mysqli_query($conn, $sqln);
$result = mysqli_fetch_assoc($runs);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $user = $_POST['user'];
    
    $update = "update login_details set Name = '$name', Email = '$email', Password = '$pass', Username = '$user'";
    $runup = mysqli_query($conn, $update);
    if($runup){
        header('location: Admin.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
}
?>


<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="PHPStyle.css">
    </head>
    <body>
      <div id="first">
            Welcome : <a href="Admin.php"><?php echo $result['Name']; ?></a><a href="logout.php"><span style="float: right;">Logout</span></a>
        </div>
        <div id="title">
            HOSPITAL MANAGEMENT SYSTEM
        </div>
        <div id="nav">
           <a href="Main.php">Home</a>  &nbsp; &nbsp; &nbsp;
            <a href="doctors.php">Doctors</a> &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="Patients.php">Patients</a> &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        <div class="heads">
           Update your Profile
        </div>
       <div id="doc">
        <form action="" method="POST">
           <h2>Edit Your Profile</h2>
           <p>
               <lable>Name</lable>
               <input type="text" value="<?php echo $check['Name']; ?>" name="name" placeholder="Your Name">
           </p>
            <p>
                <lable>Email</lable>
                <input type="email" value="<?php echo $check['Email']; ?>" placeholder="Your Id.." name="email" required="">
            </p>
            <p>
                <lable>Password</lable>
                <input type="password" value="<?php echo $check['Password']; ?>" placeholder="Password" required="" name="password"><br>
                <p>
               <lable>Username</lable>
               <input type="text" value="<?php echo $check['Username']; ?>" name="user" placeholder="Username.." required="">
           </p>
               <p>
                <input type="submit" value="Submit" name="submit" id="submit">
            </p>
        </form>
        </div>
    </body>
</html>