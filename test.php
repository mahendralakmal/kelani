<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
			$('#cmbPart').change(function(e){
				alert();
			var e = document.getElementById("cmbPart");
			var part = e.options[e.selectedIndex].value;
			alert(part);
		/*$.ajax({
			type:'POST',
			url:"LoginScript.php",
			data:{logout:""},
			success: function(data){
				window.location="index.php";
			}
		});*/
		});
	});
	</script>
</head>

<body>
<form >
	<select id="cmbPart" name="cmbPart">
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     </select>
</form>
</body>
</html>
