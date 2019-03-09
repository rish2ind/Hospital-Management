<?php 
    $conn = mysqli_connect("localhost", "root", "", "hospital");   

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    
    $sql = "delete from docdetails where Email = '$email'";
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
           <a href="Main.php">Home</a>  &nbsp; &nbsp; &nbsp;
            <a href="doctors.php">Doctors</a> &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="Patients.php">Patients</a> &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        <div class="heads">
            Doctors Lists
        </div>
       
        <a href="new_doctor.php" class="new">Add new Record</a>
        <table width="100%" border="1" cellpadding="1" cellspacing= "1" id="doctable">
            <tr>
                <th>Id</th>
                <th>Doctor Name</th>
                <th>Specialization</th>
                <th>Age</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Modify</th>
                
            </tr>
             <?php
    $sqlget = "select * from docdetails";
    $result = mysqli_query($conn, $sqlget);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       ?>
           <tr>
               <td><?php echo $row['Id'];?></td>
               <td><?php echo $row['Name'];?></td>
               <td><?php echo $row['Specialization'];?></td>
               <td><?php echo $row['Age'];?></td>
               <td><?php echo $row['Email'];?></td>
               <td><?php echo $row['Mobile'];?></td>
               <td><a href="modify.php?id=<?php echo $row['Email']; ?>">Modify</a></td>
               
           </tr> 
           
           <?php
            }
?>
        </table>    
        <div class="heads">
            Delete Records
        </div>
        <form action="" method="POST">
            <P>Enter Email of doctor to delete
                <input type="email" placeholder="Enter Email..." name="email">
            </P>
            <p>
                <input type="submit" value="Delete" name="submit">
            </p>
        </form>
    </body>
</html>