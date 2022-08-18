<!DOCTYPE html>
<html>
<body>

<?php
$name1= "Kusal Karki";
$attendance= 20;
$hygiene= 70;
$rating= 3;

function evaluate($name, $attendance, $hygiene, $rating)
{
	if($attendance<80)
    {
    	echo $name . "You are fired from Rojan Kirana Pasal!!!";
    }
    elseif($hygiene<50)
    {
    	echo $name . "You are fired from Rojan Kirana Pasal!!!";
    }
    elseif($rating<3)
    {
    	echo $name . "You are fired from Rojan Kirana Pasal!!!";
    }
    else
    {
    	echo "You are not fired for now";
    }
}
evaluate($name1, $attendance1, $hygiene1, $rating1);
?> 

</body>
</html>