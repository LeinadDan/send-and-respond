<?php 
  $arr = array("message"=> "TEST POST DATA", "data" => json_encode($_POST));
  echo json_encode($arr);
