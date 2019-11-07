<?php

    if(!isset($_POST['search'])){
?>
    <script>window.location = "/";</script>
<?php
    }

    $keyword = mysqli_real_escape_string($database->con, $_POST['search']);

    $blogs = $site->blogSearchResults($database, $keyword, $schoolContent);
    $resources = $site->resourcesSearchResults($database, $keyword, $schoolContent);
    
?>
<div class="col-md-9">
    <!-- BLOG RESULTS CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>School News</h2>
                </div>
                <?php if(count($blogs) < 1){ ?><p class="lead">No school news posts found for keyword: <?php echo $keyword; ?></p><?php } ?>
                <div class="row">
                    <?php foreach($blogs as $blog): ?>
                        <div class="col-lg-6 col-md-6 col-blog-mobile">
                            <ul class="d-block">
                                <li class="lead mb-0">
                                    <a href="/news/read/<?php echo preg_replace('/[a-zA-Z]/', '', $blog['post_id']); ?>"><?php echo $blog['post_title']; ?></a>
                                    <p class="author-category">By <?php echo $blog['firstname'] . " " . $blog['lastname']; ?> | <?php echo date_format(date_create($blog['post_date']), 'd M Y'); ?></p>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- RESOURCES RESULTS CONTENT -->
    <!-- <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Resources</h2>
                </div>
                <?php if(count($resources) < 1){ ?><p class="lead">No resources found for keyword: <?php echo $keyword; ?></p><?php } ?>
                <div class="row products products-big">
                    <?php foreach($resources as $resource): ?>
                        <div class="col-lg-3 col-md-6 col-blog-mobile">
                            <div class="product d-none d-md-block">
                                <div class="image"><a href="<?php if($resource['link_type'] == 'File'){ echo "/links/"; } echo $resource['link_content']; ?>" target="_blank" rel="noreferrer"><img src="https://www.nisgaa.bc.ca/images/thumbnails/<?php echo $resource['link_thumbnail']; ?>" alt="" class="img-fluid image1" style="max-width: 80% !important;"></a></div>
                                <div class="text">
                                    <h3 class="h5"><a href="<?php if($resource['link_type'] == 'File'){ echo "/links/"; } echo $resource['link_content']; ?>" target="_blank" rel="noreferrer"><?php echo $resource['link_name']; ?></a></h3>
                                </div>
                            </div>
                            <ul class="d-block d-md-none d-lg-none">
                                <li class="lead mb-0"><a href="<?php if($resource['link_type'] == 'File'){ echo "/links/"; } echo $resource['link_content']; ?>" target="_blank" rel="noreferrer"><?php echo $resource['link_name']; ?></a></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section> -->
</div>