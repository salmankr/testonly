<!DOCTYPE html>
<html>
<head>
    <title>INDEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="section-empty">
        <div class="container content">
            <div class="row proporzional-row">
                <div class="col-md-6 col-sm-12">
                    <hr class="space l" />
                    <form action="#" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Your subject</p>
                                <input id="subject" name="subject" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Your name</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <p>Phone number</p>
                                <input id="phone" name="phone" placeholder="" type="text" class="form-control form-value">
                            </div>
                        </div>
                        <hr class="space xs" />
                        <p>Your message</p>
                        <textarea id="messagge" name="message" placeholder="" class="form-control form-value" required></textarea>
                        <hr class="space s" />
                        <button class="btn-sm btn" name="submit" type="submit">Send messagge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("db/connection.php");
        if (isset($_POST['submit'])) {
            $subject = $_POST['subject'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $query = "INSERT INTO contact (subject, name, email, contact, message) VALUES ('$subject', '$name', '$email', '$phone', '$message')";
            $run = mysqli_query($con, $query);
            if ($run) {
                $to      = 'kamrangm6@gmail.com';
                $msg = 'NAME: '.$name.' EMAIL: '.$email.' MESSAGE: '.$message;
                $sender = mail($to, $subject, $msg);
                if ($sender) {
                    ?>
                        <script type="text/javascript">
                            alert('your message has been sent');
                        </script>
                    <?php
                }

            }
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script><!--jquerycdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><!--poopercdn -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script><!--bscdnjs -->
</body>
</html>


