<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Lab 6</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron bg-primary">
            <h1>Lab 6 Functions</h1>
        </div>
    </div>
    
    <div class="container">

        <?php

        // require functions from ctec_fuctions
        require_once('inc/ctec_functions.php');

        echo "<h2>Function 1:</h2>";

        echo ('<p>This function test to see if the request method is post.</p>');
        var_dump(is_post_request());

        echo "<h2>Function 2:</h2>";

        echo ('<p>This function test to see if the request method is post.</p>');
        var_dump(is_get_request());

        echo "<h2>Function 3:</h2>";

        echo "<p>" .h('This function helps with displaying characters such as the ampersand &') ."</p>";

        echo "This function formats input to be a valid url.";

        echo "<h2>Function 4:</h2>";

        echo "<p> This formats user input to be valid url parameters.";

        $input = "What time is it?";

        $url = "?input =" . u($input);

        echo $url;

        echo "<p>Example: Raw url is also used to encode user input, but instead of using a + symbol to replace spaces. It use's %20.</p>";
        $input = "What time is it?";

        $url = "?input =" . raw_u($input);

        echo $url;

        echo "<h2>Function 5:</h2>";

        echo "<p>is_blank verifies data presence.</p>";

        var_dump(is_blank(''));

        echo "<h2>Function 6:</h2>";

        echo "<p>Checks to see if the data is not blank.";

        echo "<br>";

        var_dump(has_presence('Hello World'));

        echo "</ br>";

        echo "<h2>Function 7:</h2>";

        echo "<p>Test to see if the max amount of characters is being exceeded. Then show the amount of characters over.</p>";
        echo has_length_greater_than('abcd', 3);

        echo "<br>";

        echo "<h2>Function 8:</h2>";

        echo "<p> Returns true of false if it is less than the amount of required chars.";

        echo "<br>";

        echo "<h2>Function 9:</h2>";
        
        echo "<p> Checks to see if the minimum amount of characters was inputted.";
        echo "<br>";

        var_dump(has_length_less_than('asjfdkljfdlkjfld', 5));

        echo "<br>";

        echo "<h2>Function 10:</h2>";

        echo "<p> Returns true or false for the exact amount of characters.";
        echo "<br>";

        var_dump(has_length_exactly('Hello World', 10));

        echo "<br>";

        echo "<h2>Function 11:</h2>";

        echo "<p> Checking to see if the minimum and maximum character limit is set.</p>";

        var_dump(has_length('abcd', ['min' => 3, 'max' => 5]));

        echo "<h2>Function 12:</h2>";

        echo "<p> Checks to see if a character is included in the array. 2 is not included.";

        echo "<br>";

        var_dump(has_inclusion_of( 2, [1,5,3,9,7] ));

        echo "<br>";

        echo "<h2>Function 13:</h2>";

        echo "<p> Checks to see if the character is not included. 10 is not included.</p>";

        var_dump(has_exclusion_of( 10, [1,3,5,7,9] ));

        echo "<br>";

        echo "<h2>Function 14:</h2>";

        echo "<p> Checks to see if something is not in the string. Returns true or false. The .gov is not in the url.";
        echo "<br>";

        var_dump(has_string('nobody@nowhere.com', '.gov'));

        echo "<br>";

        echo "<h2>Function 15:</h2>";

        echo "<p> Works for form validation to see if the correct value is set.</p>";

        var_dump(has_valid_email_format('im_nobody@nowhere.com'));

        echo "<br>";

        echo "<h2>Function 16:</h2>";

        echo "<p> Checks to see if there are any errors after a form is posted. If there are errors they will be displayed.";
        var_dump($errors=array());




        ?>

</div>
</body>
</html>