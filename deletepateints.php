 <?php
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    session_start();
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $sql = "delete from pateints where Id = '$id'";
        $run = mysqli_query($conn, $sql);
        if($run){
            header('location: Main.php');
        }
        else{
            echo "Error".mysqli_error($conn);
        }
    }
$userprofile = $_SESSION["user"];
$sql = "select * from login_details where Username = '".$userprofile."'";
    $run = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($run);
if($userprofile==true){
    
}
else{
    header('location: index.php');
}

?>
   <html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="PHPStyle.css">
                <link rel="icon" href="Images/Hospital1.jpg">

    </head>
    <body>
        
        <div id="first">
            Welcome : <?php echo $result['Name']; ?> <a href="logout.php"><span style="float: right;">Logout</span></a>
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
                    <lable>Enter Id of Pateint to delete</lable>
                    <input type="text" name="id" placeholder="Enter Id">
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>