<!DOCTYPE html>
<html>
<head>
    <title>Website 1</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Welcome to the Website</h1>
    
    <div id="timestamp">

        This page was generated at 

        <?php 
        
            echo time();
        
        ?>

         seconds past the unix epoch

    </div>

    <h2>Do you have a name?</h2>
    <p>If so please enter it below</p>

    <form action="name.php">
        <label for="form_name">Please enter your name:</label>
        <input type="text" id="form_name" name="form_name"><br>
        <br>
        <button type="submit">Submit</button>
    </form>

    <h2>Would you link support from our on call support team?</h2>
    <div class="button" id="get-support-name">Click for support</div>
    <div id="support-box">
        <h4>Welcome to our support team</h4>
        <p>You have being assigned <span id='support-name'></name></p>
        <p>How can we assist you?</p>
        <input type="text" id='support-convo'name='support-convo'>
        <h6>Other support people online include: <span id='other-support-names'></span></h6>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="main.js"></script>

</body>
</html>