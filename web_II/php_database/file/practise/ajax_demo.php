<html>
	<head>
		<title></title>
		<script>
			function display(control){
				data=control.value;
				if (data.length==0){
					control.nextSibling.innerHTML="enter somthing";
				}
				else{
					xhr= new XMLHttpRequest();
					xhr.onreadystatechange = function (){
						if (this.readyState == 4 && this.status == 200){
							control.nextSibling.innerHTML = this.responseText;
						}
					};
					
					xhr.open('get',"ajax_php.php?txtname="+data,true);
					xhr.send();  
				}
			}
		</script>
	</head>
	<body>
		<form>
			<input type="text" name="txtname" placeholder="enter name" onkeyup="display(this)"/><span></span>
		</form>
	</body>
</html>