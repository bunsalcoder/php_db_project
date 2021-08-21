<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+855 81 327 344</div>
                            </div>
                        </div> 

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">bunsal.hul@gmail.com</div>
                            </div>
                        </div> 

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">946, Phnom Penh, Cambodia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Contact Form Start-->
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in Touch</div>
                        <form action="#" id="contact_form">
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between"> 
                                <input type="text" id="contact_form_name" class="contact_form_name form-control input_field m-1" placeholder="Your name" required="required" data-error="Name is required."> 
                                <input type="email" id="contact_form_email" class="contact_form_email form-control input_field m-1" placeholder="Your email" required="required" data-error="Email is required."> 
                                <input type="phone" id="contact_form_phone" class="contact_form_phone form-control input_field m-1" placeholder="Your phone number"> 
                            </div>
                            <div class="contact_form_text"> <textarea id="contact_form_message" class="text_field form-control contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea> </div>
                            <div class="contact_form_button"> <button type="submit" class="button contact_submit_button">Send Message</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

</body>
</html>
