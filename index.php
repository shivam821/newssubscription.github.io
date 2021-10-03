<!--To send email from google sheet https://covve.com/how-to/send-bulk-personalized-emails-using-gmail/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="style.css">
    <script src="emailvalidate.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Email Subscription</title>
  </script>
</head>
<div class="wrapper">
        <div class="content">
            <header>Become a Subscriber</header>
            <p>Subscribe to our newletter to get the latest updates and news.</p>
        </div>
        <form action="registration_code.php" method="POST">
            <div class="field">
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
            </div>
            <div class="field">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <button class="btn" name = submit><span>Subscribe</span></button>

        </form>
        <div class="text">We dont share your information.</div>
</div>