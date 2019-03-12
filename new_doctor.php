<?php
    session_start();
$conn = mysqli_connect("localhost", "root", "", "hospital");
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
            Add New
        </div>
       <div id="doc">
       <h2>Add new Doctors</h2>
      <form action="docdetails.php" method="POST">
          <p>
              <lable>Name</lable>
              <input type="text" name="docname" required="">                         
          </p>
          <p>
              <lable>Specialization</lable>
              <input type="text" name="special" required="">
          </p>
          <p>
              <lable>Age</lable>
              <input type="number" name="docage" required="">
          </p>
          <p>
              <lable>Email</lable>
              <input type="email" name="docemail" required="">
          </p>
          <p>
              <lable>Mobile</lable>
              <input type="text" name="docmobile" required="">
          </p>
          <p>
              <input type="submit" value="Submit" name="submit">
          </p>
          
      </form>
     </div>
    
    
   </body>
</html>