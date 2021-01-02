<h1>PHP Script to Echo your name</h1>
<p>This is generated on the server side</p>

<link rel="stylesheet" href="main.css">


<?php
    //this is your server side execute php code
    //in php a variable with defined by a $ sign in front of its name

    $submitted_name = $_GET['form_name'];

    if (strlen($submitted_name) > 0 ){

        $str_return = "<p class='return-ok'>Welcome to our test website, you submitted your name as " . $submitted_name . "</p>";

    } else {

        $str_return = "<p class='return-error'>Welcome to our test website, but you need to submit a name</p>";

    }

    echo $str_return


?>


<a href="/">Return to home page</a>