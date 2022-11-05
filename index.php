<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");

    
    $input = file_get_contents('php://input');
    $json = json_decode($input, true);

    $operation_type = $json['operation_type'];
    $x = $json['x'];
    $y = $json['y'];


    if ($operation_type == "addition") {
        $result = $x + $y;
    } elseif ($operation_type == "subtraction") {
        $result = $x - $y;
    } elseif ($operation_type == "multiplication") {
        $result = $x * $y;
    } else {
          $result = "Invalid Operation";
    }
    


    $final_output = [
            "slackUsername"=>"AstralFox",
            "result"=> $result,
            "operation_type"=> $operation_type
                    ];


 echo json_encode($final_output);
?>


   
