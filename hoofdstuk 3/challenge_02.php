<?php
class Werker {

    var $voornaam;
    var $achternaam;
    var $uurloon = 6;
    var $leeftijd;
    var $taak = false;
    var $urenvandaag;
    function werk() {
        echo "Geen taak";
    }
    function dagloon() {
        echo "<br>Medewerker heeft $" . ($this->uurloon*$this->urenvandaag) . " verdient vandaag";
    }
}

class bezorger extends Werker {
    function werk() {
        echo "Eten succesvol bezorgt";
    }
    var $taak = true;
}

//de classes fietsbezorger en ufobezorger zijn subclasses van de subclass bezorger
class fietsbezorger extends bezorger {
    const voertuig = "fiets";

    }

class ufobezorger extends bezorger {
     const voertuig = "ufo";

    }

class kassamedewerker extends Werker {
    function werk() {
        echo "Klant heeft succesvol betaald";
    }
    var $taak = true;
    function vraagbestelling()
    {
        echo "hallo mag ik uw bestelling";
    }
}

$werker1 = new kassamedewerker;
$werker1->voornaam = "Peter";
$werker1->achternaam = "van Peters";
$werker1->leeftijd = "18";
$werker1->urenvandaag = 10;
//gebruikt de functie werk() van de subclass kassamedewerker, het override dus de hoofdclass Werker.
$werker1->werk();
//gebruikt de functie dagloon() van werker (de subclass zelf heeft die functie niet)
$werker1->dagloon();

$werker2 = new ufobezorger; 

//het roepen van het atribute moet hier anders want het is een const ipv een normale variable
//ik had hiervoor gekozen omdat het niet logisch zou zijn als de ufo piloot bijvoorbeeld op een fiets zit of een ander voertuig
echo "<br>" . $werker2::voertuig;




?>

