<!DOCTYPE html>
<html>
  <body>
    <h1>My Server's Website</h1>
    <p>This is my first paragraph</p>
    <table>
      <tr>
        <th>Id</th>
        <th>fname</th>
        <th>lname</th>
      </tr>
    </table>
    <?php
    // phpinfo();
    

    $host = "localhost";
    $user = "root";
    $password = "Tapawingo14!";
    $db = "members";
    $conn = mysqli_connect($host, $user, $password, $db);
    if($conn->connect_error) {
      die("Connection failed: ".$conn->connect_error);
    }
    else {
      //echo "connection successful";
    }
    $sql = "SELECT fname, lname, age, sexuality FROM residents"; 

    $result = $conn->query("SELECT * FROM residents");

    if($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["sexuality"]."</tr></tr>"."\r\n";
      }
      echo "</table>";
    }
    else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </body>
</html>