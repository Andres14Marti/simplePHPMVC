<?php
/**
* 
*funcion run  ejecuta el controlador
*   @return void
*/
  function run(){
      $arrViewData = array();
      $arrViewData["nombre"] = "Luis A Martinez";
      $arrViewData["cuenta"] = "0826199400252";
      $arrViewData["email"] = "luis98_mc@hotmail.com";

    renderizar("ficha",$arrViewData);
  }
  run();
?>
