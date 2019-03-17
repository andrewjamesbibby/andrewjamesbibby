<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>Publisher</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/portfolio_details/publisher/1.jpg" alt="code-1">
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
                    <li><p><i class="fa fa-git-square"></i> <a href="https://github.com/YUDUcreative/Publisher-REST-API-Library" target="_blank">github.com/YUDUcreative/Publisher-REST-API-Library</a></p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="https://packagist.org/packages/yudu/publisher" target="_blank">packagist.org/packages/yudu/publisher</a></p></li>
                </ul>

                <ul class="project-general-info">
                    <li><p>YUDU Publisher Wrapper Library</p></li>
                    <li><p>Deployed to Packagist</p></li>
                    <li><p>Built in support for generating request XML</p></li>
                    <li><p>Helper methods to make requests easily</p></li>
                    <li><p>Convenient output handling</p></li>
                    <li><p>Unit Tested with Travis CI</p></li>
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
                        <li><a>Travis CI</a></li>
                        <li><a>PHP Unit</a></li>
                        <li><a>Composer</a></li>
                        <li><a>Packagist</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

            </div>
        </div>
    </div>
</div>
