<?php 
include_once 'db.php';

$html_row = '';
$html_boxes = '';
$html_cou_box = 0;



//Read
$filter_focid = isset($_REQUEST['focid']) ? $_REQUEST['focid'] : 0;
if ($filter_focid > 0) {
  //Read Filter Focus_Id
  $result = $col_ideas->find(array("focus_id" => $filter_focid));
} else {
  //Read All
  $result = $col_ideas->find();  
}


//Order
$order= isset($_REQUEST['order'])? $_REQUEST['order']: 0;
switch ($order) {
    case 1:
        $result->sort(array("read"=>-1));
        break;
    case 2:
        $result->sort(array("comment"=>-1));
        break;
    case 3:
        $result->sort(array("vote"=>-1));
        break;
}


//Echo
foreach ($result as $ideas) {
    if ($ideas['observacion'] != null){

      $html_cou_box = $html_cou_box + 1;           
      
      $html_boxes .='<div class="g-box card-panel col m3 l4 l4-m focus-'.$ideas['focus_id'].'">          
                    <div class="g-box-hea row">
                      <div class="photo col l3 "><i class="material-icons bg-'.$ideas['focus_id'].'">person</i></div>
                      <div class="title col l9">
                        <h5>'.$ideas['user'].')</h5>
                        <span>'.$ideas['date'].'</span>
                      </div>
                    </div>
                    <div class="g-box-con"><p>'.$ideas['observacion'].'</p></div>
                    <div class="g-box-foo">
                      <ul> 
                        <li><i class="material-icons">favorite</i>'.$ideas['vote'].'</li>
                        <li><i class="material-icons">remove_red_eye</i>'.$ideas['read'].'</li>
                        <li><i class="material-icons">comment</i>'.$ideas['comment'].'</li>
                      </ul>
                    </div>
                  </div>';

      if ($html_cou_box == 3){
        $html_row .= '<div class="row">'.$html_boxes.'</div>';
        $html_boxes = '';
        $html_cou_box = 0;
      }
    } //en if 
} //end foreach

if ($html_cou_box < 3 && $html_cou_box != 0){
        $html_row .= '<div class="row">'.$html_boxes.'</div>';
}

echo $html_row;
?>