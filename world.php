<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country =  $_GET['country'];
//$cities =  $_GET['cities'];

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
    echo "<td>".$row['independence_year'] ."</td>";
    echo "<td>".$row['head_of_state'] . "</td>";
    echo "<tr>";
  endforeach;
  echo "</table>";
}
/*if (isset($_GET['cities']) || !empty($_GET['cities'])){
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM cities");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<table border ='1'>
  <tr>
  <th> Name </th>
  <th> District </th>
  <th> Population </th>
  </tr>";
  foreach ($results as $row):
    echo "<tr>";
    echo "<td>".$row['name'] ."</td>";
    echo "<td>".$row['district'] ."</td>";
    echo "<td>".$row['Population'] ."</td>";
    echo "<tr>";
  endforeach;
  echo "</table>";
}*/

/*?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>*/
