<!DOCTYPE html>
<html>
<head>

    <title>
    hostel management system
       
    </title>
</head>
<body>
<?php

function checkRoomType($roomNo) 
{
    if ($roomNo <= 100)
         {
     return "Single Room";   
    } 
    else if ($roomNo <= 200) {
  return "Double Room";   
    }
     else {
        return "Dormitory"; 
    }
}


$rooms = [45, 120, 210];
foreach ($rooms as $values) {
     $type = checkRoomType($values);   
    echo "Room $values is a $type<br>";
}
?>

    </body>
</html>