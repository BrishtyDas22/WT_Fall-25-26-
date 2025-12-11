<!DOCTYPE html>
<html>
<head>
<title>php slide 1</title>
</head>
<body>
    <?php
    
     //$cars = array("Volvo","BMW","Toyota");
    // var_dump($cars);
    
    
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

foreach ($car as $x => $y) {
echo "<br> $x: $y <br>";
}




    ?>
</body>
</html>