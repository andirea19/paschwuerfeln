<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-Kurs</title>
    </head>
    <body>
        <main>
        <?php
		//Würfeln bis zum Pasch
            $min = 1;
            $max = 6;
            $counter = 0;
          //zufall
            while(1 == 1)
            {
                //würfeln
                $zahl1 = rand($min, $max);
                $zahl2 = rand($min, $max);
                //vergleichen
                if($zahl1 == $zahl2)
                {
                    break;
                }
                //zählen
                $counter ++;
            }
         echo "Bei Durchgang Nummer '$counter' Pasch.";
     		?>
        </main>
    </body>
</html>
