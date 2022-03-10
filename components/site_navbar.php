<!-- Site Backend Connection Initialization -->
<?php

    $schoolInfo = 4;
    $schoolContent = 4;
    $info = $site->siteInformation($database, $schoolInfo);
    $quick_links = $site->linkList($database, 'Quick Links', $schoolContent);
    $events = $site->eventList($database, $schoolContent);

?>

<!-- Top bar-->
<?php require '../nisgaa/components/site_topbar.php'; ?>
<!-- Top bar end-->

<!-- Navbar Start-->
<header class="nav-holder make-sticky">
<div id="navbar" role="navigation" class="navbar navbar-expand-lg">
    <a href="/" class="navbar-brand home"><img src="/nisgaa-icon-banner-aames.png" alt="AAMES Icon" class="d-none d-md-inline-block"><img src="/nisgaa-icon-aames.png" alt="AAMES SD92 Icon" class="d-inline-block d-md-none"><span class="sr-only">AAMES - go to homepage</span></a>
    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
    <div id="navigation" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a href="/">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/nlc" class="nav-link">NLC</a></li>
        <li class="nav-item"><a href="/news">School News</a></li>
        <li class="nav-item"><a href="/contacts" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="https://www.nisgaa.bc.ca/parent_resources" class="nav-link">Parents</a></li>
        <li class="nav-item"><a href="#search"><i class="fa fa-search fa-lg"></i><span class="d-inline-block d-md-none">&nbsp;&nbsp;Search</span></a></li>
        </ul>
    </div>
</div>
</header>
<!-- Navbar End-->

<!-- Search Page -->

<div id="search">
    <button type="button" class="close">×</button>
    <form action="/search" method="POST">
        <input type="search" name="search" aria-label="Search Overlay" placeholder="Search for..." autocomplete="off" required>
        <button type="submit" class="btn btn-lg btn-primary">Search</button>
    </form>
</div>

<!-- Search Page End -->