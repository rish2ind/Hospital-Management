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
           <a href="Main.php">Home</a> &nbsp; &nbsp; &nbsp;
            <a href="#">Doctors</a> &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="#">Patients</a> &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        <div class="heads">
            Add New
        </div>
       <div id="doc">
       <h2>Add new Doctors</h2>
      <form action="docdetails.php" method="POST">
         <p>
              <lable>Id</lable>
              <input type="number" name="docid" required="">
          </p>
          <p>
              <lable>Name</lable>
              <input type="text" name="docname" required="">                         
          </p>
          <p>
              <lable>Specialization</lable>
              <input type="text" name="special" required="">
          </p>
          <p>
              <lable>Age</lable>
              <input type="number" name="docage" required="">
          </p>
          <p>
              <input type="submit" value="Submit" name="submit">
          </p>
      </form>
     </div>
    
    
   </body>
</html>