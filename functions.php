<?php
    // FUNCTIONS.PHP

    function checkForTrumpDump() {
        // collect the value from textarea in $_POST 
        // all letters lowercase with strtolower() function
        $trumpdump = strtolower( $_POST["trumpdump_tweet"] );

        // store array of words or phrases to be replaced
        $a = array(
                "immigration",
                "democrats",
                "the democratic party",
                "@foxandfriends",
                "dems",
                "wow",
                "wall",
                "#maga",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

        //  store array of words or phrases to swap out with
        //  keep the same order so that it changes correctly
        $b = array(
                "mexican intake",
                "scary adults",
                "the meanies in suits",
                "my booger buddies",
                "responsible folks",
                "if i knew how to show emotion, i would show it here",
                "lego wall",
                "#howdoesthisworkagain",
                "you won't really care",
                "buddy",
                "mediocre",
                "okay"
            );

        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a variable
        $realMeaning = str_replace( $a, $b, $trumpdump );
        
        // return array of variables so that we can access them globally
        return array($trumpdump, $realMeaning);
    }

    // this function requires two parameters
    /*  the values of the parameters will be the values of the returned array
        in the previous function */
    function displayRealMeaning( $x, $y ) {
        // use ucwords() function to uppercase first letter
        // echo the variable on the screen
        echo "<strong class='text-danger'>Original POTUS Drool</strong><h4>".ucwords($x)."</h4><hr>";

        // echo the translated meaning on the screen
        echo "<strong class='text-success'>Real Meaning</strong><h4>".ucwords($y)."</h4>";
    }

?>


















