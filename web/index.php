<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <div>
            <label for='upload'>Add Attachments:</label>
            <input id='upload' name="upload[]" type="file" multiple="multiple" />
        </div>

        <p><input type="submit" name="submit" value="Submit"></p>

    </form>
	
</body>
</html>