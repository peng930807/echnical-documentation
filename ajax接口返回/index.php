<?php 
function finish($data)
      {
          header('Content-type:application/json;charset=UTF-8');
          die(json_encode($data));
      }
 ?>