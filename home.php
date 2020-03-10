<?php include 'header.php'; include 'db.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container about">
        <h2>About us</h2>
        <p style="padding-bottom: 70px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum porttitor consectetur. Proin lectus augue, tristique et libero sit amet, venenatis aliquam purus. Phasellus vel risus purus. Nullam egestas tristique tellus at blandit. Ut sit amet nulla dignissim, pulvinar tortor nec, vulputate urna. Duis feugiat, neque eget ullamcorper imperdiet, nisi metus iaculis tellus, ac elementum urna tellus sed odio. Etiam aliquet ullamcorper sodales. Mauris tincidunt leo feugiat augue faucibus aliquam. Ut malesuada tristique molestie. Donec suscipit quam et elementum cursus. Aenean lacinia purus a est convallis vehicula.
        </p>
        <div class="row">
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li1.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">5 minutes from the metro</h5>
                            Near the metro station "Ulitsa 1905 goda"
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li2.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Own parking</h5>
                            Parking is available on weekdays from 19:00 to 00:00, and on weekends and holidays - from 12:00 to 00:00
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li3.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Many halls</h5>
                            Large selection of halls for a different number of guests. A company of any size will feel comfortable.
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li4.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Gourmet Menu</h5>
                            Huge selection of food and drinks from around the world
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li5.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Organization of events</h5>
                            e will help you organize the perfect anniversary or business meeting so you don't have to be nervous!
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md">
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="mr-3" src="img/li6.png" style="width: 64px;" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Discounts and promotions</h5>
                            We give gifts and discounts to all guests.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>   