<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "
    <form method='post' action='Quizconnector.php'>
    Scenario: You are the manager of a customer team, and a client contact you  about a technical issue
        they are experiencing with your product.  <fieldset><legend>The client seems Frustrated and demands a quick resolution. Your team has limited
          
            resource to address the issue, and the client has specific expectation for the solution. How would you handle this situation?

        </legend>
        <ol>
            <li><input type='radio' name='answer' value='A'> A) Immediately provide the client with a quick but partial solution to appease them.</li>
            <li><input type='radio' name='answer' value='B'> B) Acknowledge the client's frustration, offer to escalate the issue to a senior technical team, and set realistic 
                                                                expectations.</li>
            <li><input type='radio' name='answer' value='C'> C) Ignore the client's frustration and offer a standard troubleshooting guide without further communication.</li>
            <li><input type='radio' name='answer' value='D'> D) Apologize and promise to solve the issue without any explanation or timeframe.</li>
        </ol>
        
    </fieldset></p>
        <input type='submit' value='Submit'>
</form>";
       
    ?>
</body>
</html>