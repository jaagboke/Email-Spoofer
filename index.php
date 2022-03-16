<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Email Spoofer</title>
</head>
<body>



<div class="container bg-success mt-5 pt-4">
    <div class="row">
        <div class="col-sm-9 col-sm-7 col-lg-5 mx-auto">
            <div class="card-body">
                <h1 class="text-center">Email Spoofer</h1>
            <form method="POST" action="script.php" class="form-signin pt-3">
                    <div class="mb-3">
                    <div class="form-label-group">
                            <label for="inputEmail" class="text-light">To [ Email Recipient] <span style="color: #FF0000"></span></label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required >
                        </div> <br/>

                    <div class="form-label-group">
                            <label for="inputEmail" class="text-light">From [ Email Sender ] <span style="color: #FF0000"></span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="">
<!--                            /*readonly required autofocus>*/-->
                        </div> <br/>
                        
                        <label for="text" class="text-light">Subject [Email Subject] <span style="color: #FF0000"></span></label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div><br/>

                        <label for="inputPassword" class="text-light">Message [Email Message] <span style="color: #FF0000"></span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-secondary btn-block text-uppercase" >Send Mail</button>
                    
</form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
