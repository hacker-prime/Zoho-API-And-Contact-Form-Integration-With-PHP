<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form & Zoho API Integration</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1258817039843516417/qdj2rNtA_400x400.jpg" type="image/png">    <!-- https://www.cssfontstack.com/Open-Sans -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>

  
    <!--==================== CONTACT ====================-->
    <div id="contact" class="contact-header" data-sr-id="8">
        <strong class="contact">Contact</strong>
    </div>

    <div class="body-contact contactprime">

        
      <center style="padding-top:15px;padding-bottom:15px;margin-top:20px;margin-bottom:20px">Please note that when you send the email, it will be sent to the email you provided. Why? <br> Normally it would be sent to an email you specify but since this is for testing it will be sent to your email. </center>



        <div class="wrapper sendus">
            <header style="text-align:center;">Send us a Message</header>
            <form action="message.php">
                <div class="dbl-field">
                <div class="field">
                    <input type="text" name="firstname" placeholder="Enter your first name">
                    <i class='fas fa-user'></i>
                </div>
                <div class="field">
                    <input type="text" name="lastname" placeholder="Enter your last name">
                    <i class='fas fa-user'></i>
                </div>
                </div>
                <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your phone">
                    <i class='fas fa-phone-alt'></i>
                </div>                
                <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class='fas fa-envelope'></i>
                </div>
                </div>
                <div class="message">
                <textarea placeholder="Write your message" name="message"></textarea>
                <i class="material-icons">message</i>
                </div>
                <div class="button-area">
                <button type="submit">Send Message</button>
                <span></span>
                </div>
            </form>
        </div>
        <script src="script.js"></script>
    </div>
    <!--==================== CONTACT ====================-->


  
    <script src="assets/javascript/index.js"></script>    





</body>
</html>