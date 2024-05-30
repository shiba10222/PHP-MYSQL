<?php
// header("Refresh:1");

echo time();
echo "<br>";
echo date("h:i:s");
echo "<br>";
?>
<h2>Tokyo</h2>
<?php
ini_set('date.timezone', 'Asia/Tokyo');
echo date("h:i:s");
echo "<br>";
echo date("Y/m/d h:i:s");
?>