<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LIBRARY</title>
    <link rel="stylesheet" href="css/design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>

<body>
    <section class="header">
        <Nav>
            <h1>SNAP LIBRARY</h1>
            <br>
            <a href="index.html"><img src="project/logooo.png" alt=""></a>
            <div class="nav-links" id="navLinks">

            </div>
            <div class="nav-links">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about_us.php">HumApkeHainKon</a></li>
                    <li><a href="#">EXPLORE</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </Nav>
        <div class="textbox">
            <h1>SNAP <br> LIBRARY</h1>
            <P>AAIYEEEE APKA INTEZAAR THA</P>
            <a href="register_form.php" class="button">LOGIN/REGISTER</a>
        </div>
    </section>
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>