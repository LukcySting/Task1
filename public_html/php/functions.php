<?php
    $data = file_get_contents("https://b24-f44l92.bitrix24.ru/rest/1/8p144friym0qnqc2/crm.company.list/");
    $data = json_decode($data);
    $data = $data->result;
    $res = Array();
    for($i=0; $i<count($data); $i++){
        $add = true;
        for($j=0; $j<count($res); $j++){
          if($data[$i]->TITLE==$res[$j]->TITLE){
             $add=false; 
             break;
          }  
        }
        if($add){
         for($j=$i+1; $j<count($data); $j++){
          if($data[$i]->TITLE==$data[$j]->TITLE){
             array_push($res, $data[$i]);
             break;
          }  
        }   
        }
    }
    echo json_encode($res);
    
    
?>