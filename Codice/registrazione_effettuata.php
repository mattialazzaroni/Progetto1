<?php
// Avvio la sessione
session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Registrazione Effettuata</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="icon" href="images/over.png" type="image/png">
        <link rel="stylesheet" href="assets/css/table.css" />

        <script href="assets/js/jquery.min.js">
        </script>

    </head>


    <body onkeydown="return (event.keyCode != 116)">
        <h1 style='text-align:center;'>REGISTRAZIONI EFFETTUATE OGGI:</h1>
        <?php

        // Quando viene impostata una sessione creo la cartella 'Registrazioni' se non esiste e i 2 files ".csv" se non esistono

        if(!empty($_SESSION['page1'])){
            date_default_timezone_set('Europe/Zurich');
            $oggiFull = date('Y-m-d H:i:s', time());

            $dir = getcwd();
            $newDir = str_replace('Codice','',$dir);
            $folder = $newDir."Registrazioni";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $fileTutte = $folder . "/Registrazioni_tutte.csv"; 
            $dati = "DataEOra;Nome;Cognome;Datadinascita;Indirizzo;Civico;Citta;Nap;Numero;Email;Sesso;Hobby;Professione";
            if(!file_exists($fileTutte)){
                $registrazioniTutte = fopen($fileTutte, "w");
                file_put_contents($fileTutte, $dati, FILE_APPEND | LOCK_EX);
                fclose($registrazioniTutte);
            }

            $form_data = "\n".$oggiFull.";".$_SESSION['nome'].";".$_SESSION['cognome'].";".$_SESSION['newDatadinascita'].";".$_SESSION['indirizzo'].";".$_SESSION['civico'].";".$_SESSION['citta'].";".$_SESSION['nap'].";".$_SESSION['numero'].";".$_SESSION['email'].";".$_SESSION['sesso'].";".$_SESSION['hobby'].";".$_SESSION['professione'];

            file_put_contents($fileTutte, $form_data, FILE_APPEND | LOCK_EX);


            $oggi = date('Y-m-d');
            $fileGiorno = $folder . "/Registrazioni_" . $oggi . ".csv";
            $datiGiorno = "DataEOra;Nome;Cognome;Datadinascita;Indirizzo;Civico;Citta;Nap;Numero;Email;Sesso;Hobby;Professione";
            if(!file_exists($fileGiorno)){
                $registrazioniGiorno = fopen($fileGiorno, "w");
                file_put_contents($fileGiorno, $datiGiorno, FILE_APPEND | LOCK_EX);
                fclose($registrazioniGiorno);
            }

            file_put_contents($fileGiorno, $form_data, FILE_APPEND | LOCK_EX);

            // Creo una tabella contenente i dati passati dalla pagina di controllo

            $noHeader = substr(file_get_contents($fileGiorno), strlen($datiGiorno));
            $allRow = explode("\n", $noHeader);
            unset($allRow[0]);
            $fieldsName = array("Data e ora","Nome","Cognome","Datadinascita","Indirizzo","Civico","Città","Nap","Numero","Email","Sesso","Hobby","Professione");
            $allRow = array_reverse($allRow);
            foreach($allRow as $oneRow){
                echo "<table id='table' class='table-fill'>";
                echo "<tr>";
                echo "<th>Campo</th>";
                echo "<th>Valore</th>";
                echo "</tr>";

                $fields = explode(";", $oneRow);
                for($i = 0; $i < count($fields); $i++){
                    echo "<tr>";
                    echo "<td>".$fieldsName[$i]."</td>";
                    echo "<td>".$fields[$i]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<br>";

            }
            unset($_SESSION['page1']);
        }else{
            echo '<script> window.location.href = "registrazione.php"; </script>';
        }

        // Termino la sessione

        session_destroy();

        ?>
        <center>
            <a href="index.html" class="special">Home</a>
        </center>

    </body>

    <script>

        // Funzione che riporta l'utente alla pagina iniziale

        function torna(){
            var wl = window.location;
            wl.replace("registrazione_effettuata.php", "index.html");
            window.location = wl;
        }

        // Imposto come null la cronologia del browser in modo da impedire all'utente di tornare alla pagina di registrazione mediante l'icona del browser

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        }; 

    </script>

</html>