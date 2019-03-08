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
            <a href="#">Doctors</a> &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="#">Patients</a> &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        <div class="heads">
            Doctors Lists
        </div>
       
        <a href="new_doctor.php" class="new">Add new Record</a>
        <table width="600" border="1" cellpadding="1" cellspacing= "1" id="doctable">
            <tr>
                <th>Id</th>
                <th>Doctor Name</th>
                <th>Specialization</th>
                <th>Age</th>
            </tr>
             <?php
    $sqlget = "select * from docdetails";
    $result = mysqli_query($conn, $sqlget);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
                
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Specialization']."</td>";
        echo "<td>".$row['Age']."</td>";        
        echo "</tr>";
    }
?>
        </table> 
        
       
        <div class="heads">
            Delete Or Modify Records
        </div>
        <table width="600">
            <tr>
                <th>Id</th>
                <th>Doctor Name</th>
                <th>Specialization</th>
                <th>Age</th>
              
            </tr>
             <?php
    $sqlget = "select * from docdetails";
    $result = mysqli_query($conn, $sqlget);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
                
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Specialization']."</td>";
        echo "<td>".$row['Age']."</td>";  
        
        echo "</tr>";
    }
?>
        </table>
    </body>
</html>