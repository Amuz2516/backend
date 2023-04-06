<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.html">Student</a>
                    <a href="ViewParent.html">Parent</a>
                    <a href="ViewTeacher.html">Teacher</a>
                    <a href="ViewClass.html">Class</a>
                    <a href="ViewBooks.html"> Library Books</a>
                    <a href="ViewSubject.html"> Subject</a>
                    <a href="ViewAsg.html"> Assignment </a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="AddStudent1.php">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass1.php">Class</a>
                    <a href="AddBooks1.php">Library Books</a>
                    <a href="AddSubject1.php">Subject</a>
                    <a href="AddAsg.html"> Assignment </a>
                </div>
            </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
            <br>
            <form method="post" action="AddClass.php">

    			<label for="cyear">Class Year:</label>
    			<select name="cyear">
                    <option value="Reception_year"> Reception Year </option>
                    <option value="year_one">  Year One </option>
                    <option value="year_two"> Year Two </option>
                    <option value="year_three"> Year Three </option>
                    <option value="year_four"> Year Four </option>
                    <option value="year_five"> Year Five </option>
                    <option value="year_six"> Year Six </option>
                </select><br><br>

                    <label for="cnumber"> Class Number:</label>
                    <input type="text" name="cnumber"><br><br>

                <label for="ccapacity">Class Capacity:</label>
    			<input type="text" name="ccapacity"><br><br>

                <label for="ctime">Class Time:</label>
    			<input type="text" name="ctime"><br><br>

          <label> Select Student </label>
          <select name="StudID">
          <?php
              $link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
  
              if ($link === false) {
                  die("Connection failed: ");
              }
               $sql = mysqli_query($link, "SELECT StudID, sFname FROM student");
              while ($row = $sql->fetch_assoc()){
              echo "<option value='{$row['studID']}'>{$row['sFname']}</option>";
              }
              ?>
              </select><br><br>

              <label> Select Teacher </label>
          <select name="TeachID">
          <?php
              $link = mysqli_connect("sdb-57.hosting.stackcp.net", "student8-3530313590ba", "ua92-studentAc", "student8-3530313590ba");
  
              if ($link === false) {
                  die("Connection failed: ");
              }
               $sql = mysqli_query($link, "SELECT TeachID, tFname FROM teacher");
              while ($row = $sql->fetch_assoc()){
              echo "<option value='{$row['TeachID']}'>{$row['tFname']}</option>";
              }
              ?>
              </select>


                    

        
    			<br>

    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>