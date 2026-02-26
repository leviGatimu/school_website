<form method="post">
<label for="">Number</label><input type="text" name="num">
<button type="submit" value="submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    if($num == ""){
        echo "Please enter a number.";
    }
    for($i = 0; $i <= 10; $i++){
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    }
}





?>