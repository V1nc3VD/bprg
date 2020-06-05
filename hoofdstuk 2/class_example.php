<?php

class Student {

}
//krijg een lijst met alle classes. Ook de classes die standaard in php zitten.
$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "<br />";

$class_names = ['Product', 'Student', 'student'];
//gaat de array af en bekijkt of de inhoud van de array namen van een class zijn.
foreach($class_names as $class_name) {
  if(class_exists($class_name)) {
    echo "{$class_name} is a declared class.<br />";
  } else {
    echo "{$class_name} is not a declared class.<br />";
  }
}

?>
