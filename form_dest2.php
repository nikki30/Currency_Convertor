<html>
<html>
<head>
	<title>
		Form Submission!
	</title>
</head>
	<body>
		<?php 
	    if (isset($_POST['submit']))
	 	    {
	 	     $name = $_POST['name'];
	         $Age=$_POST['age'];
	         $Gender=$_POST['gender'];
	         $Email=$_POST['email'];
	         if (strlen($name)<8)
	         	{echo "Re-Enter Name. Too short. Must be atleast 8 characters long!";
	            }
	         elseif (!is_numeric($Age))
	            {echo "Enter valid Age.";
	             }
	         elseif (empty($Gender))
	         	{ echo "Gender box must be filled";
	            }
	         elseif (empty($Email))
	         	{ echo "Email field cannot be left empty";
	            }
	         else
	            {echo "You have logged in successfully!";
	            echo "<br />";
	            echo "Here are your details:<br />";
	            echo "Name: .{$_POST['name']}<br />";
	            echo "Age: .{$_POST['age']}<br />";
	            echo "Gender: .{$_POST['gen']}<br />";
	            echo "Email: .{$_POST['email']}<br />";
                }
            }
             else 
        	{echo "The form was not submitted!";
            }
        ?>
	</body>
</html>

