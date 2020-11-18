<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country =  $_GET['country'];

/*if (!empty($_GET['all'])){
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "</ul";
  foreach ($results as $row):
    echo "<li>" . $row['name'] . ' is ruled by ' . $row['head_of_state'] . "</li>";
  endforeach;
  echo "</ul";
}*/

if (isset($_GET['country']) || !empty($_GET['country'])){
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%';"); 
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<table border ='1'>
  <tr>
  <th> Name </th>
  <th> Continent </th>
  <th> Independence </th>
  <th> Head of State</th>
  </tr>";
  foreach ($results as $row):
    echo "<tr>";
    echo "<td>".$row['name'] ."</td>";
    echo "<td>".$row['continent'] ."</td>";
    echo "<td>".$row['Independence Year'] ."</td>";
    echo "<td>".$row['head_of_state'] . "</td>";
    echo "<tr>";
  endforeach;
  echo "</table>";
}

/*?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>*/
