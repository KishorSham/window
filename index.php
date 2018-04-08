<?php
include ('html/includes/header.php');
?>
  <script type="text/javascript">
    if ((/android|iphone|ipad|ipod/gi).test(navigator.appVersion)) {
        if (self != top) {
            if (window != top) {
                top.location.href = location.href;
            }
        }
    }
</script>
  <link rel="stylesheet" type="text/css" href="html/our/css/website.min.css">
  <!-- load css for cubeportfolio -->
  <link rel="stylesheet" type="text/css" href="html/our/cubeportfolio/css/cubeportfolio.min.css">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
<!--   <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul> -->

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="html/images/banner_1.jpg" alt="banner" style="width: 100%;">
    </div>
    <div class="carousel-item">
      <img src="html/images/banner_2.jpg" alt="banner" style="width: 100%;">
    </div>
    <div class="carousel-item">
      <img src="html/images/banner_3.jpg" alt="banner" style="width: 100%;">
    </div>
     <div class="carousel-item">
      <img src="html/images/banner_4.jpg" alt="banner" style="width: 100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="bg2" id="ours">
  <p class="text-center heading">
    Our Services
  </p>
</div>


<div class="bg3">
  <p class="text-center heading">
    Our Work
  </p>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
 <div class="grid">
        <div class="clearfix">
            <div id="js-filters-juicy-projects" class="cbp-l-filters-button cbp-l-filters-left">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    All <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".identity" class="cbp-filter-item">
                    Identity <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".web-design" class="cbp-filter-item">
                    Web Design <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".graphic" class="cbp-filter-item">
                    Graphic <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".logos" class="cbp-filter-item">
                    Logo <div class="cbp-filter-counter"></div>
                </div>
            </div>

            <div id="js-sort-juicy-projects" class="cbp-l-sort cbp-l-filters-right">
                <div class="cbp-l-dropdown">
                    <div class="cbp-l-dropdown-wrap">
                        <div class="cbp-l-dropdown-header">Original sorting</div>
                        <div class="cbp-l-dropdown-list">
                            <div class="cbp-l-dropdown-item cbp-sort-item cbp-l-dropdown-item--active" data-sort="">Original sorting</div>
                            <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-projects-title">Title</div>
                            <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-projects-desc">Description</div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-direction cbp-l-direction--second">
                    <div class="cbp-l-direction-item cbp-sort-item" data-sortBy="string:asc"></div>
                    <div class="cbp-l-direction-item cbp-sort-item" data-sortBy="string:desc"></div>
                </div>
            </div>
        </div>

        <div id="js-grid-juicy-projects" class="cbp">
            <div class="cbp-item graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/3.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="html/our/img/big/3.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Dashboard</div>
                <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
            </div>
            <div class="cbp-item web-design logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/7.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="html/our/img/big/7.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock<br>by Paul Flavius Nechita">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">World Clock</div>
                <div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
            </div>
            <div class="cbp-item graphic logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/8.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project3.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
                <div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
            </div>
            <div class="cbp-item web-design graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/10.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project4.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/4900333&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Events and More</div>
                <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-slider-inline">
                    <div class="cbp-slider-wrapper">
                        <div class="cbp-slider-item cbp-slider-item--active">
                            <a href="html/our/img/big/11.jpg" class="cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                                <img src="html/our/img/380x250/11.jpg" alt="">
                            </a>
                        </div>
                        <div class="cbp-slider-item">
                            <a href="html/our/img/big/109.jpg" class="cbp-lightbox" data-title="World Clock<br>by Paul Flavius Nechita">
                                <img src="html/our/img/380x250/109.jpg" alt="">
                            </a>
                        </div>
                        <div class="cbp-slider-item">
                            <a href="html/our/img/big/123.jpg" class="cbp-lightbox" data-title="World Clock<br>by Paul Flavius Nechita">
                                <img src="html/our/img/380x250/123.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="cbp-slider-controls">
                        <div class="cbp-slider-prev"></div>
                        <div class="cbp-slider-next"></div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">WhereTO App</div>
                <div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/13.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project6.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="html/our/img/big/13.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Ski * Buddy</div>
                <div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
            </div>
            <div class="cbp-item graphic logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/14.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project7.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="http://scriptpie.com/cubeportfolio/live-preview/img/audio/track.mp3" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music<br>by Tiberiu Neamu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Seemple* Music</div>
                <div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
            </div>
            <div class="cbp-item identity graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/16.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project8.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="http://www.youtu.be/Bu9OiDmxCrQ" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Remind~Me More<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Remind~Me More</div>
                <div class="cbp-l-grid-projects-desc">Identity / Graphic</div>
            </div>
            <div class="cbp-item web-design graphic">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/17.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project9.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="https://www.ted.com/talks/andrew_bastawrous_get_your_next_eye_exam_on_a_smartphone" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Workout Buddy<br>by Tiberiu Neamu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Workout Buddy</div>
                <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
            </div>
            <div class="cbp-item identity web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/18.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project10.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="https://www.youtube.com/watch?v=3wbvpOIIBQA" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Bills Bills Bills<br>by Cosmin Capitanu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Bills Bills Bills</div>
                <div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
            </div>
            <div class="cbp-item identity logos">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/19.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project11.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="http://scriptpie.com/cubeportfolio/live-preview/img/video/img/video/img/video/big_buck_bunny.webm" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Generic Apps<br>by Cosmin Capitanu">view video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Generic Apps</div>
                <div class="cbp-l-grid-projects-desc">Identity / Logo</div>
            </div>
            <div class="cbp-item graphic web-design">
                <div class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <img src="html/our/img/380x250/33.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <a href="ajax-juicy-projects/project12.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/26519543&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Speed Detector<br>by Cosmin Capitanu">view sound</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-l-grid-projects-title">Speed Detector</div>
                <div class="cbp-l-grid-projects-desc">Graphic / Web Design</div>
            </div>
        </div>

        <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
            <a href="html/our/ajax-juicy-projects/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
                <span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">6</span>)</span>
                <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
            </a>
        </div>
    </div>
