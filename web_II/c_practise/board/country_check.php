<?php
	$listsize = 3;
	function countrySearch(array $a,$b){
		if(in_array($b,$a)){
			return true;
		}
			return false;
	}
	
	if(isset($_GET["submit"])){
		foreach ($_GET as $value){
			if(strcasecmp($value,"submit")==0){
				echo"submit found";
			}else{
				$ch[] = $value;
			}
		}
		print_r($ch);
		$s = $_GET["search"];
		if (countrySearch($ch,$s)){
			echo "found";
		}else{
			echo "not found";
		}
	}else{
?>
<form action="" method="get">
	<?php for ($i = 1 ; $i <= $listsize ; $i++){ 
		echo "<input type='text' placeholder='enter country $i for list' name='list$i'>";
	}?>
<hr/>
	<input type="text" placeholder="enter country name to search" name="search"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php
	}
?>