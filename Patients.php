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
        <link rel="stylesheet" href="PHPStyle.css">
        <link rel="icon" href="Images/Hospital.png">
    </head>
    <body>
        
        <div id="first">
            Welcome : <?php echo $result['Name']; ?> <a href="logout.php"><span style="float: right;">Logout</span></a>
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
            Pateints Lists
        </div>
        <a href="new_pateints.php" class="new">Add new Record</a>
        <table width="100%" border="1" cellpadding="1" cellspacing= "1" id="doctable">
            <tr>
                <th>Id</th>
                <th>Pateints Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Date</th>
                <th>Modify</th>        
            </tr>
            <?php
    $sqlget = "select * from pateints";
    $result = mysqli_query($conn, $sqlget);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       ?>
           <tr>
               <td><?php echo $row['Id'];?></td>
               <td><?php echo $row['Name'];?></td>
               <td><?php echo $row['Age'];?></td>
               <td><?php echo $row['Sex'];?></td>
               <td><?php echo $row['Email'];?></td>
               <td><?php echo $row['Mobile'];?></td>
                <td><?php echo $row['Date'];?></td>
               <td><a href="modifyMain.php?id=<?php echo $row['Id']; ?>">Modify</a></td>
               
           </tr> 
           
           <?php
            }
?>     
        </table>  
        
        <div class="heads">
            Search Pateints
        </div>
        
        <form action="" method="POST">
            <p>
                <lable>Enter Mobile</lable>
                <input type="text" name="mobile" placeholder="Enter Mobile Number..." required="">
            </p>
            <input type="submit" name="submit" value="Submit">
        </form>
        <table width="100%" border="1" cellpadding="1" cellspacing= "1" id="doctable">
            <tr>
                <th>Id</th>
                <th>Pateints Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Date</th>
                <th>Modify</th>    
            </tr>
            <?php
            if(isset($_POST['submit'])){
            $mobile = $_POST['mobile'];
    $sqld = "select * from pateints where Mobile = '$mobile'";
    $result = mysqli_query($conn, $sqld);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       ?>
           <tr>
               <td><?php echo $row['Id'];?></td>
               <td><?php echo $row['Name'];?></td>
               <td><?php echo $row['Age'];?></td>
               <td><?php echo $row['Sex'];?></td>
               <td><?php echo $row['Email'];?></td>
               <td><?php echo $row['Mobile'];?></td>
               <td><?php echo $row['Date'];?></td>         <td><a href="modifyMain.php?id=<?php echo $row['Email']; ?>">Modify</a></td>    
           </tr> 
           
           <?php
                }
            }
?>     
        </table>  
</body>
</html>