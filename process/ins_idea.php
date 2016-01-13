<?php
include_once 'db.php';

//Parameter
$focus = $_REQUEST['focus'];
$observacion = $_REQUEST['observacion'];
$user = 'Public User';
$date = date("d-m-Y h:i:sa") ;
$read = rand(0, 99);
$comment = rand(0, 20);
$vote = rand(0, 50);
$color = rand(1, 6);

//Insert
$arr_ideas = array('focus_id'    => $focus
                  ,'observacion' => $observacion
                  ,'user'        => $user
                  ,'date'        => $date
                  ,'read'        => $read
                  ,'comment'     => $comment
                  ,'vote'        => $vote
                  ,'color'        =>$color);

try {
  $col_ideas->insert($arr_ideas);
  echo 1; //Success
} catch (MongoCursorException $e) {
    echo 0; //Error
}
?>