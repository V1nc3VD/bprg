<?php
class Ebike {
  var $merk;
  var $model;
  //maximale afstand op lage stand
  var $batterijWh;
  var $jaar;
  var $beschrijving;
  var $massa_kg;

  function naam() {
      return $this->merk . " " . $this->model . " (" . $this->jaar . ")";
  }

  function show_pond() {
      return $this->massa_kg * 2.2046226218;
  }

  function pond_to_kg($pond) {
      $this->massa_kg = $pond / 2.2046226218;
  }

}

$Ebike1 = new Ebike;
$Ebike1->merk = "vanMoof";
$Ebike1->model = "S3";
$Ebike1->batterijWh = 504;
$Ebike1->jaar =  2019;
$Ebike1->beschrijving = "Een stoere Ebike van een Nederlands bedrijf";
$Ebike1->pond_to_kg(40);

$Ebike2 = new Ebike;
$Ebike2->merk = "Spacebike";
$Ebike2->model = "Runner";
$Ebike2->batterijWh = 475;
$Ebike2->jaar =  2020;
$Ebike2->beschrijving = "Een goedkope lichte fiets";
$Ebike2->gewicht_pond = 15;

$Ebike3 = new Ebike;
$Ebike3->merk = "Bertafietsen";
$Ebike3->model = "DAB-200";
$Ebike3->batterijWh = 504;
$Ebike3->jaar =  2019;
$Ebike3->beschrijving = "Een mooie fiets met een retro look";
$Ebike3->massa_kg = 22;

$beschrijvingTop3 = "Dit zijn de populairste fietsen op dit moment.";

echo $beschrijvingTop3 . ":</br>";
echo $Ebike1->naam() . "</br>";
echo $Ebike2->naam() . "</br>";
echo $Ebike3->naam() . "</br>";
echo "</br>de " . $Ebike1->naam()  . ":</br>";
echo 
"beschrijving: " .
$Ebike1->beschrijving . "</br>" .
"Wattuur: " . $Ebike1->batterijWh . "</br>" .
"Gewicht KG: " . $Ebike1->massa_kg . "Gewicht pond:" . $Ebike1->show_pond();


?>