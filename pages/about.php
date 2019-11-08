<?php 
    $about = $site->aboutList($database, $schoolContent); 
    $programs = $site->programList($database, $schoolContent);
?>
<div class="col-md-9">
    <!-- ABOUT US CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2><?php echo $info['school_name']; ?></h2>
                </div>
                <p class="lead"><?php echo $about['web_desc']; ?></p>
            </div>
        </div>
    </section> 
</div>