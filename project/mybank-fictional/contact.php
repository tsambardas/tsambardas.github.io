
<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    
    // Validate message subject
    if(empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = filterString($_POST["subject"]);
    }
    
    // Validate user comment
    if(empty($_POST["message"])){
        $messageErr = "Please enter your comment.";     
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid comment.";
        }
    }
    
    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){

            echo '<p class="error">Unable to send email. Please try again!</p>';
        }
    }

?>

<!DOCTYPE html>
<html class="no-js" lang="en"> <!-- TT -->
    <head>
        <meta charset="utf-8">
        <title>MyBank Australia | MyBank.com.au</title> <!-- TT -->
        <meta name="description" content="Personal online banking in Australia"> <!-- TT -->
        <meta name="keywords" content="Personal, Loan, National Australia Bank"> <!-- TT -->
        <meta name="author" content="Tulay Tsambardas, tulaytsambardasdesign@gmail.com "> <!-- TT -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="MyBank">
        <meta property="og:type" content="">
        <meta property="og:url" content="https//www.MyBank.com.au/title/mybank_index">
        <meta property="og:image" content="https//www.mybankaustralia/images/mybanklogo.png">

        <link rel="manifest" href="https://site.webmanifest" crossorigin="use-credentials">
        <link rel="apple-touch-icon" href="icon.png">
    
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mybank_index.css"><!-- TT -->
        <link rel="stylesheet" href="css/responsive.css"><!-- TT -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="theme-color" content="#fafafa">

        <style type="text/css">
            .error{ color: red; }
            .success{ color: green; }
            input[type=submit]{
                background-color: orange;
                color: black;
                padding:20px;
                margin: 4px 2px;
                border: none;
                cursor: pointer;
             
                display: inline-block;
            }
            /* Set a style for all buttons */

            input[type=submit]:hover, input[type=reset]:hover {
            opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            input[type=reset] {
            padding:20px;
            margin: 4px 2px;
            border: none;
            cursor: pointer;

            display: inline-block;
            background-color: #f44336;
            }
            body { 
                background-image:url(images/loginbackground.png);
            }
            form{
                max-width: 500px;
                margin: auto;
                background: white;
                padding: 10px;
                border: 3px solid gray;
            }
        </style>
    </head>
    <body>

        <form action="contact1.php" method="post">
        <h2>Enquiry form</h2>
        <p>Please fill in this form and send us.</p>
            <p>
                <label for="inputName">Name:<sup>*</sup></label>
                <input type="text" name="name" id="inputName" required>
                <span class="error"><?php echo $nameErr; ?></span>
            </p>
            <p>
                <label for="inputEmail">Email:<sup>*</sup></label>
                <input type="text" name="email" id="inputEmail" required>
                <span class="error"><?php echo $emailErr; ?></span>
            </p>
            <p>
                <label for="inputSubject">Subject:</label>
                <input type="text" name="subject" id="inputSubject" required>
            </p>
            <p>
                <label for="inputComment">Message:<sup>*</sup></label>
                <textarea name="message" id="inputComment" rows="5" cols="30" required></textarea>
                <span class="error"><?php echo $messageErr; ?></span>
            </p>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
