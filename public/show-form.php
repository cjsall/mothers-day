<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="base.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
  </head>
  <body>

    <div class="outer-wrapper">
      <div class="container">
        <div class="inner-wrapper">
          <div class="abs-pos-center">
            <svg class="heart" viewBox="0 0 512 512" width="100" title="heart">
            <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" fill="#e2215d"/>
            </svg>
            <div class="heart"></div>
              <h1>Vi hjälper dig att skicka kärlek till mamma ♥️</h1>
              <p><?php echo $_POST["name"]; ?>, din mamma kommer aldrig sakna ett SMS ifrån dig på Mors dag igen! 
              Vi kommer SMSa din mamma på telefonnummer <?php echo $_POST["phonenumber"]; ?> med en personlig hälsning ifrån dig.</p><br><br>
              <h3>Länge sedan mamma hörde från dig? <br>Skicka något redan idag! ⬇️</h3>
              <p>Om du vill skicka lite extra kärlek till mamma redan idag så kan du trycka på knappen nedan. Dagens meddelande är detta:<br></p>
              <span>"Tänkte på dig idag lilla mamma och ville<br> skicka lite kärlek! Kram <?php echo $_POST["name"];?>"</span>
              <a href="http://localhost:8888/mothers-day/send-sms-today.php"><button>Skicka kärlek</button></a>
          </div>
          </form>
        </div>
        </div>
      </div>
    </div>

</body>
</html>

<?php 
#Öppnar och skriver en ny rad i textfilen
  $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
  $txt = $_POST["name"] . "," . $_POST["phonenumber"] . "\n";
  fwrite($myfile, $txt);
  fclose($myfile);

?>