<?php
        $conn = mysqli_connect("localhost", "root", "", "hospital");
    
        if(isset($_POST['submit'])){
            $name = $_POST['patname'];
            $age = $_POST['patage'];
            $sex = $_POST['patsex'];
            $email = $_POST['patemail'];
            $mobile = $_POST['patmobile'];
            $month = $_POST['month'];
            $day = $_POST['day'];
            $year = $_POST['year'];
            $dob=$year."-".$month."-".$day;
            
            $sql = "insert into pateints (Name, Age, Sex, Email, Mobile, Date) values ('$name', '$age','$sex', '$email', '$mobile', '$dob')";
            $run = mysqli_query($conn, $sql);
            if($run){
                header('Location:Patients.php');
            }
            else{
                echo "Error".mysqli_error($conn);
            }
        }

?>