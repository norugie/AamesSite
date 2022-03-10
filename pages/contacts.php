
<div class="col-md-9">
    <!-- CONTACT CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>We are here to help</h2>
                </div>
                <p class="lead">We're here to provide you with more information and answer any question you may have. You can reach us through any of the contact means below:</p>
            </div>
        </div>
    </section>

    <!-- CONTACT PERSON -->
    <?php $contacts = $site->contactList($database, $schoolContent); ?>
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2><?php echo $info['school_abbv']; ?> Contacts</h2>
                </div>
                <div class="row text-center">
                    <?php foreach($contacts as $contact): ?>
                        <div class="col-md-4 justify-content">
                            <div class="box-simple">
                                <h3 class="h4"><?php echo $contact['firstname'] . " " . $contact['lastname']; ?><br><span style="font-size:15px;"><?php echo $contact['position']?></span></h3>
                                <p style="color: #000!important;">
                                    <strong>Email Address: </strong><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a><br>
                                    <strong>Phone Number: </strong> <?php echo $contact['phone']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="heading">
                    <h3>Teachers</h3>
                </div>
                <div class="row text-center">
                    <?php $teachers = $site->teacherList($database, $schoolContent); ?>
                    <?php foreach($teachers as $teacher): ?>
                        <div class="col-md-4 justify-content">
                            <div class="box-simple">
                                <h3 class="h4"><?php echo $teacher['firstname'] . " " . $teacher['lastname']; ?><br><span style="font-size:15px;"><?php echo $teacher['position']?></span></h3>
                                <p style="color: #000!important;">
                                    <strong>Email Address: </strong><a href="mailto:<?php echo $teacher['email']; ?>"><?php echo $teacher['email']; ?></a><br>
                                    <strong>Phone Number: </strong> <?php echo $teacher['phone']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>
