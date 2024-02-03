<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- contact form -->
    <form action="./contact.php" method="post" class="contact-form col-md-10 col-lg-8 m-auto">
    
    <div class="form-row">
        <div class="form-group col-sm-6">
            <input name=\'name\' type="text" size="50" class= "form-control" placeholder="Your Name" required>
        </div>
        <div class="form-group col-sm-6">
            <input name=\'password\' type="password" class= "form-control" placeholder="Enter Password" required>
        </div>
        <div class="form-group col-sm-6">
            <input name=\'confirm_password\' type="password" class= "form-control" placeholder="Confirm Password" required>
        </div>
        <div class="form-group col-sm-12 mt-3">
            <input type="submit" value="Submit" class="btn btn-outline-primary rounded">
        </div>
    </div>

    </form>
    
</body>
</html>'
?>









