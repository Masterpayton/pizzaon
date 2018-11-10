<?php
// Guilherme Alves
function saudacao(){
  $hora = date("H");
  if ($hora>=5 and $hora<=12) {
    echo "Bom-Dia";
  }
  if ($hora>=12 and $hora<=18) {
    echo "Boa-Tarde";
  }
  if ($hora>=18 and $hora<=4) {
    echo "Boa-Noite";
  }
}
 ?>
