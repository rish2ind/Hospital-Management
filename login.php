<?php
 $conn = mysqli_connect("localhost", "root", "", "hospital");
    
?>


<html>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                
                $sql = "select * from login_details where Email = '".$email."' AND Password = '".$pass."'";
                $run = mysqli_query($conn, $sql);
                if(mysqli_num_rows($run)==1){
                    header('Location: Main.php');
                   
                }
                else{
                    echo "Wrong email or Password";
                    ?>
                    <br> <a href="index.php">Click here to go back</a>
                    <?php
                    exit();
                }
            }
            
        
        ?>
    </body>
</html>