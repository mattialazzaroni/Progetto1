<?php
// Avvio la sessione
session_start();

$_SESSION['page1'] =1;

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Tabella</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="format-detection" content="telephone=no">
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="icon" href="images/table.png" type="image/png">
        <link rel="stylesheet" href="assets/css/table.css" />
        <script href="assets/js/jquery.min.js"></script>

    </head>

    <body>
        <?php

        // Richiedo i dati dal form di registrazione e li aggiungo ad una variabile e ad una sessione.

        if(isset($_REQUEST['nome'])){
            $nome = $_REQUEST['nome'];
            $_SESSION['nome'] = $nome;
        }

        if(isset($_REQUEST['cognome'])){
            $cognome = $_REQUEST['cognome'];
            $_SESSION['cognome'] = $cognome;
        }

        if(isset($_REQUEST['datadinascita'])){
            $datadinascita = $_REQUEST['datadinascita'];
            $newDatadinascita = date("d.m.Y", strtotime($datadinascita));
            $_SESSION['newDatadinascita'] = $newDatadinascita;
        }

        if(isset($_REQUEST['indirizzo'])){
            $indirizzo = $_REQUEST['indirizzo'];
            $_SESSION['indirizzo'] = $indirizzo;
        }

        if(isset($_REQUEST['civico'])){
            $civico = $_REQUEST['civico'];
            $_SESSION['civico'] = $civico;
        }

        if(isset($_REQUEST['citta'])){
            $citta = $_REQUEST['citta'];
            $_SESSION['citta'] = $citta;
        }   

        if(isset($_REQUEST['nap'])){
            $nap = $_REQUEST['nap'];
            $_SESSION['nap'] = $nap;
        }

        if(isset($_REQUEST['numero'])){
            $numero = $_REQUEST['numero'];
            $_SESSION['numero'] = $numero;
        }      

        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
            $_SESSION['email'] = $email;
        }

        if(isset($_REQUEST['sesso'])){
            $sesso = $_REQUEST['sesso'];
            $_SESSION['sesso'] = $sesso;
        }

        if(isset($_REQUEST['hobby'])){
            $hobby = $_REQUEST['hobby'];
            if($hobby == ""){
                $hobby = "-";
            }
            else if(strpos($hobby, ";") !== false){
                $hobby = str_replace(";",",",$hobby);
            }
            $_SESSION['hobby'] = $hobby;
        }

        if(isset($_REQUEST['professione'])){
            $professione = $_REQUEST['professione'];
            if($professione == ""){
                $professione = "-";
            }
            else if(strpos($professione, ";") !== false){
                $professione = str_replace(";",",",$professione);
            }
            $_SESSION['professione'] = $professione;
        }

        ?>

        <!-- Creo la tabella aggiungendo i valori passati dal form di registrazione --> 

        <center>
            <h1>I TUOI DATI:</h1>
            <table id="table" class="table-fill">
                <tr>
                    <th>Campo</th>
                    <th>Valore</th>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td><?php echo $_SESSION['nome']; ?></td>
                </tr>
                <tr>
                    <td>Cognome</td>
                    <td><?php echo $_SESSION['cognome']; ?></td>
                </tr>
                <tr>
                    <td>Data di nascita</td>
                    <td><?php echo $_SESSION['newDatadinascita']; ?></td>
                </tr>
                <tr>
                    <td>Indirizzo</td>
                    <td><?php echo $_SESSION['indirizzo']; ?></td>
                </tr>
                <tr>
                    <td>No. Civico</td>
                    <td><?php echo $_SESSION['civico']; ?></td>
                </tr>
                <tr>
                    <td>Città</td>
                    <td><?php echo $_SESSION['citta']; ?></td>
                </tr>
                <tr>
                    <td>Nap</td>
                    <td><?php echo $_SESSION['nap']; ?></td>
                </tr>
                <tr>
                    <td>No. Telefono</td>
                    <td><?php echo $_SESSION['numero']; ?></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td>Genere (sesso)</td>
                    <td><?php echo $_SESSION['sesso']; ?></td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td style="word-wrap: break-word"><?php echo $_SESSION['hobby']; ?></td>
                </tr>
                <tr>
                    <td>Professione</td>
                    <td style="word-wrap: break-word"><?php echo $_SESSION['professione']; ?></td>
                </tr>
            </table>

            <!-- Creo un form nascosto contenente i valori da passare nelle pagine del form quando si vuole tornare a correggere -->

            <form method="post" id="correzione" action="registrazione.php">
                <input type="hidden" id="nome" name="nome" value="<?php echo $_SESSION['nome']; ?>">
                <input type="hidden" id="cognome" name="cognome" value="<?php echo $_SESSION['cognome']; ?>">
                <input type="hidden" id="datadinascita" name="datadinascita" value="<?php echo $_SESSION['newDatadinascita']; ?>">
                <input type="hidden" id="indirizzo" name="indirizzo" value="<?php echo $_SESSION['indirizzo']; ?>">
                <input type="hidden" id="civico" name="civico" value="<?php echo $_SESSION['civico']; ?>">
                <input type="hidden" id="citta" name="citta" value="<?php echo $_SESSION['citta']; ?>">
                <input type="hidden" id="nap" name="nap" value="<?php echo $_SESSION['nap']; ?>">
                <input type="hidden" id="numero" name="numero" value="<?php echo $_SESSION['numero']; ?>">
                <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                <input type="hidden" id="sesso" name="sesso" value="<?php echo $_SESSION['sesso']; ?>">
                <input type="hidden" id="hobby" name="hobby" value="<?php echo ($_SESSION['nome']==""?"-":$_SESSION['hobby']) ?>">
                <input type="hidden" id="professione" name="professione" value="<?php echo ($_SESSION['professione']==""?"-":$_SESSION['professione']) ?>">
            </form>

            <div class="12u$">
                <br>
                <input type="submit" onclick="correggi()" value="Correggi" name="correggi"/>
                <a href="registrazione_effettuata.php" id="registra" class="special">Registra</a>
            </div>
        </center>

    </body>

    <script>

        // Funzione che invia il form nascosto e quindi riporta al form di registrazione

        function correggi(){
            document.getElementById("correzione").submit();
        }

        // Imposto come null la cronologia del browser in modo da impedire all'utente di tornare alla pagina di registrazione mediante l'icona del browser

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        }; 

    </script>

</html>