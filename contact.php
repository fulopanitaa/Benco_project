<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- navbar -->

<div class="contact-page font-s-normal" style="width:100%">

    <div class="inner-container">

                <div class="breadcrumb-container">
                        <ul class='breadcrumb'>
                            <li><a href='index.php'>Home</a></li>
                            <li><a id="active">Contact</a></li>
                        </ul>
                </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174852.23584788595!2d23.476429303457422!3d46.783300193014064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c1f916c0b8b%3A0xbbc601c331f148b!2sCluj-Napoca!5e0!3m2!1sen!2sro!4v1611180824687!5m2!1sen!2sro" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>


    <div class="contact flex">
        <div class="contact-form">
            <div class="contact-form-title" style="margin-bottom:30px;">
                <h2>TELL US YOUR PROJECT</h2>
            </div>
            <form>
                <div class="contact-input flex">
                    <span class="input-item">
                        <input type="text" name="first-name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="First Name *">
                    </span>
                    <span class="input-item">
                        <input type="text" name="last-name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Last Name *">
                    </span> 
                    <span class="input-item">
                        <input type="email" name="your-email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email *">
                    </span>
                     <span class="input-item">
                         <input type="text" name="your-subject" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Subject *">
                    </span>
                </div>
                <div class="contact-message">
                    <textarea style="width:100%" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message *"></textarea>
                </div>
            </form>
        </div>
        <div class="contact-info">
            <div class="contact-info-title" style="margin-bottom:30px;">
                <h2>CONTACT US</h2>
            </div>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
            <div class="contact-data">
                <ul>
                    <li><i class="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                    <li><i class="fa fa-phone">&nbsp;</i> Info@roadthemes.com</li>
                    <li><i class="fa fa-envelope-o">&nbsp;</i> 0(1234) 567 890</li>
                </ul>
            </div>
            <div class="working-hours-title" style="margin-bottom:30px;">
                <h2>WORKING HOURS </h2>
            </div>
            <p><strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM</p>
        </div>
    </div>

</div>



<!-- Footer-->
<footer>
<?php include('footer.html'); ?>
</footer>