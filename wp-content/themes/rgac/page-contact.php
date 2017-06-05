<?php
/* Template Name: Contact Page */
// Advanced Custom Fields
get_header();
?>
<style>
label.contact-label {
  letter-spacing: 2px;
}
#contact {
  margin-top: 5%;
}

.form-control {
  background-color: #ebebeb;
  box-shadow: none;
  border: none;
  border-radius: 0px;
  transition: none;
}

input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}

h3.center-div-h3 {
  margin-top: 17%;
}

input[type=submit] {
  background-color: #464646;
  text-align: center;
  border: none;
  color: white;
  letter-spacing: 2px;
  width: 45%;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 20px;
}

</style>
<div id = "contact" class="container-fluid wrapper">
  <div class ="row align-items-center">
    <div class = "col-lg-6 col-md-6 col-xs-12 text-center">
      <h3>Get in touch.</h3>
    </div>
    <div class = "col-lg-6 col-md-6 col-xs-12">
      <div class = "row">
        <div class = "col-lg-8 col-md-8 col-xs-12">
          <p>Have questions? Want to get connected with us at RGAC? We would love to hear from you! Leave us a message and we will get back to you as soon as possible.</p>
        </div>
      </div>
      <form action="<?php the_permalink(); ?>" method="POST" enctype="multipart/form-data">
        <div class = "row">
          <div class = "col-lg-8 col-md-8 col-xs-12">
            <label class = "contact-label" for="usr">NAME</label>
            <input type="text" name ="name_rgac" class="form-control" id="usr">
          </div>
        </div>
        <br>
        <div class = "row">
          <div class = "col-lg-8 col-md-8 col-xs-12">
            <label class = "contact-label" for="usr">EMAIL</label>
            <input type="text" name ="email_rgac" class="form-control" id="usr">
          </div>
        </div>
        <br>
        <div class = "row">
          <div class = "col-lg-8 col-md-8 col-xs-12">
            <label class = "contact-label" for="usr">PHONE</label>
            <input type="text" name = "phone_rgac" class="form-control" id="usr">
          </div>
        </div>
        <br>
        <div class = "row">
          <div class = "col-lg-8 col-md-8 col-xs-12">
            <label class = "contact-label" for="usr">MESSAGE</label>
            <textarea class="form-control" name = "message_rgac" rows = "6" id="usr"></textarea>
          </div>
        </div>
        <br>
        <div class = "row">
          <div class = "col-lg-8 col-md-8 col-xs-12">
            <input type ="submit" name = "submit" value = "SEND"></a>
          </div>
        </div>
        <?php

        if(isset($_POST['submit'])) {

          $name_field = $_POST['name_rgac'];
          $email_field = $_POST['email_rgac'];
          $tel_field = $_POST['phone_rgac'];
          $enquiry_field = $_POST['message_rgac'];
          $to = "okwan93@gmail.com";
          $subject = "RGAC Website Enquiry - " . $name_field;


          $body = "Hello RGAC Admin,\n\n You have an enquiry from the website, please see the details below:\n\n Name: $name_field\n Company Name: $companyname_field\n E-Mail: $email_field\n Tel: $tel_field\n Message:\n $enquiry_field\n\n";

          mail($to, $subject, $body);

          echo "</br><div class = \"row\">
                <div class = \"col-lg-8 col-md-8 col-xs-12\">
                <p>Thank you for getting in touch, we will contact you shortly.</p>
                </div>
                </div>";

        } ?>

      </form>
    </div>
  </div>
</div>
  <div class="push"></div>


<?php get_footer(); ?>
