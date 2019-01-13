<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>Crypto Dashboard </h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/portfolio_details/crypto/1.jpg" alt="pavilion-1">
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });
                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
                    <li><p><i class="fa fa-calendar"></i> 2018</p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="https://crypto.andrewjamesbibby.com" target="_blank">crypto.andrewjamesbibby.com</a></p></li>
                </ul>

                <p class="text-justify">Live realtime crypto dashboard</p>

                <ul class="project-general-info">
                    <li><p>Google Charts auto update with price variation</p></li>
                    <li><p>Integrates websockets via pusher</p></li>
                    <li><p>2 way data binding with Vue.js</p></li>
                    <li><p>Grabs current crypto prices from crypto api</p></li>
                    <li><p>Laravel Echo</p></li>

                </ul>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>Laravel</a></li>
                        <li><a>Pusher</a></li>
                        <li><a>Vue</a></li>
                        <li><a>Websockets</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

            </div>
        </div>
    </div>
</div>
