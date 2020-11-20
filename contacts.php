<?php include "header.php" ?>

<h1 class="center-align">Contact Us</h1>
<div class="container">
<div class="row contact-us-block">
    <form class="col s6">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Enter Your Name" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="disabled" type="text" class="validate">
                <label for="disabled">Topic</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea" class="materialize-textarea"></textarea>
                <label for="textarea">Textarea</label>
            </div>
        </div>
    </form>
    <div class="contact-us-oposite col s6 center-align">
        <div><img src="images/Email.png" alt=""></div>
        <div><h5>If you have questions or just want to get in touch, use the form below. We look forward hearing from you.</h5></div>
    </div>
</div>
</div>

<!-- Čia kontaktų puslapio vidinė dalis -->



<?php include "footer.php" ?>