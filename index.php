<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>FizzBuzz</title>
    </head>
    <body>
        <div id="content">
            <p id="appName">FizzBuzz</p>
            <h1>Author: Tony Flemings</h1>
            <h1>Design Inspiration: Todd Whittaker</h1>
            <p>This program will solve the classic "FizzBuzz" problem posed in
               many programming interviews. The idea is to examine all of the
               numbers between <span class="italic">start</span> and 
               <span class="italic">stop</span>. If the number is divisible
               by 3 then print "Fizz". If the number is divisible by 5 then
               print "Buzz". If it is divisible by both then print "FizzBuzz".
               Otherwise, print the number.</p>
            <fieldset>
                <legend>Input Your Data</legend>
                <form action="fizzbuzz.php" method="post">
                    <label>Starting Number:</label>
                        <input id="start" name="start"/>
                    <label>Stopping Number:</label>
                        <input id="stop" name="stop"/><br />
                    <input type="submit" id="submit" name="submit" value="Submit"/>
                </form>
            </fieldset> 
        </div>
    </body>
</html>
