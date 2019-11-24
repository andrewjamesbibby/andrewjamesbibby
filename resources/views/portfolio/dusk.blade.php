<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>Dusk Failures</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/portfolio_details/dusk/1.jpg" alt="dusk-1">
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
                    <li><p><i class="fa fa-git-square"></i> <a href="https://github.com/andrewjamesbibby/dusk-failures" target="_blank">https://github.com/andrewjamesbibby/dusk-failures</a></p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="https://packagist.org/packages/bibby/dusk-failures" target="_blank">https://packagist.org/packages/bibby/dusk-failures</a></p></li>
                </ul>

                <ul class="project-general-info">
                    <li><p>Laravel Package development</p></li>
                    <li><p>Style CI Integration</p></li>
                    <li><p>Open Source</p></li>
                </ul>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>PHP</a></li>
                        <li><a>Laravel</a></li>
                        <li><a>Style CI</a></li>
                        <li><a>Composer</a></li>
                        <li><a>Packagist</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

            </div>
        </div>
    </div>
</div>
