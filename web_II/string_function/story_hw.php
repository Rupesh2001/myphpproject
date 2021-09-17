<?php
	if(isset($_GET["submit"])){
		echo '<h1>'.$_GET["txttitle"].'</h1>';
		echo '<p>'.$_GET["story"].'</p>';
		echo '<h4 style="text-align:right"><i>-'.$_GET["txtaurther"].'</i></h4>';
		//no of words
		$n_w=substr_count($_GET["story"]," ")+1;
		echo "no of words : $n_w";
		
		//no of characters
		echo '<br/>no of characters in story : '.strlen($_GET["story"]);
		
		//uppper case
		echo '<br/> uppercase : '.strtoupper($_GET["story"]);
		
		//lower case
		echo '<br/> lowercase : '.strtolower($_GET["story"]);
		
		//ucwords
		echo '<br/> ucwords :'.ucwords($_GET["story"]);
		
		//array conversion
		$a=explode(" ",$_GET["story"]);
		
		echo "<table border='1'><tr>";
		$c=count($a);
		for ($i=0;$i<$c;$i++){
			echo "<td>".$i;
		}
		echo "</tr><tr>";
		for ($i=0;$i<$c;$i++){
			echo "<td>".$a[$i];
		}
		echo "</td></tr></table>";
		
		//search hellow
		$a_hello=strstr($_GET["story"],"hello");
		echo "after hellow : <p>$a_hello</p>";
		
		//suffle
		$s_array=explode(".",$_GET["story"]);
		shuffle($s_array);
		echo "<p> ";
		for ($i=0;$i<count($s_array);$i++){
			echo $s_array[$i];
		}
		echo "</p>";
	}
	echo "<hr/>";
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form method="get" action="">
			<textarea name="story" placeholder="typestory here atleast 150 word" rows="25" cols="200"></textarea>
			<br/>
			<input type="text" name="txttitle" placeholder="enter title of story"/>
			<input type="text" name="txtaurther" placeholder="enter aurther name"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>