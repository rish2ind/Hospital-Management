<?php
    
 $conn = mysqli_connect("localhost", "root", "", "hospital");
session_start();
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
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="PHPStyle.css">
        <link rel="icon" href="Images/Hospital.png">
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
            Your Profile
            <span style="float: right; font-size: 20px;"><?php echo date("l F j ,  Y h:i:s A"); ?></span>
        </div>
        
       <div id="admin">
            <table width=600px cellpadding = "1" cellspacing = "1" border="1" style="margin-left: 30%;">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Username</th>    
                    <th>Edit</th>              
                </tr>
                <?php
                    $sql = "select * from login_details ";
                $run = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
                
                ?>
                    <tr>
                        <td><?php echo $row['id'];  ?></td>
                        <td><?php echo $row['Name'];  ?></td>
                        <td><?php echo $row['Email'];  ?></td>
                        <td><?php echo $row['Password'];  ?></td>
                        <td><?php echo $row['Username'];  ?></td>
                        <td> <a href="adminModify.php?id=<?php  echo $row['id']; ?>">Edit</a></td>
                    </tr>
                    <?php
                    }
                ?>
            </table>
       </div>