<?php
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $mobile = $_POST['mobile'];
    $sql = "update docdetails set Name = '$name' where Email = '$email'";
    $sqlmob = "update docdetails set Mobile = '$mobile' where Email = '$email'";
    $runmob = mysqli_query($conn, $sqlmob);
        $run = mysqli_query($conn, $sql);
    if($run){
        header('location: doctors.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    if($runmob){
        echo "Data updated successfully";
    }
    else{
        echo "Error".mysql_error($conn);
    }
}
?>
   

   
   <html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="PHPStyle.css">
    </head>
    <body>
        
        <div id="first">
            Welcome
        </div>
        <div id="title">
            HOSPITAL MANAGEMENT SYSTEM
        </div>
        <div id="nav">
           <a href="Main.php">Home</a> &nbsp; &nbsp; &nbsp;
            <a href="doctors.php">Doctors</a> &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="Patients.php">Patients</a> &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        <div class="heads">
            Update Records
        </div><div id="doc">
        <form action="<?php $_PHP_SELF ?>" method="POST">
           <p>Enter the email id of doctor :</p>
            <p>
                <lable>Email</lable>
                <input type="email" name="Email" required="">
            </p><hr>
            <p>Enter the name to be changed</p>
            <p>
                <lable>Name</lable>
                <input type="text" name="name" placeholder="Enter name">
            </p>
            <p>Enter the Mobile Number to be changed</p>
            <p>
                <lable>Mobile No.</lable>
                <input type="text" name="mobile" placeholder="Enter mobile number">
            </p>
            <p>
                <input type="submit" name="Submit" value="Submit">
            </p>
        </form>
               </div>
       </body>
</html>