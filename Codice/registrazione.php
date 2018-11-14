<!DOCTYPE HTML>
<html>
    <head>
        <title>Registrazione</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="icon" href="images/reg.png" type="image/png">
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="is-loading">

        <!-- Wrapper -->
        <div>

            <!-- Header -->
            <header id="header">
                <a class="logo">Registrazione</a>
            </header>

            <!-- Main -->
            <div id="main">

                <!-- Post -->
                <section class="post">
                    <header class="major">
                        <h1>Comincia la tua registrazione</h1>
                    </header>

                    <label>(*) Campi obbligatori</label>

                    <!-- Form contenente gli inupt-->

                    <form method="post" action="tabella.php" class="alt" name="form" id="form" novalidate>
                        <div class="row uniform">               
                            <div class="12u$" id="1">
                                <label for="nome">Nome *</label>
                                <input class="isEmpty" type="text" name="nome" id="nome" placeholder="Inserisci il tuo nome"  />
                                <p style="display:none;" class="errNome"></p>
                            </div>

                            <div class="12u$" id="2">
                                <label for="cognome">Cognome *</label>
                                <input class="isEmpty" type="text" name="cognome" id="cognome" placeholder="Inserisci il tuo cognome" />
                                <p style="display:none;" class="errCognome"></p>
                            </div>

                            <div class="12u$" id="3">
                                <label for="datadinascita">Data di nascita *</label>
                                <input class="isEmpty" id="datadinascita" name="datadinascita" placeholder="Inserisci la tua data di nascita" type="text" onfocus="this.type='date'; this.setAttribute('onfocus','');this.blur();this.focus();" />
                                <p style="display:none;" class="errDatadinascita"></p>
                            </div>

                            <div class="12u$" id="4">
                                <label for="indirizzo">Indirizzo *</label>
                                <input class="isEmpty" type="text" name="indirizzo" id="indirizzo" placeholder="Inserisci il tuo indirizzo">
                                <p class="errIndirizzo"></p>
                            </div>

                            <div class="12u$" id="5">
                                <label for="demo-civico">No. Civico *</label>
                                <input class="isEmpty" type="text" name="civico" id="civico" placeholder="Inserisci il tuo numero civico"/>
                                <p style="display:none;" class="errCivico"></p>
                            </div>

                            <div class="12u$" id="6">
                                <label for="citta">Città *</label>
                                <input class="isEmpty" type="text" name="citta" id="citta" placeholder="Inserisci la tua città"/>
                                <p style="display:none;" class="errCitta"></p>
                            </div>

                            <div class="12u$" id="7">
                                <label for="nap">Nap *</label>
                                <input class="isEmpty" type="text" name="nap" id="nap" min="1" placeholder="Inserisci il tuo NAP"/>
                                <p style="display:none;" class="errNap"></p>
                            </div>

                            <div class="12u$" id="8">
                                <label for="numero">No. Telefono *</label>
                                <input class="isEmpty" type="text" name="numero" id="numero" placeholder="Inserisci il tuo numero di telefono"/>
                                <p style="display:none;" class="errNumero"></p>
                            </div>

                            <div class="12u$" id="9">
                                <label for="email">Email *</label>
                                <input class="isEmpty" type="email" name="email" id="email" placeholder="Inserisci la tua email"/>
                                <p style="display:none;" class="errEmail"></p>
                            </div>

                            <div class="12u$" id="10">
                                <label for="sesso">Sesso *</label>
                                <div class="sessoDiv">    
                                    <select class="isEmpty" name="sesso" id="sesso">
                                        <option id="gray" value="first-child" name="first-child" selected disabled>Seleziona il tuo sesso</option>
                                        <option value="M" class="M" id="1" >M</option>
                                        <option class="F" value="F" id="2">F</option>
                                    </select>
                                    <p style="display:none;" class="errSesso"></p>
                                </div>
                            </div>
                            <div class="12u$">
                                <label for="hobby">Hobby</label>
                                <textarea name="hobby" id="hobby" placeholder="Inserisci il tuo hobby" rows="8" maxlength="500"></textarea>
                            </div>
                            <div class="12u$">
                                <label for="professione">Professione</label>
                                <textarea name="professione" id="professione" placeholder="Inserisci la tua professione" rows="8" maxlength="500" ></textarea>
                            </div>

                            <!-- Break -->
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="reset" value="Cancella" id="cancella"/>
                                    </li>
                                    <li><input type="submit" value="Avanti" class="special" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <hr/>
                </section>
            </div>

            <!-- Copyright -->
            <div id="copyright">
                <ul><li>&copy; Mattia Lazzaroni</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
            </div>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript"> 

            function getToday(){
                var d = new Date().toISOString().slice(0,10); 
                return d; 
            }

            function changeMe(sel){
                sel.style.color = "#000";              
            }

            $("input").on("mouseup", function(e){
                $(this).removeClass("isValid");
                $(this).removeClass("isNotValid");
            });

            // Validazioni di tutti i campi

            $("#nome").keyup(function () {
                var text = this.value;
                var regex = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð \-']*$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else if(text.length > 50){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(".errNome").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errNome").css("display","none");
                } 
            });

            $("#cognome").keyup(function () {
                var text = this.value;
                var regex = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð \-']*$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 50){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errCognome").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errCognome").css("display","none");
                }
            });

            function todayMonth() {
                var d = new Date();
                var m = d.getMonth();
                m = m + 1;
                if(m <= 9){
                    m = "0" + m;
                }
                return m;
            }

            function todayDay() {
                var d = new Date();
                var m = d.getDate();
                if(m <= 9){
                    m = "0" + m;
                }
                return m;
            }

            $("#datadinascita").on("change keyup", function () {
                var dataInserita = document.getElementById('datadinascita').value;
                var anno = dataInserita.substring(0,4);
                var mese = dataInserita.substring(5,7);
                var giorno = dataInserita.substring(8,11);

                if(dataInserita.charAt(4) != "-"){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty"); 
                }
                else if(anno == 2018){
                    if(mese > todayMonth()){
                        $(this).css("border-color", "#ee0000");
                        $(this).removeClass("isValid");
                        $(this).addClass("isNotValid");
                        $(this).removeClass("isEmpty");
                    }
                    else if(mese < todayMonth()){
                        $(this).css("border-color", "#00ee00");
                        $(this).removeClass("isNotValid");
                        $(this).addClass("isValid");
                        $(this).removeClass("isEmpty");
                        $(".errDatadinascita").css("display","none");
                    }
                    else if(mese == todayMonth()){
                        if(giorno > todayDay()){
                            $(this).css("border-color", "#ee0000");
                            $(this).removeClass("isValid");
                            $(this).addClass("isNotValid");
                            $(this).removeClass("isEmpty");
                        }
                        else if(giorno < todayDay()){
                            $(this).css("border-color", "#00ee00");
                            $(this).removeClass("isNotValid");
                            $(this).addClass("isValid");
                            $(this).removeClass("isEmpty");
                            $(".errDatadinascita").css("display","none");
                        }
                        else if(giorno == todayDay()){
                            $(this).css("border-color", "#00ee00");
                            $(this).removeClass("isNotValid");
                            $(this).addClass("isValid");
                            $(this).removeClass("isEmpty");
                            $(".errDatadinascita").css("display","none");
                        }
                    }
                }
                else if (anno > 2018) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if (anno < 1918){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if (anno == 1918){
                    if(mese > todayMonth()){
                        $(this).css("border-color", "#00ee00");
                        $(this).removeClass("isNotValid");
                        $(this).addClass("isValid");
                        $(this).removeClass("isEmpty");
                        $(".errDatadinascita").css("display","none");
                    }
                    else if(mese < todayMonth()){
                        $(this).css("border-color", "#ee0000");
                        $(this).removeClass("isValid");
                        $(this).addClass("isNotValid");
                        $(this).removeClass("isEmpty");
                    }
                    else if(mese == todayMonth()){
                        if(giorno > todayDay()){
                            $(this).css("border-color", "#00ee00");
                            $(this).removeClass("isNotValid");
                            $(this).addClass("isValid");
                            $(this).removeClass("isEmpty");
                            $(".errDatadinascita").css("display","none");
                        }
                        else if(giorno < todayDay()){
                            $(this).css("border-color", "#ee0000");
                            $(this).removeClass("isValid");
                            $(this).addClass("isNotValid");
                            $(this).removeClass("isEmpty");
                        }
                        else if(giorno == todayDay()){
                            $(this).css("border-color", "#ee0000");
                            $(this).removeClass("isValid");
                            $(this).addClass("isNotValid");
                            $(this).removeClass("isEmpty");
                        }
                    }
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errDatadinascita").css("display","none");
                }
            });

            $("#indirizzo").keyup(function () {
                var text = this.value;
                var regex = /^[a-zA-Z\u0080-\u024F\s\/\-\)\(\`\.\"\']*$/;

                if (!regex.test(text) || text.length < 5) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 50){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errIndirizzo").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errIndirizzo").css("display","none");
                }
            });

            $("#civico").keyup(function () {
                var text = this.value;
                var regex = /^[\d]{1,3}(([\d]{1})|([a-zA-Z]{0,1}))$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 4){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errCivico").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errCivico").css("display","none");
                }
            });

            $("#citta").keyup(function () {
                var text = this.value;
                var regex = /^(?:[a-zA-Z]+(?:[.'\-,])?\s?)+$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 50){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errCitta").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errCitta").css("display","none");
                }
            });

            $("#email").keyup(function () {
                var text = this.value;
                var regex = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 50){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errEmail").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errEmail").css("display","none");
                }
            });

            $("#nap").keyup(function () {
                var text = this.value;
                var regex = /^[0-9]+$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length > 5){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errNap").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errNap").css("display","none");
                }
            });

            $("#numero").keyup(function () {
                var text = this.value;
                var regex = /^((\(?\+?[0-9\s]*\)?)?[0-9_\- \(\)\s])$/;

                if (!regex.test(text)) {
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else if(text.length >= 20){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isEmpty");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                }
                else if(text.length < 5){
                    $(this).css("border-color", "#ee0000");
                    $(this).removeClass("isValid");
                    $(this).addClass("isNotValid");
                    $(this).removeClass("isEmpty");
                }
                else{
                    $(this).css("border-color", "#00ee00");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isValid");
                    $(this).removeClass("isEmpty");
                    $(".errNumero").css("display","none");
                }

                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                    $(this).removeClass("isValid");
                    $(this).removeClass("isNotValid");
                    $(this).addClass("isEmpty");
                    $(".errNumero").css("display","none");
                }
            });

            $("#sesso").on('change', function () {
                $(this).css("border-color", "#00ee00");
                $(this).addClass("isValid");
                $(".errSesso").css("display","none");
                $(this).removeClass("isEmpty");
                $(this).removeClass("isNotValid");
                $(this).css("color","black");
            });

            $("#hobby").keyup(function () {                    
                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                }
                else{
                    $(this).css("border-color", "#00ee00"); 
                    $(this).addClass("isValid");
                }
            });

            $("#professione").keyup(function () {                    
                if(!$(this).val()){
                    $(this).css("border-color", "#eeeeee");
                }
                else{
                    $(this).css("border-color", "#00ee00");  
                    $(this).addClass("isValid");
                }
            }); 

            // Azzera tutti i valori quando si clicca il bottone 'cancella'

            $("#cancella").click(function () { 
                $("#nome").val("");
                $("#nome").css("border-color", "#eee");
                $("#nome").addClass("isEmpty");
                $("#nome").removeClass("isValid");
                $("#nome").removeClass("isNotValid");
                $(".errNome").css("display","none");

                $("#cognome").val("");
                $("#cognome").css("border-color", "#eee");
                $("#cognome").addClass("isEmpty");
                $("#cognome").removeClass("isValid");
                $("#cognome").removeClass("isNotValid");
                $(".errCognome").css("display","none");

                $("#datadinascita").val("");
                $("#datadinascita").css("border-color", "#eee");
                $("#datadinascita").addClass("isEmpty");
                $("#datadinascita").removeClass("isValid");
                $("#datadinascita").removeClass("isNotValid");
                $(".errDatadinascita").css("display","none");

                $("#indirizzo").val("");
                $("#indirizzo").css("border-color", "#eee");
                $("#indirizzo").addClass("isEmpty");
                $("#indirizzo").removeClass("isValid");
                $("#indirizzo").removeClass("isNotValid");
                $(".errIndirizzo").css("display","none");

                $("#civico").val("");
                $("#civico").css("border-color", "#eee");
                $("#civico").addClass("isEmpty");
                $("#civico").removeClass("isValid");
                $("#civico").removeClass("isNotValid");
                $(".errCivico").css("display","none");

                $("#citta").val("");
                $("#citta").css("border-color", "#eee");
                $("#citta").addClass("isEmpty");
                $("#citta").removeClass("isValid");
                $("#citta").removeClass("isNotValid");
                $(".errCitta").css("display","none");

                $("#nap").val("");
                $("#nap").css("border-color", "#eee");
                $("#nap").addClass("isEmpty");
                $("#nap").removeClass("isValid");
                $("#nap").removeClass("isNotValid");
                $(".errNap").css("display","none");

                $("#numero").val("");
                $("#numero").css("border-color", "#eee");
                $("#numero").addClass("isEmpty");
                $("#numero").removeClass("isValid");
                $("#numero").removeClass("isNotValid");
                $(".errNumero").css("display","none");

                $("#email").val("");
                $("#email").css("border-color", "#eee");
                $("#email").addClass("isEmpty");
                $("#email").removeClass("isValid");
                $("#email").removeClass("isNotValid");
                $(".errEmail").css("display","none");

                $("#sesso").val("");
                $("#sesso").css("border-color", "#eee");
                $("#sesso").addClass("isEmpty");
                $("#sesso").removeClass("isValid");
                $("#sesso").css("color", "#8e8e8e");
                $("#sesso").removeClass("isNotValid");
                $(".errSesso").css("display","none");

                $("#hobby").val("");
                $("#hobby").css("border-color", "#eee");

                $("#professione").val("");
                $("#professione").css("border-color", "#eee");

                window.scrollTo(0, 0);
            });

            // All'invio del form stampo gli eventuali errori

            $("#form").submit(function () { 

                var ddn = document.getElementById('datadinascita').value;

                if($(this).find(".isNotValid").length > 0 || $(this).find(".isEmpty").length > 0){
                    window.scrollTo(0, 0);
                    if($("#1").find(".isNotValid").length > 0){
                        $(".errNome").html("ERRORE: Il valore inserito non è valido!");
                        $(".errNome").css("display","block");
                        $(".errNome").css("color","red");
                        $(".errNome").css("font-family", "Source Sans Pro");
                    }
                    else if($("#1").find(".isEmpty").length > 0){
                        $(".errNome").html("ERRORE: Devi inserire un valore!");
                        $(".errNome").css("display","block");
                        $(".errNome").css("color","red");
                        $(".errNome").css("font-family", "Source Sans Pro");
                        $("#nome").css("border-color", "#ee0000");
                    }

                    if($("#2").find(".isNotValid").length > 0){
                        $(".errCognome").html("ERRORE: Il valore inserito non è valido!");
                        $(".errCognome").css("display","block");
                        $(".errCognome").css("color","red");
                        $(".errCognome").css("font-family", "Source Sans Pro");
                    }
                    else if($("#2").find(".isEmpty").length > 0){
                        $(".errCognome").html("ERRORE: Devi inserire un valore!");
                        $(".errCognome").css("display","block");
                        $(".errCognome").css("color","red");
                        $(".errCognome").css("font-family", "Source Sans Pro");
                        $("#cognome").css("border-color", "#ee0000");
                    }

                    if(ddn == ""){
                        $(".errDatadinascita").html("ERRORE: Il valore inserito non è valido!");
                        $(".errDatadinascita").css("display","block");
                        $(".errDatadinascita").css("color","red");
                        $(".errDatadinascita").css("font-family", "Source Sans Pro");
                    }

                    if($("#3").find(".isNotValid").length > 0){
                        $(".errDatadinascita").html("ERRORE: Il valore inserito non è valido!");
                        $(".errDatadinascita").css("display","block");
                        $(".errDatadinascita").css("color","red");
                        $(".errDatadinascita").css("font-family", "Source Sans Pro");
                    }
                    else if($("#3").find(".isEmpty").length > 0){
                        $(".errDatadinascita").html("ERRORE: Devi inserire un valore!");
                        $(".errDatadinascita").css("display","block");
                        $(".errDatadinascita").css("color","red");
                        $(".errDatadinascita").css("font-family", "Source Sans Pro");
                        $("#datadinascita").css("border-color", "#ee0000");
                    }

                    if($("#4").find(".isNotValid").length > 0){
                        $(".errIndirizzo").html("ERRORE: Il valore inserito non è valido!");
                        $(".errIndirizzo").css("display","block");
                        $(".errIndirizzo").css("color","red");
                        $(".errIndirizzo").css("font-family", "Source Sans Pro");
                    }
                    else if($("#4").find(".isEmpty").length > 0){
                        $(".errIndirizzo").html("ERRORE: Devi inserire un valore!");
                        $(".errIndirizzo").css("display","block");
                        $(".errIndirizzo").css("color","red");
                        $(".errIndirizzo").css("font-family", "Source Sans Pro");
                        $("#indirizzo").css("border-color", "#ee0000");
                    }

                    if($("#5").find(".isNotValid").length > 0){
                        $(".errCivico").html("ERRORE: Il valore inserito non è valido!");
                        $(".errCivico").css("display","block");
                        $(".errCivico").css("color","red");
                        $(".errCivico").css("font-family", "Source Sans Pro");
                    }
                    else if($("#5").find(".isEmpty").length > 0){
                        $(".errCivico").html("ERRORE: Devi inserire un valore!");
                        $(".errCivico").css("display","block");
                        $(".errCivico").css("color","red");
                        $(".errCivico").css("font-family", "Source Sans Pro");
                        $("#civico").css("border-color", "#ee0000");
                    }

                    if($("#6").find(".isNotValid").length > 0){
                        $(".errCitta").html("ERRORE: Il valore inserito non è valido!");
                        $(".errCitta").css("display","block");
                        $(".errCitta").css("color","red");
                        $(".errCitta").css("font-family", "Source Sans Pro");
                    }
                    else if($("#6").find(".isEmpty").length > 0){
                        $(".errCitta").html("ERRORE: Devi inserire un valore!");
                        $(".errCitta").css("display","block");
                        $(".errCitta").css("color","red");
                        $(".errCitta").css("font-family", "Source Sans Pro");
                        $("#citta").css("border-color", "#ee0000");
                    }

                    if($("#7").find(".isNotValid").length > 0){
                        $(".errNap").html("ERRORE: Il valore inserito non è valido!");
                        $(".errNap").css("display","block");
                        $(".errNap").css("color","red");
                        $(".errNap").css("font-family", "Source Sans Pro");
                    }
                    else if($("#7").find(".isEmpty").length > 0){
                        $(".errNap").html("ERRORE: Devi inserire un valore!");
                        $(".errNap").css("display","block");
                        $(".errNap").css("color","red");
                        $(".errNap").css("font-family", "Source Sans Pro");
                        $("#nap").css("border-color", "#ee0000");
                    }

                    if($("#8").find(".isNotValid").length > 0){
                        $(".errNumero").html("ERRORE: Il valore inserito non è valido!");
                        $(".errNumero").css("display","block");
                        $(".errNumero").css("color","red");
                        $(".errNumero").css("font-family", "Source Sans Pro");
                    }
                    else if($("#8").find(".isEmpty").length > 0){
                        $(".errNumero").html("ERRORE: Devi inserire un valore!");
                        $(".errNumero").css("display","block");
                        $(".errNumero").css("color","red");
                        $(".errNumero").css("font-family", "Source Sans Pro");
                        $("#numero").css("border-color", "#ee0000");
                    }

                    if($("#9").find(".isNotValid").length > 0){
                        $(".errEmail").html("ERRORE: Il valore inserito non è valido!");
                        $(".errEmail").css("display","block");
                        $(".errEmail").css("color","red");
                        $(".errEmail").css("font-family", "Source Sans Pro");
                    }
                    else if($("#9").find(".isEmpty").length > 0){
                        $(".errEmail").html("ERRORE: Devi inserire un valore!");
                        $(".errEmail").css("display","block");
                        $(".errEmail").css("color","red");
                        $(".errEmail").css("font-family", "Source Sans Pro");
                        $("#email").css("border-color", "#ee0000");
                    }

                    if($("#10").find(".isEmpty").length > 0){
                        $(".errSesso").html("ERRORE: Devi selezionare un valore!");
                        $(".errSesso").css("display","block");
                        $(".errSesso").css("color","red");
                        $(".errSesso").css("font-family", "Source Sans Pro");
                        $("#sesso").css("border-color", "#ee0000");
                    }

                    return false;
                }
            });

            $(".isValid").blur(function(){
                $(this).css("border-color","#0e0");
            });

            $(".isValid").focus(function(){
                $(this).css("border-color","#0e0");
            });

            $(".isNotValid").blur(function(){
                $(this).css("border-color","#e00");
            });

            $(".isNotValid").focus(function(){
                $(this).css("border-color","#e00");
            });

            // Reimposto tutti i campi come validi quando torno dalla tabella di controllo al form di registrazione

            var oldNome = '<?php echo isset($_POST['nome'])?$_POST['nome']:""?>';
            if(oldNome == ""){
                $("#nome").val("");
            }
            else{
                $("#nome").val(oldNome);
                $("#nome").css("border-color","#0e0");  
                $("#nome").removeClass("isEmpty");
                $("#nome").addClass("isValid");
            }

            var oldCognome = '<?php echo isset($_POST['cognome'])?$_POST['cognome']:""?>';
            if(oldCognome == ""){
                $("#cognome").val("");
            }
            else{
                $("#cognome").val(oldCognome);
                $("#cognome").css("border-color","#0e0");
                $("#cognome").removeClass("isEmpty");
                $("#cognome").addClass("isValid");
            }


            var oldDatadinascita = '<?php echo isset($_POST['datadinascita'])?$_POST['datadinascita']:""?>';
            var d=new Date(oldDatadinascita.split("-").reverse().join("-"));
            var dd=d.getDate();
            var mm=d.getMonth()+1;
            var yyyy=d.getFullYear();
            var newDatadinascita=dd+"."+mm+"."+yyyy;
            if(oldDatadinascita == ""){
                $("#datadinascita").val("");
            }
            else{
                $("#datadinascita").val(newDatadinascita);
                $("#datadinascita").css("border-color","#0e0");  
                $("#datadinascita").removeClass("isEmpty");
                $("#datadinascita").addClass("isValid");
            }

            var oldIndirizzo = '<?php echo isset($_POST['indirizzo'])?$_POST['indirizzo']:""?>';
            if(oldIndirizzo == ""){
                $("#indirizzo").val("");
            }
            else{
                $("#indirizzo").val(oldIndirizzo);
                $("#indirizzo").css("border-color","#0e0"); 
                $("#indirizzo").removeClass("isEmpty");
                $("#indirizzo").addClass("isValid");
            }

            var oldCivico = '<?php echo isset($_POST['civico'])?$_POST['civico']:""?>';
            if(oldCivico == ""){
                $("#civico").val("");
            }
            else{
                $("#civico").val(oldCivico);
                $("#civico").css("border-color","#0e0"); 
                $("#civico").removeClass("isEmpty");
                $("#civico").addClass("isValid");
            }

            var oldCitta = '<?php echo isset($_POST['citta'])?$_POST['citta']:""?>';
            if(oldCitta == ""){
                $("#citta").val("");
            }
            else{
                $("#citta").val(oldCitta);
                $("#citta").css("border-color","#0e0");  
                $("#citta").removeClass("isEmpty");
                $("#citta").addClass("isValid");
            }

            var oldNap = '<?php echo isset($_POST['nap'])?$_POST['nap']:""?>';
            if(oldNap == ""){
                $("#nap").val("");
            }
            else{
                $("#nap").val(oldNap);
                $("#nap").css("border-color","#0e0");  
                $("#nap").removeClass("isEmpty");
                $("#nap").addClass("isValid");
            }

            var oldNumero = '<?php echo isset($_POST['numero'])?$_POST['numero']:""?>';
            if(oldNumero == ""){
                $("#numero").val("");
            }
            else{
                $("#numero").val(oldNumero);
                $("#numero").css("border-color","#0e0"); 
                $("#numero").removeClass("isEmpty");
                $("#numero").addClass("isValid");
            }

            var oldEmail = '<?php echo isset($_POST['email'])?$_POST['email']:""?>';
            if(oldEmail == ""){
                $("#email").val("");
            }
            else{
                $("#email").val(oldEmail);
                $("#email").css("border-color","#0e0");  
                $("#email").removeClass("isEmpty");
                $("#email").addClass("isValid");
            }

            var oldSesso = '<?php echo isset($_POST['sesso'])?$_POST['sesso']:""?>';
            if (oldSesso == "M"){
                $("div.sessoDiv select").val("M");
                $("div.sessoDiv select").css("color","black");
                $("#sesso").css("border-color","#0e0");
                $("#sesso").removeClass("isEmpty");
                $("#sesso").addClass("isValid");
            }
            else if (oldSesso == "F"){
                $("div.id_100 select").val("F");
                $("div.id_100 select").css("color","black");
                $("#sesso").css("border-color","#0e0");
                $("#sesso").removeClass("isEmpty");
                $("#sesso").addClass("isValid");
            }

            var oldHobby = '<?php echo isset($_POST['hobby'])?$_POST['hobby']:""?>';
            if(oldHobby == "-" || oldHobby == ""){
                $("textarea#hobby").val("");
            }
            else{
                $("textarea#hobby").val(oldHobby);
                $("#hobby").css("border-color","#0e0");  
            }

            var oldProfessione = '<?php echo isset($_POST['professione'])?$_POST['professione']:""?>';
            if(oldProfessione == "-" || oldProfessione == ""){
                $("textarea#professione").val("");
            }
            else{
                $("textarea#professione").val(oldProfessione);
                $("#professione").css("border-color","#0e0");  
            }

        </script>
    </body>
</html>