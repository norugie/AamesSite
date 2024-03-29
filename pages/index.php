<!-- Owl Carousel -->
<link rel="stylesheet" href="/plugins/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="/plugins/owl.carousel/assets/owl.theme.default.css">

<!-- JUMBOTRON -->
<section class="no-mb relative-positioned">
    <div class="relative-positioned">
        <div class="row jumbotron-new">
            <div class="col-md-9 jumbotron-left">
                <section>
                    <div class="owl-carousel owl-theme" id="owl-demo">
                        <?php $carousel = $site->carouselImages($database, $schoolContent); ?>
                        <?php foreach($carousel as $c): ?>
                            <div>
                                <?php if(isset($c['carousel_desc']) && !empty($c['carousel_desc'])){ ?>
                                    <div class="owl-text-overlay d-none d-sm-block">
                                        <h3 class="owl-title d-none m-0 d-md-block" style="padding:5px;"><?php echo $c['carousel_desc']; ?></h3>
                                    </div>
                                <?php } ?>
                                <img class="owl-img" src="/images/carousel/<?php echo $c['carousel_name']; ?>" alt="<?php echo $c['carousel_desc']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
            <div class="col-md-3 jumbotron-right">
                <nav id="myTab" role="tablist" class="nav nav-tabs nav-justified">
                    <a id="tab4-1-tab" data-toggle="tab" href="#tab4-1" role="tab" aria-controls="tab4-1" aria-selected="true" class="nav-item nav-link active my-auto" style="border:none;font-weight:bold;font-size:1rem;">QUICK LINKS</a>
                </nav>
                <div id="nav-tabContent" class="tab-content" style="border:none;">
                    <div id="tab4-1" role="tabpanel" aria-labelledby="tab4-1-tab" class="tab-pane fade show active">
                        <div class="panel panel-default sidebar-menu">
                            <div class="panel-body">
                                <ul class="nav nav-pills flex-column text-sm">
                                    <?php foreach($quick_links as $ql): ?>
                                        <li class="nav-item"><a href="<?php if($ql['link_type'] == 'File'){ echo "/links/"; } echo $ql['link_content']; ?>" class="nav-link" target="_blank" rel="noreferrer"><?php echo $ql['link_name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JUMBOTRON END -->
<!-- INFORMATION BAR -->
<footer class="bar bg-primary no-mb color-white main-footer">
    <div class="container-no-center">
        <div class="row vertical-border">
            <div class="col-lg-4 with-border">
                <h4 class="h5 text-center">RECENT NEWS</h4>
                <?php $blog_posts = $site->blogListIndex($database, $schoolContent); ?>
                <ul class="list-unstyled footer-blog-list">
                    <?php foreach($blog_posts as $blog): ?>
                        <?php $catIndex = $site->categoryListPerPost($database, $blog['id'])[0]['id']; ?>
                        <li class="d-flex align-items-center" style="padding:3px; <?php if($catIndex == 3) { ?>background: rgba(255, 255, 255, 0.6)!important;<?php } ?>" >
                            <div class="image"><img src="/images/thumbnails/<?php echo $blog['post_thumbnail']; ?>" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h5 class="mb-0"> <a href="/news/read/<?php echo preg_replace('/[a-zA-Z]/', '', $blog['post_id']); ?>" <?php if($catIndex == 3) { ?>style="color:#000!important;"<?php } ?>><?php echo $blog['post_title']; ?></a></h5>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
              <hr class="d-block d-lg-none">
            </div>
            <!-- <div class="col-lg-3 with-border">
                <h4 class="h5 text-center">UPCOMING EVENTS</h4>
                <ul class="list-unstyled footer-blog-list">
                    <?php if(count($events) < 1){ ?><li class="d-flex align-items-center"><div class="text"><h5 class="mb-0">No upcoming events available</h5></div></li><?php } ?>
                    <?php foreach($events as $e): ?>
                        <li class="d-flex align-items-center mb-0">
                            <div class="text">
                                <h5 class="mb-0"> <a href="/news/read/<?php echo preg_replace('/[a-zA-Z]/', '', $e['post_id']); ?>"><?php echo $e['event_name']; ?></a></h5>
                                <p style="font-size: 13px!important;">
                                    <?php 
                                        $data_start = explode(',', $e['GROUP_CONCAT(event_days.event_date_day_start)']); 
                                        $data_time = explode(',', $e['GROUP_CONCAT(event_days.event_date_time)']);
                                        $data_end = explode(',', $e['GROUP_CONCAT(event_days.event_date_day_end)']); 

                                        foreach($data_start as $key => $start):
                                            echo date_format(date_create($start), 'd M Y');
                                            if($data_end[$key] != $start){ echo ' to ' . date_format(date_create($data_end[$key]), 'd M Y'); } 
                                            echo ' at ' . date_format(date_create($data_time[$key]), 'h:i A') . '<br>';                    
                                        endforeach; 
                                    ?>
                                </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
              <hr class="d-block d-lg-none">
            </div> -->
            <div class="col-lg-4 with-border">
                <h4 class="h5 text-center">IMPORTANT COVID-19 UPDATES</h4>
                <ul class="list-unstyled footer-blog-list">
                    <li class="d-flex align-items-center mb-0">
                        <div class="text">
                            <p class="text-center" style="font-size: 13px!important;">Refer to the links below for COVID-19 updates from the Ministry and the District</p>
                            <h5 class="h5"><a href="/covid_ministry">COVID-19 Updates from the Ministry</a></h5>
                            <h5 class="h5"><a href="/covid_district">COVID-19 Updates from SD92</a></h5>
                        </div>
                    </li>
                </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4 with-border">
                <?php $word = $site->weeklyWord($database); ?>
                <h4 class="h5 text-center">NISGA'A PHRASE OF THE WEEK </h4>
                <hr>
                <h4 class="text-center" style="font-family: sans-serif!important; font-size: 18px!important;"><?php echo $word['word']; ?></h4>
                <hr>
                <p class="lead text-center mb-2" style="font-size: 16px;">"<?php echo $word['word_meaning']; ?>"</p>
                <h5 class="h5 text-center">Learn more about the Nisga'a language at <a href="https://www.youtube.com/channel/UCQTuOdHLEa2RSM56I5vvoFg"><u>Sim'algax 101</u></a>.</h5>
            </div>
        </div>
    </div>
</footer>

<!-- INFORMATION BAR END -->

<script src="/plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="/plugins/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>

<script>

    // Owl Carousel

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            autoplay: true,
            autoplayTimeout: 3500,
            dots: false
        });
    });

</script>