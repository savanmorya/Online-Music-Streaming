<?php
//old hindi songs

include("auup.php");

echo "<td width=\"50%\" align=\"center\"><font size=5 color=green font-weight=bold>old hindi Songs</font>
<table border=1px height=\"100%\" width=\"100%\" cellpadding=\"2px\" cellspacing=\"2px\">";

$handle=opendir("./Songs/old hindi");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
	 echo "<tr><td class='aud'> $file &nbsp </td><td class='aud' width='15%'><a class='five' href='./Songs/old hindi/$file'>play</td></a>&nbsp
	 <td class='aud' width='15%'><a class='five' href='audio4a.php?name=$file'>download</td></a></tr>";
	 	}
}

include("audown.php");
?>