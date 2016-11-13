<div class="small-12 columns contact-container" id="contact-form">
    <div class="contact-divider"></div>
    <div class="small-12 medium-6 columns">
        <h4>Get in touch with me</h4>

        <ul>
            <li>Tyler Walker</li>
            <li>Dallas, TX</li>
            <li>tyler@chadtylerwalker.com</li>
        </ul>
    </div>
    <div class="small-12 medium-6 columns" id="form-container">
        <p id="submissionError">Sorry, something seems to have gone wrong with sending me your email.</p>
        <p id="submitSuccess">Thanks! I have received your message.</p>
        <form onsubmit="contactSubmit();" action="javascript:void(0);">
            <p id="nameError">*Please enter a name</p>
            <input name="name" value="" type="text" placeholder="Your Name" class="contact-form-input" id="name"/>
            <p id="emailError">*Please enter a valid email</p>
            <input name="email" value="" type="text" placeholder="Email" class="contact-form-input" id="email"/>
            <p id="messageError">*Please write me a message!</p>
            <textarea name="message" placeholder="What's up?" class="contact-form-textarea" id="message"></textarea>
            <input name="submit" type="submit" value="Send" class="contact-form-submit" />
        </form>
    </div>
</div>


<!-- Scripts - Included at end for quicker load times-->
<script src="http://www.chadtylerwalker.com/assets/foundation/js/foundation.min.js"></script>
<script src="http://www.chadtylerwalker.com/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript"> jQuery(document).foundation(); </script>

<script type="text/javascript">
    function contactSubmit() {
        var nameNull = false;
        var emailNull = false;
        var messageNull = false;

        var subName = document.getElementById('name').value;
        var subEmail = document.getElementById('email').value;
        var subMessage = document.getElementById('message').value;

        //check if user has inputted all fields
        if (subName == "" || subName == null) {
            jQuery('#nameError').fadeIn(350);
        } else {
            jQuery('#nameError').fadeOut(350);
            nameNull = true;
        }

        if (subEmail == "" || subEmail == null) {
            jQuery('#emailError').fadeIn(350);
        }
        else {
            var emailVal = validateEmail(subEmail);
            if (emailVal) {
                jQuery('#emailError').fadeOut(350);
                emailNull = true;
            } else {
                jQuery('#emailError').fadeIn(350);
            }
        }

        if (subMessage == "" || subMessage == null) {
            jQuery('#messageError').fadeIn(350);
        }
        else {
            jQuery('#messageError').fadeOut(350);
            messageNull = true;
        }

        if (nameNull && emailNull && messageNull) {
            var data = {
                'email' : subEmail,
                'name' : subName,
                'message' : subMessage
            };

            jQuery.ajax({
                type : 'POST',
                url : '../contact-submit.php',
                data : data,
                success : function(response) {
                    if (response) {
                        jQuery('#submissionError').fadeOut(350);
                        jQuery('#submitSuccess').fadeIn(350);
                        document.getElementById('name').value = "";
                        document.getElementById('email').value = "";
                        document.getElementById('message').value = "";
                    } else {
                        jQuery('#submissionError').fadeIn(350);
                    }
                }
            });
        } else {
            return false;
        }
    }

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        // if email is not required and user did not enter anything, return true
            if (email == "" || email == null) {
                return false;
            } else {
                return re.test(email);
        }
    }
</script>

<script type="text/javascript">
    function contactScroll() {
        $('html, body').animate({
            scrollTop: jQuery('#contact-form').offset().top
        },1000);
    }
</script>