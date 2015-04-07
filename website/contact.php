<?php
session_start();
include_once('includes/core.php');
include_once('includes/header.php');
?>

    <!-- Page Title -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <i class="fa fa-envelope"></i>
                    <h1>Contact Me /</h1>
                    <p>Here is how you can contact me</p>
                </div>
            </div>
        </div>
    </div>
    <!-- page title ends -->

    <!-- Contact Us -->
    <div class="contact-us-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 contact-form wow fadeInLeft">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a>
                        nisl ut aliquip ex ea commodo consequat.
                    </p>
                    <form role="form" action="assets/contact.php" method="post">
                        <div class="form-group">
                            <label for="contact-name">Name</label>
                            <input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Message</label>
                            <textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn" title="send">Send</button>
                    </form>
                </div>
                <div class="col-sm-5 contact-address wow fadeInUp">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Location</h3>
                        </div>
                        <div class="panel-body">
                            <!-- <h3>Address</h3>
                            <p>Mirpur <br>Dhaka</p>
                            <p>Phone: 0039 333 12 68 347</p> -->
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%"
                                        height="300" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mirpur,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=mirpur&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=Mirpur,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
<?php
include_once('includes/footer.php');
?>