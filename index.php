

<ol> <h2>Loops practice to do in Ramadan</h2>
<li>for loop-A for loop is used when you know beforehand how many times you want to execute a block of code.</li>

<li>while loop-loop is used when you want to execute a block of code repeatedly as long as a specified condition is true. </li>
<li>for each loop</li>
<li>do while loop</li></ol>
<br><br><br><br>


<!-- Welcome Note-->

<form action="" method="post">
    
    <input type="text" name="inputFieldt" id="inputFieldt" placeholder="Enter your text here" pattern="[A-za-z/s]+"><br>
    <button type="submit" name="Submittext">Submit</button>


</form>

<?php

      
        if(isset($_POST['Submittext']))
        {
            $inputText = $_POST['inputFieldt'];
            echo "Hello $inputText Welome to the world of programming";

        }

        else
        {
            echo "Please Enter your name and press submit button";
        }

?>
<!-- Welcome Note section end-->

        

        <br><br><br><br>

<form action="" method="post">
    
    <input type="number" name="inputFieldn" id="inputFieldn" placeholder="Please Enter any digit here"><br>
    <button type="submit" name="Submitnumber">Submit</button>


</form>

<?php
function MultiplicationTable($inputDigit){
    $i=1; 
    while($i<=20){
        echo "$inputDigit x $i = ".$inputDigit*$i."<br>";
        $i++;
        

}
}
        //start of the function to get the get the number
        if(isset($_POST['Submitnumber'])) 
        {
            $inputDigit = $_POST['inputFieldn'];
            // echo "<p>$inputDigit</p>";
            MultiplicationTable($inputDigit);
        }
        // else
        // {
        //     echo "please enter the digit in the below field and submit it";
        // }       

?>

<br>
<?php
function printsquarepattern($count){
    for ($i=0; $i<$count; $i++){
        echo "* ";
    }
    
}

$count=$inputDigit;
printsquarepattern($count);
?>