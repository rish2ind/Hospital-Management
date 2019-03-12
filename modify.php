<?php
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    session_start();
 $id = $_GET['id'];
$d = mysqli_query($conn, "select * from docdetails where Id = '$id'");
$check = mysqli_fetch_array($d);

if(isset($_POST['Submit'])){
            $name = $_POST['docname'];
            $special = $_POST['special'];
            $age = $_POST['docage'];
            $email = $_POST['docemail'];
            $mobile = $_POST['docmobile'];
    
        $sqls = "update docdetails set Name = '$name', Specialization = '$special', Age = '$age', Email = '$email', Mobile = '$mobile' where Id = '$id'";
    $runs = mysqli_query($conn, $sqls);
    if($runs){
        header('location: doctors.php');
        ?>
        <a href="doctors.php">Click here</a>
        <?php
    }
    else{
        echo "Error".mysqli_error($conn);
    }
}
$userprofile = $_SESSION["user"];
if($userprofile==true){
    
}
else{
    header('location: index.php');
}
$sql = "select * from login_details where Username = '".$userprofile."'";
    $run = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($run);
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
        </div> <div id="doc">
       <h2>Add new Doctors</h2>
      <form action="" method="POST">
          <p>
              <lable>Name</lable>
              <input type="text" name="docname" value="<?php echo $check['Name']; ?>" required="">                         
          </p>
          <p>
              <lable>Specialization</lable>
              <input type="text" name="special" value="<?php echo $check['Specialization']; ?>" required="">
          </p>
          <p>
              <lable>Age</lable>
              <input type="number" value="<?php echo $check['Age']; ?>" name="docage" required="">
          </p>
          <p>
              <lable>Email</lable>
              <input type="email" value="<?php echo $check['Email']; ?>" name="docemail" required="">
          </p>
          <p>
              <lable>Mobile</lable>
              <input type="text" value="<?php echo $check['Mobile']; ?>" name="docmobile" required="">
          </p>
          <p>
              <input type="submit" value="Submit" name="Submit">
          </p>
          
      </form>
     </div>
       </body>
</html>