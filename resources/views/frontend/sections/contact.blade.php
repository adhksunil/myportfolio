<section class="contact-area section-padding" id="contact-page" style="color: green">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Lets Work Together</h3>
                    <div class="desc">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="form-name" id="form-name" class="input-box"
                                    placeholder="Name">
                                <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="form-email" id="form-email" class="input-box"
                                    placeholder="Email">
                                <label for="form-email" class="icon lb-email"><i class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="form-subject" id="form-subject" class="input-box"
                                    placeholder="Subject">
                                <label for="form-subject" class="icon lb-subject"><i
                                        class="fal fa-check-square"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea class="input-box" id="form-message" placeholder="Message" cols="30" rows="4" name="form-message"></textarea>
                                <label for="form-message" class="icon lb-message"><i class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" type="submit">Send Now <span
                                        class="dir-part"></span></button>
                            </div>
                        </div>
                        <!-- Your HTML content -->
{{--
<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript code to handle form submission -->
<script>
    $(document).ready(function() {
        $('#contact-form').submit(function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Serialize form data
            var formData = $(this).serialize();

            // Send AJAX request to the server
            $.ajax({
                url: 'contact-submit.php', // Replace with your server-side script URL
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful form submission
                    alert('Your message has been sent successfully!');
                    // Optionally, reset the form fields
                    $('#contact-form')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                    alert('An error occurred while sending your message. Please try again later.');
                }
            });
        });
    });
</script> --}}

<!-- End of HTML content -->

                    </div>
                </form>
                <!-- Contact-Form / -->
            </div>
        </div>
    </div>
</section>
