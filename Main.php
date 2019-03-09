    <?php
 $conn = mysqli_connect("localhost", "root", "", "hospital");

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
            Appointment Lists
        </div>
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
               <td><a href="modify.php?id=<?php echo $row['Email']; ?>">Modify</a></td>
               
           </tr> 
           
           <?php
            }
?>     
        </table>
        <div class="heads">
            Delete Record
        </div>
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
               <td><a href="deletepateints.php?id=<?php echo $row['Email']; ?>">Delete</a></td>
               
           </tr> 
           
           <?php
            }
?>     
        </table>  
    </body>
</html>