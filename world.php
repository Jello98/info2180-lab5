<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$country= $_GET['country']; 
$city= $_GET['city']; 

?>

<?php if(!(isset($_GET['context']))):?>
<table>
	<tr>
        <th>Country Name</th>
        <th>Continent</th> 
        <th>Independence</th>
        <th>Head of State</th>
    </tr> 
    <tbody>
<?php foreach($results as $row): ?>
  <tr>
      <td><?=$row['name']?></td> 
      <td><?=$row['continent']?></td>
      <td><?=$row['independence_year']?></td>
      <td><?=$row['head_of_state']?></td>
  </tr>
<?php endforeach; ?>  
</tbody>
</table>

<?php else : ?> 

<table style= "border:1px solid black">
    <tr> 
      <th>Name</th> 
      <th>District</th> 
     <th>Population</th>
   </tr>  
 <tbody>
<?php foreach ($context as $row): ?>
    <tr>
        <td><?=$row['city']?></td>
        <td><?=$row['district']?></td>
        <td><?=$row['population']?></td>
    </tr>
<?php endforeach; ?> 
</tbody>
</table> 
<?php endif; ?>

<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
