<?php

if (empty($_POST)){
}
else{
    
$dDavid=$_POST["David"];
$cDavid=$_POST["David2"];
}

if ($_POST["test"] == '1') {
if (empty($dDavid) && empty($cDavid)){
    //echo "Vul beide velden in!";
    $aError = "Vul beide velden in!";
    /**echo "<script type='text/javascript'>
    var error = '$aError';
    </script>";**/
}

else if (empty($dDavid)){
    //echo "David2=$cDavid, David is nog leeg!";
    $aError = "David2=$cDavid, David is nog leeg!";
    /**echo "<script type='text/javascript'>
    var error = '$aError';
    </script>";**/
}
else if (empty($cDavid)){
    //echo "David=$dDavid, David2 is nog leeg!";
    $aError = "David=$dDavid, David2 is nog leeg!";
    /**echo "<script type='text/javascript'>
    var error = '$aError';
    </script>";**/
}
else if ($dDavid != NULL && $cDavid != NULL) { 
    $aError = "NULL";
    $eDavid = $cDavid + $dDavid;
    
}
}

?>
<html>
<script type="text/javascript">


var error = "<?php echo $aError ?>";

function myFunction() {
    if (error != "NULL"){
    alert(error);
    };
};

</script>
<body>


<form action="form.php" method="post" onclick="myFunction();">

David:      <input type="text" name="David" id="David">
<br>
David2:     <input type="text" name="David2" id="David2">
<br>
<input type="hidden" name="test" value="1">
<input type="submit" name="submit2" value="Submit" id="1000">

</form>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="form.php" method="post">
<input type="text" name='var' value="<?php echo $eDavid; ?>">
<!--<input type="hidden" name="test2" value="1">-->
<input type="hidden" name="test2" value="1">
<input type="submit" name="submit" value="Submit">
</form>

</body>

</html>