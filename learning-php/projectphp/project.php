<?php

$error = "";

if ($_POST) {

    if (!$_POST["email"]) {
            $error .= "An email address is requires.<br>";
    }

    if (!$_POST["content"]) {
        $error .= "The content address is requires.<br>";
    }

    if (!$_POST["subject"]) {
        $error .= "An subject address is requires.<br>";
    }

    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        $error .= "An email address is required.<br>";
    }

    if ($error != "") {
                  
        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
    }
}
?>

<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="jquery.js"></script>
    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

            <title>PHP Form</title>
    </head>
    <body cz-shortcut-listen="true">
      
      <div class="container">
      
    <h1>Get in touch!</h1>
      
      <div id="error"></div>
      
      <form method="post">
  <fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">What would you like to ask us?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </fieldset>
  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
          
        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
    </script>
          
  
</body>
</html>