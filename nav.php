<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'link.php';?>
</head>

<body>
    <div class="top container-fluid bg-dark text-light">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-center">
                <div class="top p-2">
                    <a href="" style="color:white;" class="mx-3"> <i class="fa fa-phone" aria-hidden="true"> Phone No.:
                            9891768667 </i></a>

                    <a href="" class="pl-2" style="color:white;"> <i class="fa fa-envelope" aria-hidden="true">
                            mail@gdfskills.com</i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-center">

                <div class="box p-2 ">
                    <a href="" style="color:white;"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="box p-2">
                    <a href="" style="color:white;"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                </div>
                <div class="box p-2">
                    <a href="" style="color:white;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="head navbar-light sticky-top p-3" style="background-color:white;">
        <nav class="container navbar navbar-expand-lg p-0 ">
            <a class="navbar-brand" href="index.php"><img id="img" src="image/gdsn.png" alt=""></a>

            <span class="text-light" id='menu'>
                <div class='menu-line1'></div>
                <div class='menu-line2'></div>
                <div class='menu-line3'></div>
            </span>
            <div class="navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav-page1">
                    <li class="nav-item active mx-3">
                        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item  mx-3">
                        <a class="nav-link" href="team.php">TEAM</a>
                    </li>
                    <li class="nav-item  mx-3 ">
                        <a class="nav-link" href="service.php">SERVICE</a>
                    </li>
                    <li class="nav-item  mx-3 ">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>

<script>
window.onload = () => {
    const $ = document.querySelector.bind(document);

    $('#menu').onclick = () => {
        $('#menu').classList.toggle('rotate')
        $('.nav-page1').classList.toggle('transform')
        $('.menu-line1').classList.toggle('rotate1')
        $('.menu-line2').classList.toggle('rotate2')
        $('.menu-line3').classList.toggle('rotate3')
    }
}
</script>

</html>