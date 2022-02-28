<!-- About Me Subpage -->
<section class="pt-page pt-page-1" data-id="about_me">

    <div class="section-title-block">
        <h2 class="section-title">About Me</h2>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
            <div class="my-photo-small">
                <img src="images/photo_small.jpg" alt="image">
            </div>
        </div>
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="general-info">
                <h3>I am a Developer @ <a href="https://www.yudu.com" target="_blank">YUDU</a></h3>
                <p>I work with a wide variety of web and cloud technologies to solve real world problems. I have gained many skills over the years in various positions at home and abroad. </p>
                <p>I am the lead developer of <a href="https://www.yudu.com/sentinel" target="_blank">YUDU Sentinel</a>.</p>
                <p>I am active at Laracasts as <a href="https://laracasts.com/@squibby" target="_blank">@squibby</a></p>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Tweets</h3>
            </div>
            <div class="tweets owl-carousel">

                @foreach($tweets as $tweet)
                    <div class="tweet-item">
                        <div class="tweet-content">
                            <div class="tweet-text">
                                <p>{!! \Twitter::linkify($tweet['text']) !!} </p>
                            </div>
                        </div>
                        <div class="tweet-credits">
                            <div class="tweet-author-info">
                                <p class="tweet-author">{{ $tweet['user']['name'] }}</p>
                                <p class="tweet-date">{{ Carbon\Carbon::parse($tweet['created_at'])->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>

                @endforeach



            </div>
        </div>
    </div>

    <!-- Certifications block -->
    <div class="block-title">
        <h3>Professional Certifications</h3>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/certs/aws-developer.png" alt="aws developer">
                    <h4>AWS Developer Associate</h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/certs/aws-solutions-architect.png" alt="aws solutions architect">
                    <h4>AWS Solutions Architect Associate</h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/certs/laravel-certified.png" alt="laravel certified">
                    <h4>Laravel Certified Developer</h4>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Certifications block -->

    <!-- Services block -->
    <div class="block-title">
        <h3>Services</h3>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/service/development.png" alt="Web Programming">
                    <h4>Web Programming</h4>
                    <p>Front and Back end web development using modern frameworks and best practises.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/service/responsive.png" alt="Responsive Design">
                    <h4>Responsive Development</h4>
                    <p>Projects which scale and flow across all screen sizes and device types.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/service/systems.png" alt="Custom Systems">
                    <h4>Custom Systems</h4>
                    <p>Custom and secure system development built from the ground up. </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="images/service/psd2html5.png" alt="PSD to HTML5">
                    <h4>PSD -> HTML5</h4>
                    <p>Convert any PSD designs to clean and functional pixel perfect HTML5</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Services block -->

    <!-- Technology block -->
    <div class="block-title">
        <h3>Technologies</h3>
    </div>

    <div class="row">
        <div class="col-sm-4 col-md-2 col-md-offset-1 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="images/logos/html5.png" alt="html5"></a>
            </div>
        </div>

        <div class="col-sm-4 col-md-2 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="images/logos/css3.png" alt="css3"></a>
            </div>
        </div>

        <div class="col-sm-4 col-md-2 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="images/logos/js.png" alt="js"></a>
            </div>
        </div>

        <div class="col-sm-4 col-md-2 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="images/logos/php.png" alt="php"></a>
            </div>
        </div>

        <div class="col-sm-4 col-md-2 subpage-block">
            <div class="client_block">
                <a href="#" target="_blank"><img src="images/logos/sql.png" alt="sql"></a>
            </div>
        </div>

    </div>
    <!-- End of Clients block -->

</section>
<!-- End of About Me Subpage -->
