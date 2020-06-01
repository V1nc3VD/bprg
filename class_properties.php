<?php

class Student {

  var $first_name;
  var $last_name;
  var $country = 'None';

}

//creëert een nieuw object voor de class Student
$student1 = new Student;
//"declared" de property van het object
$student1->first_name = 'Xavi';
$student1->last_name = 'Peters';

$student2 = new Student;
$student2->first_name = 'Daan';
$student2->last_name = 'Molenberg';

//print van de objects student1 en student2 de voornaam en achternaam met een spatie ertussen op je scherm. Met telkens een linebreak achter de objects.
echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

$class_vars = get_class_vars('Student');
echo "Class vars:<br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Object vars:<br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

//als de property first_name bestaat (wat nu het geval is)
if(property_exists('Student', 'first_name')) {
  echo "Property first_name does exist in Student class.<br />";
} 
//als de property first_name niet zou bestaan
else {
  echo "Property first_name does not exist in Student class.<br />";
}
?>
