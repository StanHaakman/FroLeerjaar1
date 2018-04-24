<?php
  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte_cm"];
  BMIcalc($gewicht,$lengte);//call function

function BMIcalc($gewicht,$lengte) {
  print "Uw gewicht is: $gewicht kg.<br>";
  //omrekenen lengte
  $lengte = $lengte/100;
  print "Uw lengte is: $lengte m.<br>";
  //bereken BMIcalc
  $bmi = $gewicht / ($lengte * $lengte);
  //afronden
  $bmi = round($bmi,1);
  print "Uw BMI is: $bmi.<br>";
}
