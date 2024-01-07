<!DOCTYPE html>
<html>
<body>

<?php 
echo "<h2>While Loop</h2>";

$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

echo "<h2>For Loop</h2>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

echo "<h2>Foreach Loop</h2>";

foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

?>  

</body>
</html>
