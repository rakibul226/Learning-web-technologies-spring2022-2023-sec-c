<!DOCTYPE html>
<html>
<head>
	<title>JS Eample</title>
</head>
<body>
	
	<form name="myForm" onsubmit="return(validate());">
		<fieldset style="width:150px">
            Blood Group
            <select name="bloodGroup" >
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			</select>
			<hr>
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
	</form>
	<h1 id="head1"></h1>
	<script>
function validate(){
			let bloodGroup = document.forms["myForm"]["bloodGroup"].value;

			if(degree != ''){
				document.getElementById('head1').innerHTML = bloodGroup;
			}
            else{
                alert("Must be selected");
				return false;
            }
		}
		</script>
</body>
</html>