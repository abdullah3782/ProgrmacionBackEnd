<?php
      require_once './0901-functions-structure.php';
      require_once './0902-arrays-print-functions-PHP.php';
      require_once './data.php';
?>

<head>
    <!-- HEAD Code -->
    <?php
        println(myHeader());
    ?>
</head>
<body>
    <!-- WEB Code -->
    <?php
        println(myMenu());
    ?>

    <h1><b>HALLOWEEN CARDS</b></h1><hr>
    
    <div class="container">
        <div class="row">
            <?php
                $img=loadArray(20);
                showImagesHome($img);
            ?>
        </div>
    </div>

    <?php
        println(myFooter());
    ?>
    

</body>

</html>