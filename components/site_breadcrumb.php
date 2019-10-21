<!-- BREADCRUMB -->
<?php

    $breadcrumb;

    if($page_name == 'news'){
        $breadcrumb = "School News";
    } else if($page_name == 'about'){
        $breadcrumb = "About us";
    } else if($page_name == 'contacts'){
        $breadcrumb = "Contact us";
    } else if($page_name == 'search'){
        $breadcrumb = "Search Results";
    } else {
        $breadcrumb = str_replace('_', ' ', $page_name);
    }

?>
<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
    <div class="container-no-center">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-12 text-xs-sm-center">
                <h1 class="h2"><?php echo $breadcrumb; ?></h1>
            </div>
        </div>
    </div>
</div>

<!-- BREADCRUMB END -->