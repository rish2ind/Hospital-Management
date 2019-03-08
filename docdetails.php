<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
?>
<html>
    <body>
       <?php
        if(isset($_POST['submit'])){
            $id = $_POST['docid'];
            $name = $_POST['docname'];
            $special = $_POST['special'];
            $age = $_POST['docage'];
            
            $sql = "insert into docdetails (Id, Name, Specialization, Age) values('$id', '$name', '$special', '$age'  )";
            $run = mysqli_query($conn, $sql);
            
            if($run){
               header('Location: doctors.php');
            }
            else{
                echo "Please Try again";
                ?>
                <br><a href="new_doctor.php">Click here to go back</a>
                <?php
            }
        }
        
        
        
        
        
        ?>
    </body>
</html>