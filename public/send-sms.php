<!-- TO DO
  Trigga SMS
  SMS ska gå ut ett visst datum
  Kunna trigga SMS manuellt också med en knapp -->

<?php
require ('config.php')
  #Öppnar och läser filen
  $handle = fopen("newfile.txt", "r");
  if ($handle) {
      while (($line = fgets($handle)) !== false) {
        $output = (explode(",",$line));
        $sms = array(
          'from' => 'Dittbarn',   // The sender of the SMS
          'to' => trim($output[1]),  // The number that will receive the text message
          'message' => 'Grattis på Mors dag lilla mamma, hälsningar från ditt kära barn ' . $output[0], // The content of the text message
          );
      
          $context = stream_context_create(array(
          'http' => array(
            'ignore_errors' => TRUE,
            'method' => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded",
            'content' => http_build_query($sms),
          )));
      #Set your own username and password in the config.php file, import on line 7
          $response = file_get_contents("https://$username:$password@api.46elks.com/a1/SMS", false, $context);
      
          if (!strstr($http_response_header[0],"200 OK")){
            var_dump ($response);
          }
          else {
            var_dump ($response);
          }
      }
      fclose($handle);
  } else {
      // error opening the file.
  } 

?>