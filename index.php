<?php

  

if(isset($_POST["submit"])){ //isset check if buttom is checked
    $guess = $_POST['guess'];
    $counter = $_POST['counter'];
    $counter++;
    $num = $_POST['val'];
    if($num < $guess)
        echo "<p>enter a larger number</p><p>number of tries=".$counter."</p>";
    elseif ($num > $guess)
        echo "<p>enter a smaller number</p><p>number of tries=".$counter."</p>";
    else
        header("Location:guessgamepage2.php?counter=".$counter);


}
else{
    $guess = rand(0,100);
    $counter = 0;
}

    ?>
<html>
    <body>
        <?php $PageName=$_SERVER['PHP_SELF']; ?>
        <form action="<?php echo $PageName; ?>" method="POST">
            <input type="text" name="val">
            <input type="text" name="guess" hidden value="<?php echo $guess; ?>">
            <input type="text" name="counter" hidden value="<?php echo $counter; ?>">
            
            <input type='submit' name='submit'>
</form>
</body>
</html>