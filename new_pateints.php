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
       <h2>Add new Pateints</h2>
      <form action="pateintdetail.php" method="POST">
          <p>
              <lable>Name</lable>
              <input type="text" name="patname" required="">                         
          </p>
          
          <p>
              <lable>Age</lable>
              <input type="number" name="patage" required="">
          </p>
          <p>
              <lable>Sex</lable>
              <input type="text" name="patsex" required="">
          </p>
          <p>
              <lable>Email</lable>
              <input type="email" name="patemail" required="">
          </p>
          <p>
              <lable>Mobile</lable>
              <input type="text" name="patmobile" required="">
          </p>
          <p>
              <lable>Date</lable>
              <select name="month">
                            <option>Month</option>
                             <option value="01">January</option>
                             <option value="02">February</option>
                             <option value="03">March</option>
                             <option value="04">April</option>
                             <option value="05">May</option>
                             <option value="06">June</option>
                             <option value="07">July</option>
                             <option value="08">August</option>
                             <option value="09">September</option>
                             <option value="10">October</option>
                             <option value="11">November</option>
                             <option value="12">December</option>
                        </select>
                        <select name="day" >
                            <option>Day</option>
                            <?php
                                for($i = 1; $i<=31; $i++){
                                    echo "<option value =$i>$i</option> ";
                                }
                            ?>
                        </select>
                        <select name="year">
                             <option>Year</option>
                             <?php for($i=date("Y"); $i>=date("Y")-90; $i--)
                                echo "<option value=$i>$i</option>";
                             ?>
                         </select>
          </p>
          <p>
              <input type="submit" value="Submit" name="submit">
          </p>
          
      </form>
     </div>