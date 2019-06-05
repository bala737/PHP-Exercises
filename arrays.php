<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food =  ["Rice","Fruits","chicken","burger"];

/*
Print every array element in a new line.
*/

echo "{$food[0]} <br>";
echo "{$food[1]} <br>";
echo "{$food[2]} <br>";
echo "{$food[3]} <br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc =[
    'rice' =>'main course',
    'chicken' => 'appetizer',
    'burger' => 'salad',
    'fruits' => 'dessert'
];


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo 'rice | '. $food_assoc['rice'].'<br>' ;
echo 'chicken | '. $food_assoc['chicken'] .'<br>' ;
echo 'burger | '. $food_assoc['burger'] .'<br>' ;
echo 'fruits | '. $food_assoc['fruits'] .'<br>' ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/



$food_assoc =[
    'rice' => [
                    'type'=>'main course',
                    'origin'=>'India'                    
                    ],
    'chicken' => [
                    'type'=>'appetizer',
                    'origin'=>'USA'                    
                    ],
    'burger' => [
                    'type'=>'salad',
                    'origin'=>'Canada'                    
                    ],
    'fruits' => [
                    'type'=>'dessert',
                    'origin'=>'Earth'                    
                    ]
];

echo 'rice | '.$food_assoc['rice']['type'].' | '.$food_assoc['rice']['origin'] .'<br>';
echo 'chicken | '.$food_assoc['chicken']['type'].' | '.$food_assoc['chicken']['origin'] .'<br>';
echo 'burger | '.$food_assoc['burger']['type'].' | '.$food_assoc['burger']['origin'] .'<br>';
echo 'fruits | '.$food_assoc['fruits']['type'].' | '.$food_assoc['fruits']['origin'] .'<br>';


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>

<html>
<style>
table,th,td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td><?php echo key($food_assoc)?></td>
    <td><?php echo $food_assoc['rice']['type'] ?></td>
    <td><?php echo $food_assoc['rice']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
  <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['chicken']['type'] ?> </td>
    <td><?php echo $food_assoc['chicken']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
   <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['burger']['type'] ?> </td>
    <td><?php echo $food_assoc['burger']['origin'] ?></td>
    <?php next($food_assoc)?>
  </tr>
   <tr>
    <td><?php echo key($food_assoc)?></td>
   <td><?php echo $food_assoc['fruits']['type'] ?> </td>
    <td><?php echo $food_assoc['fruits']['origin'] ?></td>
  </tr>
</table>
    </html>
