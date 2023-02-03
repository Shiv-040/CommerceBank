<html lang="en">
<head>
<meta charset="utf-8">
    </head>
    <body>
        <h1>Leave us a comment!</h1>
        <form method="post">
            Username*: <input type="text" name="firstname"><br />
            Email*: <input type="text" name="lastname"><br />
            Comment: <input type="text" name="email"><br />
			<p><span class"error">* required fields</span></p>
            <input type="submit" value="Submit">
            <input type="reset" name="reset">
            <h1>Your information: </h1>
        </form>
        <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                if(!empty($_REQUEST['firstname'])){
                    $firstname = $_REQUEST['firstname'];
                }
                else {
                    $firstname = " ";
                    echo "userame is required";
                }

                if(!empty($_REQUEST['lastname'])){
                    $lastname = $_REQUEST['lastname'];
                }
                else {
                    $lastname = " ";
                    echo "email is required";
                }

                if(!empty($_REQUEST['email'])){
                    $email = $_REQUEST['email'];
                }
                else {
                    $email = " ";
                    echo "comment required";
                }

                if($firstname != " " && $lastname != " "){
                    echo "<h3>$firstname $lastname</h3>";
                }

                if($email != " "){
                    echo "<h3>$email</h3> <br />";
                }
                

            }
        ?>
    </body>
</html>
