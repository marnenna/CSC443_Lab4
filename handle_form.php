<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>
<body>
    <?php #Script handle form

    if (strlen($_POST["name"]) >0) {
        $_POST["name"] = $_POST["name"];# code...
    } else {
        $_POST["name"]= null;# code...

        echo '<p><b> You Forgot to Enter Your Name! </b></p>';
    }

    if (strlen($_POST["comments"]) >0) {
        $_POST["comments"] = $_POST["comments"];# code...
    } else {
        $_POST["comments"]= null;# code...

        echo '<p><b> You Forgot to Enter Your Comments! </b></p>';
    }

    if(!(strlen($_POST["email"]) >0)){

        $_POST["email"] = null;
        echo '<p><b> You Forgot to Enter Your Emails! </b></p>';
    }

    if (isset ($_POST["gender"])) {
        if($_POST["gender"] == 'M'){
            $message = '<b><p> Good Day, Sir </p></b>';
        }# code...

        if($_POST["gender"] == 'G'){
            $message = '<b><p> Good Day, Madam </p></b>';
        }# code...
        
    } else {
        $_POST["gender"] = null;
        echo '<p><b> You Forgot to Choose Your Gender! </b></p>';# code...
    }
    
    if ($_POST["name"] && $_POST["comments"] && $_POST["email"] && $_POST["gender"]){
        echo "Thank you," .$_POST["name"]." for the following somments: <br/> <tt>" .
        $_POST["comments"]."</tt><p> We will reply to you at <i>" . $_POST["email"]"</i></p>" ;
        echo $message;
    }

    ?>
</body>
</html>