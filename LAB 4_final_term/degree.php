
<html>
<body>
	
	<form name="myForm" onsubmit="return(validate());">
		<fieldset style="width:170px"> 
            <legend>Degree</legend>
            <input type="checkbox" name="degree" value="SSC"> SSC
			<input type="checkbox" name="degree" value="HSC"> HSC
			<input type="checkbox" name="degree" value="BSc"> BSc
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
	</form>
	<h1 id="head1"></h1>
	<script>
function validate(){
			let degree = document.forms["myForm"]["degree"].value;

			if(degree != ''){
				document.getElementById('head1').innerHTML = degree;
			}
            else{
                alert("At least one of them has to be selected");
				return false;

            }
		}
	</script>
</body>
</html>