<?php
    define( "TITLE", "The Trump Dump" );
    include("functions.php");

    if( isset( $_POST["fix_submit"] ) ) {
        // call function
        checkForTrumpDump();
    }
?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Confused about what our president is tweeting about at 2am? Try pasting it into here for a more recognizable version.</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste tweet here" class="form-control input-lg" name="trumpdump_tweet"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Lets Do This!</button>
                </form>
            </div>
            
            <?php
            if ( isset( $_POST["fix_submit"] ) ) {
                
                // get first value in array returned by checkForTrumpDump() function
                // store it in a variable
                $trumpdump = checkForTrumpDump()[0];
                
                // get second value in array returned by checkForTrumpDump() function
                // store it in a variable
                $realMeaning = checkForTrumpDump()[1];
                
                // call function
                // pass two arguments in the function
                displayRealMeaning( $trumpdump, $realMeaning );
            }
            ?>
            <hr><p><i>P.S. It's all in good fun, put the tiki torches away! :P</i></p>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>






























