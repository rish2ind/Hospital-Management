<html>
    <head>
        <title>Hostpital</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div id="form">
        <form action="login.php" method="POST">
           <h2>Login Page</h2>
           <p>
               <lable>Username</lable>
               <input type="text" name="user" placeholder="Username.." required="">
           </p>
            <p>
                <lable>Email</lable>
                <input type="email" placeholder="Your Id.." name="email" required="">
            </p>
            <p>
                <lable>Password</lable>
                <input type="password" placeholder="Password" required="" name="password"><br>
                <input type="submit" value="Submit" name="submit">
            </p>
        </form>
        </div>
    </body>
</html>