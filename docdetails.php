<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
?>
<html>
    <body>
       <?php
        if(isset($_POST['submit'])){
            $name = $_POST['docname'];
            $special = $_POST['special'];
            $age = $_POST['docage'];
            $email = $_POST['docemail'];
            $mobile = $_POST['docmobile'];
            $sql = "insert into docdetails ( Name, Specialization, Age, Email, Mobile) values( '$name', '$special', '$age', '$email', '$mobile'  )";
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