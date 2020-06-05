<?php

class Student {

  var $first_name;
  var $last_name;
  var $country = 'None';

  function say_hello() {
    return 'Hello world!';
  }

  function full_name() {
    //this verwijst naar het object dat op dat moment wordt gebruikt bijvoorbeeld $student1
    return $this->first_name . " " . $this->last_name;
  }

}

$student1 = new Student;
$student1->first_name = 'Harrie';
$student1->last_name = 'Bakvet';

$student2 = new Student;
$student2->first_name = 'Karin';
$student2->last_name = 'Komkommerburg';


//maakt gebruik van de method full_name in de class Student. Zo hoeft niet telkens de first_name, een spatie en last_name worden neergezet achter de echo
echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";

echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

if(method_exists('Student', 'say_hello')) {
  echo "Method say_hello() exists in Student class.<br />";
} else {
  echo "Method say_hello() does not exist in Student class.<br />";
}
?>
