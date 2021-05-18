<<<<<<< HEAD
<?php
    if( isset($_POST['verstuuren']) ){ // de button versturen geklikt doe dan melding en verwijzen naar de bestemde pagina
        ?> 
        <script>
            alert("Gegevens verstuurd");
            location.replace("Verhuurfietsen.html");
        </script>
        <?php

    }

   else if( count($_POST['gekozen']) == 0){ // als de array count gelijk aan nul dan wordt u naar deze pagina verwijzen.
        header("Location: Verhuurfietsen.html");
    }

=======
<?php
    if( isset($_POST['verstuuren']) ){ // de button versturen geklikt doe dan melding en verwijzen naar de bestemde pagina
        ?> 
        <script>
            alert("Gegevens verstuurd");
            location.replace("Verhuurfietsen.html");
        </script>
        <?php

    }

   else if( count($_POST['gekozen']) == 0){ // als de array count gelijk aan nul dan wordt u naar deze pagina verwijzen.
        header("Location: Verhuurfietsen.html");
    }

>>>>>>> c5fa516e1b48c898ae03894323aaedc77ece882b
    ?>