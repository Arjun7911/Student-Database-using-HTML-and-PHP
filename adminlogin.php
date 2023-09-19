<html>

<head>
  <style>
    
      a:link {
        text-decoration: none;
        color: black;
      }
      a:visited {
        text-decoration: none;
        color: black;
      }
      a:hover {
        text-decoration: none;
        color: black;
      }
      a:active {
        text-decoration: none;
        color: black;
      }
      .HEAD {
        padding: 1px;
        margin: 0px 0px;
        background-image:linear-gradient(#FEEAFA,white);
        font-family: "Baskerville Old Face";
        text-align: center;
        border-radius: 3px;
      }
      .GFG {
        transition-duration: 0.5s;
      }
      .GFG:hover {
        background-image:linear-gradient(#DDE5B6,white);
        color:black;
        font-size: 15px;
        font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
          "Lucida Sans", Arial, sans-serif;
        border-radius: 4px;
      }
      #grad {
        background-image:linear-gradient(#FEEAFA,white);
      }
      .form {
        text-align: center;
       
      }
      
      
      input[type=text]:focus {
        background-color: rgba(186, 238, 255, 0.947);
      }

      input[type=password]:focus {
        background-color: lightblue;
      }
    
    table {
      margin: 140px auto;
      border-colapse: colapse;
      text-align: left;

      width: 70%;
      vertical-align: bottom;
      border-radius: 10px;
      box-shadow: 10px 10px 25px rgba(113, 35, 35, 0.546);
    }

    th {
      background-color: rgba(255, 174, 174, 0.92);
      color: black;
      border-radius: 3px;
    }

    tr:nth-child(odd) {
      border-radius: 3px;
      background-color: rgb(255, 204, 204);
    }

    tr:hover {
      background-color: rgba(173, 146, 255, 0.747);
      transition-duration: 0.5s;

    }

    th,
    td {
      border-radius: 3px;
      padding: 15px;
      text-align: left;
    }

    .HEAD {
      padding: 1px;
      margin: 0px 0px;
      background-color: rgb(255, 88, 88);
      font-family: "Baskerville Old Face";
      text-align: center;
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <div class="HEAD" id="grad">
    <h1>Admin's Portal</h1>
  </div>
  <hr style="
        height: 2px;
        border-width: 1px;
        color: gray;
        background-color: gray;
      " />
  <?php
  $con = mysqli_connect('localhost:3306', 'root', '', 'student_database');



  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  $pass = 1000;
  $name = 'Admin';
  $txtName = $_POST['User'];
  $txtPass = $_POST['Pass'];
  if ($txtPass == $pass && $txtName == $name) {
    $sql = "SELECT * FROM `stdetails`";

    $result = $con->query($sql);

    if ($result->num_rows > 0) 
    {
      echo "<table ><tr>
        <th>Name</th>
        <th>Roll No.</th>
        <th>Pursuing</th>
        <th>Branch</th>
        <th>D.O.B</th>
        <th>Gender</th>
        <th>Phone</th>
        </tr>";
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Roll_Number"] . " </td><td>" . $row["Pursuing"] . "</td><td>" . $row["Branch"] . "</td><td>" . $row["D_O_B"] . " </td><td>" . $row["Gender"] . " </td><td>" . $row["Phone"] . " </td></tr>";
      }
      echo "</table>";
    } 
  } 
  else 
  {
    echo "<script>
   alert('Invalid Username , Password'); 
   </script>";
  }
  $con->close();
  ?>
  <br>
  <a href="BODY.html" target="_self" title="Back">
    <button class="GFG">Go Back</button>
  </a>
</body>

</html>