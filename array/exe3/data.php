<?php 

 $listInfor = [];
 $dieuKien = isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["website"]) && isset($_GET["comment"]) && isset($_GET["gender"]) ;

 if ($dieuKien)
 {
     $itemInfor = [
         "name" => $_GET["name"],
         "email" => $_GET["email"],
         "website" => $_GET["website"],
         "comment" => $_GET["comment"],
         "gender" => $_GET["gender"]
     ];

     array_push($listInfor,$itemInfor);
 }


?>