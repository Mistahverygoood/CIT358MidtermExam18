<?php
    
?>
<html>

<head>
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">
</head>

<body>
	<form action="" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" name="title" required/><br />
		<label>Pages:</label> <input type="number" min=1 name="pages" required/><br />
		<label>Author:</label> <input type="text" name="author" required/><br />
		<label>Published Year:</label> <input type="text" name="year" required/>
        <div><br/></div>
    <input style="float:right" type="submit" value="Update Book" onClick="return submit_form();" name="update"/>
    </fieldset>
  
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("Successfully Updated!");
		}
	</script>

</body>
</html>