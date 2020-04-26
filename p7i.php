<html>
    <head>
        <meta content="1">
        <title>Digital Clock</title>
        <style type="text/css">
            h4 {text-align: center; color: lime}
           /** div {font-size: xxx-large; padding-top: 200px;}**/
        </style>
    </head>
    <body>
    <div align:center>
        <?php
            echo "<h4>Server Time: ".date('h:i:s A')."</h4>";
        ?>
    </div>
    </body>
</html>