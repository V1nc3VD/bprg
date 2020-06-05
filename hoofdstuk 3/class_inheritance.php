<?php
class User {
    var $first_name;
    var $last_name;
    var $nickname;
    var $isadmin = false;
    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

}

//de class subscriber is een subclass van User. Het bevat alle atributes van User + alle atributes van Subscriber
class Subscriber extends User {
    var $subscription;
}

class Admin extends User {
    var $isadmin = true;
    function full_name() {
    return $this->first_name . " " . $this->last_name . "[Admin]";
    }
}

$User1 = new User;
$User1->first_name = 'Vince';
$User1->last_name = 'van Doorn';
$User1->nickname = 'V1nc3';

//User2 hoort bij de de class Subscriber, wat een subclass van User is
$User2 = new Subscriber;
$User2->first_name = 'Hank';
$User2->last_name = 'van ';
$User2->nickname = 'Hankert';
$User2->last_name = 'bakvet';
$User2->subscription = 'gold';

$Admin = new Admin 
$Admin->first_name = 'Vince';
$Admin->last_name = 'van Doorn';


echo $User1->full_name() . "<br> <br>";
//Hier zie je dat het object User2 wat hoort bij de subclass Subscriber ook bij de method full_name() en alle andere atributes kan.
echo $User2->full_name() . "<br>";
echo $User2->nickname . "<br>";


?>