<?php
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    session_start();
    
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $mobile = $_POST['mobile'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $dob=$year."-".$month."-".$day; 
    $sql = "update pateints set Name = '$name' where Id = '$id'";
    $sqlmob = "update pateints set Mobile = '$mobile' where Id = '$id'";
    $sqldate = "update pateints set Date = '$dob' where Id = '$id'";
    $runmob = mysqli_query($conn, $sqlmob);
    $run = mysqli_query($conn, $sql);
    $rundate = mysqli_query($conn, $sqldate);
    if($run){
        header('location: Patients.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    if($runmob){
        header('location: Patients.php');
    }
    else{
        echo "Error".mysql_error($conn);
    }
    if($rundate){
        header('location: Patients.php');
    }
    else{
        echo "Error".mysql_error($conn);
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
        </div><div id="doc">
        <form action="<?php $_PHP_SELF ?>" method="POST">
           <p>Enter the Id of Pateint :</p>
            <p>
                <lable>Id</lable>
                <input type="text" name="id" required="">
            </p><hr>
            <h3>Enter new data</h3>
            <p>Enter the name to be changed</p>
            <p>
                <lable>Name</lable>
                <input type="text" name="name" placeholder="Enter name">
            </p><hr>
            <p>Enter the Mobile Number to be changed</p>
            <p>
                <lable>Mobile No.</lable>
                <input type="text" name="mobile" placeholder="Enter mobile number">
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
                <input type="submit" name="Submit" value="Submit">
            </p>
        </form>
               </div>
       </body>
</html>