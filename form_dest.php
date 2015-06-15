<html>
<html>
<head>
	<title>
		Form submission!
	</title>
</head>
	<body>
		<?php 
	    if (isset($_POST['submit']))
	    	{echo "Name: .{$_POST['name']}<br />";
	         echo "Age: .{$_POST['age']}<br />";
	         echo "Gender: .{$_POST['gen']}<br />";
	         echo "Email: .{$_POST['email']}<br />";
            }
        else 
        	{echo "The form was not submitted!";
            }
        ?>
	</body>
</html>

