<?php


    // Need to create a datavase called 'learning1', with a  single table called 'tbl_support_staff', with 2 columns, 'support_name' (as varchar with length 128), 'on_call' (as boolean)
    // Create multiple rntries such as:
    /*  support_name     on_call
        Keith Emmerson   1
        Kathleen Haprer  1
        Mark Painter     1
        Chris Emmerson   0 */


    // First we need to establish the connection to the data
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $port = 8889;
        $db = "learning1";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$db);

       


    // Run Select Query

        $sql = "SELECT * FROM tbl_support_staff WHERE on_call=1";

        $result = $conn->query($sql);

    // Look thorough returned data, select a on_call support memeber at random, and add the other to the list

        $rowsReturned = $result->num_rows;
        $selected = rand(0, $rowsReturned - 1);

        $loopCounter = 0;
        $writeCounter = 0;

        while($row = mysqli_fetch_assoc($result)){
            if ($loopCounter == $selected ){
                $rtnObject->supportName = $row["support_name"];
            } else {
                $rtnObject->onCallSupportNames[$writeCounter] = $row["support_name"];
                $writeCounter = $writeCounter + 1;
            }
            $loopCounter = $loopCounter + 1;
        }


    // put the data into a json object

    $rtnJSON = json_encode($rtnObject);

    echo $rtnJSON;

    // close database connection

    mysqli_close($conn);


?>