<?php

echo "Hoeveel vrienden zal ik vragen om hun droom? ";
$a = readline();
$Bucket = array();

if (!is_numeric($a)) {
exit ($a . " is geen geldige getal, probeer het opnieuw ");

}

for ($i=0; $i < $a ; $i++) {
  $naam = readline ("Wat is jouw naam? ");
  $dromen = readline ("Hoeveel dromen ga je opgeven? ");
  if (!is_numeric($dromen)) {
  exit ($dromen . " is geen geldige getal, probeer het opnieuw ");
}
$Bucket[$naam] =  array();
for ($z=0; $z < $dromen; $z++) {
$droom = readline("wat is jou droom? ");
  array_push($Bucket[$naam],$droom);
}
}
foreach ($Bucket as $key => $value) {
foreach ($value as $in ) {
echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;
}
}

 ?>
