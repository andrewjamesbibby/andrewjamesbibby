<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>The Ranch</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/portfolio_details/ranch/1.jpg" alt="ranch-1">
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
                            navText: true,
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
                    <li><p><i class="fa fa-calendar"></i> 2019</p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="https://ranch.andrewjamesbibby.com" target="_blank">ranch.andrewjamesbibby.com</a></p></li>
                    <li><p><i class="fa fa-git-square"></i> <a href="github.com/andrewjamesbibby/the-ranch" target="_blank">https://github.com/andrewjamesbibby/the-ranch</a></p></li>
                </ul>

                <ul class="project-general-info">
                    <li><p>Make requests to YUDU Publisher API without writing code</p></li>
                    <li><p>Displays requests and response information</p></li>
                    <li><p>Single Page Application built with Vue</p></li>
                    <li><p>Responsive to different devices sizes</p></li>
                </ul>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>Vue</a></li>
                        <li><a>Vuex</a></li>
                        <li><a>Bulma</a></li>
                        <li><a>Laravel</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

            </div>
        </div>
    </div>
</div>
