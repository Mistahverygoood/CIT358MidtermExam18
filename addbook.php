<?php
    session_start();
    require_once('config.inc.php');
    
    if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $pages = $_POST['pages'];
      $author = $_POST['author'];
      $year = $_POST['year'];
      
      mysqli_query=($conn,"INSERT INTO library (title,pages,author,year) values('$title','$pages','$author','$year')");
    }
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
    <input style="float:right" type="submit" value="Add Book" onClick="return submit_form();" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = mysqli_query($conn,"SELECT * FROM library");
                    while($row = mysqli_fetch_array($result)){
                      echo "<tr>
                              <td>".$row["title"]."</td>
                              <td>".$row["pages"]."</td>
                              <td>".$row["author"]."</td>
                              <td>".$row["pubyear"]."</td>
                              
                              <form>
                                <input type='hidden' name='edit' value='$row[id]' />
                                <td><input type='submit' value='edit' /></td>
                              </form>
                      
                      
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>

</body>
</html>