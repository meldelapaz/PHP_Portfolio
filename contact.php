<!doctype html>
<html
<head>
    <meta charset="UTF-8">
    <title>Contact Info</title>
    <link rel='stylesheet' type="text/css" href="css/style.css">

    <?php require 'includes/header.php' ?>

</head>
<body>
<div class="container">



    <section id="full">
        <aside>
            <h1>Contact</h1>
            <div class="divline"></div><br>

            <form class="/action_page.php">
                Name
                <br>
                <input type="text" name="firstname" value="John Smith">
                <br>
                Email
                <br>
                <input type="text" name="lastname" value="example@gmail.com">
                <br>
                Message
                <br>
                <input id="messagetext" type="text" name="firstname" value="">
                <br><br>
                <input id="submitbutton" type="submit" value="Submit">
            </form>
        </aside>

        <h2 id="connectwithme">
            Connect with Me
            <br>
            <div class="divline"></div>
            <br>
            <a href="https://github.com/meldelapaz"><img src="assets/images/git.png" width="50" height="50"></a>
            <a href="https://www.linkedin.com/in/melanie-de-la-paz-baa505142"><img src="assets/images/linkedin.png" width="50" height="50"></a>
            <a href="https://stackexchange.com/users/10893734/melanie-de-la-paz"><img src="assets/images/overflow.png" width="50" height="50"></a>
        </h2>
    </section>

    <?php require 'includes/footer.php' ?>

</div>
</body>
</html>