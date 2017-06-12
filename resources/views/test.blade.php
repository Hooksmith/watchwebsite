
<?php
ob_start();
ob_implicit_flush();
ob_end_flush();
?>
<html>
    <head>
        <title>Loader Test</title>
        <script type="text/javascript">
            function updateLoader(val) {
                document.getElementById('loader').innerHTML = "Loading:" + val + "%";
            }
        </script>
    </head>
    <body>
        <div id="loader"></div>
        <?php flush();ob_flush(); ?>
        <?php
            for( $i = 1 ; $i <= 100 ; $i++ )
            {
                echo '<script type="text/javascript">updateLoader('.($i).')</script>';
                flush();
                ob_flush();
                usleep(50000);
            }
        ?>
        <?php ob_end_flush(); ?>
        <p>Completed</p>
    </body>
</html>