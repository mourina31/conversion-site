<!DOCTYPE html>
<html>
<body>
<form action="converter.php" method="post">
    
    <input type="number" name="inputNumber" step="any" value="" />
    <select name="inputFormat">
        <optgroup name="Choose">
        <option value="meter" id="meter">Meter</option>
        <option value="cm" id="cm">Cm</option>
        <option value="foot" id="fot">Feet</option>
        <option value="inches" id="tum">inches</option>
        </optgroup>
    </select>
    </form>

    
    <select name="outputFormat">
        <optgroup name="Choose">
        <option value="meter" id="meter">Meter</option>
        <option value="cm" id="cm">Cm</option>
        <option value="foot" id="ft">Foot</option>
        <option value="inches" id="inches">inches</option>
        </optgroup>
    </select>   
   </form>   

    <input type="submit" name="submitForm" value="Convert!" />
</form>



<?php
$outputNumber=0;
$inputNumber = (float)$_POST['inputNumber'];
$inputFormat = $_POST['inputFormat'];
$outputFormat = $_POST['outputFormat'];

    switch($inputFormat){
    case "meter":

        switch ($outputFormat){
        case "meter": $outputNumber = $inputNumber;break;           //METER TO METER
        case "cm": $outputNumber = $inputNumber*100;break;          //METER TO CM
        case "foot": $outputNumber = $inputNumber*3.2808399;break;  //METER TO FT
        case "inches": $outputNumber = $inputNumber*39.3700787;break;//METER TO INCHES

        }

    break;

    case "cm":

    //ADD CONVERSION SWITCH IN HERE
    break;

    case "foot":

    //ADD CONVERSION SWITCH IN HERE
    break;

    case "inches":

    //ADD CONVERSION SWITCH IN HERE
    break;  
    }


echo $outputNumber;

?>
