<?php
    session_start();
 $conn = mysqli_connect("localhost", "root", "", "hospital");
 if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $user = $_POST['user'];
                            
                $sql = "select * from login_details where Username = '".$user."' AND Email = '".$email."' AND Password = '".$pass."'";
                $run = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($run)==1){
                     $_SESSION["user"] = $user;
                    header('Location: Main.php');              
                }
                else{
                    echo "<script> alert ('Wrong email or Password') </script>";
                    echo "<script>location.href='index.php'</script>";
                    exit();
                }
 }
?>