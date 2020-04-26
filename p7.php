<html>
    <head>
        <meta http-equiv="refresh" content="1">
        <title>Digital Clock</title>
        <style type="text/css">
            h1 {text-align: center;}
            div {font-size: xxx-large; padding-top: 12%;}
            p {color: #888888;}
        </style>
    </head>
    <body>
        <p align="right">
            <script type="text/javascript">
                var d = new Date();
                document.write(d.getTime()+" -> "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds()+":"+d.getMilliseconds());
            </script>
        </p>
    <div align="center">
        <?php
            echo "<h1>".date('h:i:s A')."</h1>";
        ?>
    </div>
    </body>
</html>