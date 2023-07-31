<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "nav.php";?>
    <div classs="d-flex justify-content-end">

    </div>
    <div class="d-flex p-0" style="background-color:#0e0e42;">
        <div class="ml-auto"></div>
        <div class="">
            <img class="w-100" src="image/new.png" alt="">
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3 d-flex justify-content-center align-items-center">
                <img src="image/chairman.jpg" class=""
                    style="height:50vh; border:2px solid whitesmoke; border-radius: 30px;" alt="">
            </div>
            <div class="col-lg-6 py-5">
                <h1>
                    <strong> Award Winning</strong><br>
                    <span style="color:red;">Digital Marketing Company</span>
                </h1>
                <p class="text-justify pt-2">
                    Mr web technologies is a web development company in delhi with the solution of generating the
                    maximum Return with powerfull digital marketing solutions and with experience of developing,
                    designing and marketing businesses in different industries & online marketing services in
                    delhi/NCR.
                    We also offer SEO services in Delhi which helps suitable traffic to your website. We not only
                    Push
                    and promote your website for the top search engines, but we also offer our monthly social media
                    marketing. This will help your website in all the top main social media plateforms and link
                    local
                    listings on the Internet. we strongly provide services such as Google Adwords, social media
                    marketing, Search Engine Optimization.
                </p>
            </div>
        </div>
    </div>


    <div style="background-color:rgb(0 255 161 / 25%);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-center">
                    <div class="m-5 align-item-center">
                        <h1 style="font-size: 10vh;" class="py-3">
                            <strong> Our </strong>
                            <span style="color:red;">Vision</span>
                        </h1>
                        <p style="font-size: 1.5rem;">Our vision is very clear like our Prime minister. We just want
                            to list our company in
                            <strong>Top
                                digital marketing agencies in India</strong>
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-center justify-content-center">
                    <img src="image/seo1.png" style="height:70vh;" class="p-5" alt="">
                </div>
            </div>
        </div>
    </div>


    <div style="background-color: #1fb398!important;">
        <div class="container">
            <div class="row py-5 text-white">
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column ">
                    <div class="d-flex justify-content-center">
                        <img src="image/1.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="counter-value">500</h2>
                    </div>
                    <div class="text-center">
                        <h2 class="">Happy Clients</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column">
                    <div class="d-flex justify-content-center">
                        <img src="image/2.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="counter-value">300</h2>
                    </div>
                    <div class="text-center">
                        <h2 class="">Project Complate</h2>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column">
                    <div class="d-flex justify-content-center">
                        <img src="image/3.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="counter-value">9</h2>
                    </div>
                    <div class="text-center">
                        <h2 class="">Years of Services</h2>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex flex-column">
                    <div class="d-flex justify-content-center">
                        <img src="image/4.png" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="counter-value">2</h2>
                    </div>
                    <div class="text-center">
                        <h2 class="">Awards Winning</h2>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div style="background-color:rgb(0 255 161 / 25%);">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-center justify-content-center">
                    <img src="image/analyse.png" style="height:70vh;" class="p-5" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-center">
                    <div class="m-5 align-item-center">
                        <h1 style="font-size: 8vh;" class="py-3">
                            <strong> SEO Audit, Performance
                            </strong>
                            <span style="color:red;">And SEO Score Report</span>
                        </h1>
                        <p style="font-size: 1.5rem;">Seo audits and Performance are a necessary part of Digital
                            Marketing. Without a website audit, you risk losing visiblity on organic searches. But - are
                            all website audit tools created equal? Before you invest in a site auditor,
                            <strong>it’s important to Nurture what is important to your Business.</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php";?>
</body>
<script>
$(document).ready(function() {
    $('.counter-value').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 10000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>

</html>