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
                    <h2>Nisga'a Elementary Secondary School</h2>
                </div>
                <p class="lead"><?php echo $about['web_desc']; ?></p>
            </div>
        </div>
    </section>
    
    <!-- PROGRAMS CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>PROGRAMS</h2>
                </div>
                <p class="lead"><?php echo $programs['web_desc']; ?></p>
            </div>
        </div>
    </section>

    <!-- CODE OF CONDUCT CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>AYUUḴHL NISGA'A</h2>
                </div>
                <p class="lead">At NESS, we expect all students to abide by the philosophy that we are all good people. But what does this mean in real life? Some examples to show this are:</p>
                <ul>
                    <li class="nav-item lead">Saying hello or smiling when you first encounter someone.</li>
                    <li class="nav-item lead">Being helpful by opening a door, picking up something that has been dropped, taking care of other people’s belongings, taking care of your own belongings.</li>
                    <li class="nav-item lead">Using your WITS in moments of conflict (Walk away; Ignore; Talk it out; Seek help)</li>
                    <li class="nav-item lead">Remembering that rude, loud or mean actions often reflect that a person is struggling inside. Take the time to be patient and help the person work it out by using your own WITS.</li>
                </ul>
                <br>
                <center><img class="img-fluid" src="/ness-images/Ayuukhl-Nisgaa.jpg" alt="Nisga'a Code of Conduct" style="width:80%!important; height:80%!important;"></center>
                <br>
            </div>
        </div>
    </section>    
</div>