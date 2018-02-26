<?php
	$postArray = exec("python some.py");

    $postArray = "[".$postArray."]";

    $postArray=str_replace("'","\"",$postArray);
 
 	$de_json   = json_decode($postArray,TRUE);

 	//var_dump($de_json[0]['coef']) ;
 	$coef=$de_json[0]['coef'];
 	$intercept=$de_json[0]['intercept'];

 	echo "$intercept";
	//$coef = $postArray['coef'];
    
   // $intercept = $postArray['intercept'];

   


?>