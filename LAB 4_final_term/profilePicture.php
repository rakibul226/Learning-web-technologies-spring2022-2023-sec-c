
<html>

<body>
	
<form name="myForm" onsubmit="return(validate());">
		<fieldset style="width:400px">
            <legend>Profile Picture</legend>
            User Id
			<input type="text" name="id" value=""> <br><br>
			Picture
			<input type="file" name="myPicture" value=""><hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	<h1 id="head1"></h1>
	<script>
        function validate(){
			let x = document.forms["myForm"]["id"].value;
			let id = parseInt(x);
			let myFile = x = document.forms["myForm"]["myPicture"].value;
			
			if(id != "" && !(id > 0)){
				alert("UserId cannot be empty and has tobe a positive numbe");
				return false;
			}
			if(myFile == ""){
				alert("Please, select a picture.");
				return false;
			}			
		}
	</script>
</body>
</html>