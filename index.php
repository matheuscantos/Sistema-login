<?php echo "Hello word!"; ?>

<!DOCTYPE html>

    <head></head>

    <body>


    <script>
        if(typeof(Storage) !=="undefined") {
            alert('Acept');
        }
        else {
            alert('No can');
        }
    </script>

    <script>
        localStorage.Myname = "matheus a. b. c.";
    </script>

    <script>
        alert(localStorage.Myname);
    </script>

    </body>

</html>