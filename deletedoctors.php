<?php
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $sql = "delete from docdetails where Id = '$id'";
        $run = mysqli_query($conn, $sql);
        if($run){
            header('location: doctors.php');
        }
        else{
            echo "Error".mysqli_error($conn);
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
        </div>
        <div id="doc">
            <form action="" method="POST">
                <p>
                    <lable>Enter Id of Doctors to delete</lable>
                    <input type="text" name="id" placeholder="Enter Id">
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>