<!DOCTYPE html>
<html>
<head>
	<title>JS Eample</title>
</head>
<body>
	
    <form name="myForm" onsubmit="return(validate());">
		<fieldset style="width:200px;">
			<legend>Date of Birth</legend>	
			<input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:45px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">	
		</fieldset>
	</form>
    <h1 id=head1></h1>
	
	<script>
		function validate(){
			var day = document.myForm.dd.value;
			var month = document.myForm.mm.value;
			var year = document.myForm.yyyy.value;
			
			if(day == "" || month == "" || year == ""){
				alert("Cannot be empty");
				return false;
			}
			if((day > 0 && day <= 31) || (month >= 1 && month <= 12) 
			|| (year >= 1900 && year <= 2016)){
				alert("Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)");
				return false;
			}
		}
	</script>
</body>
</html>