</div>
</div> 

</div>
</div>
</div>



<div class="container" id="about">
  <div class="row">
    <div class="col-md-6">
      <h3 class="text-center about">About Us</h3>
      <p>Window Creagtion Cube Portfolio can easily be modified to suit your needs to display any content you want (images, text, Youtube & Vimeo video, html5 self-hosted video, iframe content, etc.). Also, it has a built-in lightbox and full-screen modal popup (singlePage): check it by clicking on `view larger` or `more info` buttons when you mouse over the grid items below. </p>
       <p>Window Creagtion Cube Portfolio can easily be modified to suit your needs to display any content you want (images, text, Youtube & Vimeo video, html5 self-hosted video, iframe content, etc.). Also, it has a built-in lightbox and full-screen modal popup (singlePage): check it by clicking on `view larger` or `more info` buttons when you mouse over the grid items below. </p>
    </div>
    <div class="col-md-6" id="contact">
      <h3 class="text-center contact">Contact Us</h3>
      <form>
  <div class="form-group row">
    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputText" placeholder="Name">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="Email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
     <textarea class="form-control" rows="4" id="comment"></textarea>
    </div>
  </div>
<button type="button" class="btn btn-send btn-lg">Send</button>
</div>
</form>
    </div>
  </div>
</div>


<img src="html/images/imgae.png" style="width: 100%">

<?php
include ('html/includes/footer.php');
?>

<script src="html/our/cdn.ravenjs.com/3.22.2/raven.min.js" crossorigin="anonymous"></script>
<script>Raven.config('https://a4135b01ce7a4f5a9ec97cdaa0edfc4e@sentry.io/286275').install()</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','html/our/www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46357659-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- load jquery -->
<script type="text/javascript" src="html/our/code.jquery.com/jquery-latest.min.js"></script>

<!-- load cubeportfolio plugin -->
<script type="text/javascript" src="html/our/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

<script type="text/javascript" src="html/our/js/jquery.website.min.js"></script>

<script type="text/javascript" src="html/our/js/main.js"></script>

<!-- Hotjar Tracking Code for http://scriptpie.com/cubeportfolio/live-preview/ -->
<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:356226,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
 -->
<!-- start Ulmo code -->
<script crossorigin="anonymous" src="html/our/js/5a79741b4578906e77a53480.html" async></script>
<!-- end Ulmo code -->

</body>
</html>
