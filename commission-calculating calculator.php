<?php

function calculate_commission($tuition) {
  return ($tuition >= 20000) ? 0.25 * $tuition :
         ($tuition >= 10000) ? 0.20 * $tuition :
         ($tuition >= 7000) ? 0.15 * $tuition :
         "Invalid data";
}

$tuition = 6000;
$commission = calculate_commission($tuition);

echo "For a tuition fee of $tuition, the commission is $commission";

?>