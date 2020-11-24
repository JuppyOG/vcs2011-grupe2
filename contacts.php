<?php include "header.php" ?>

<div class="contact-background"> 
  <div class= "contact-text container center-align " >
      <h1 class="blue lighten-5 ">Contact Us</h1>
  </div>
</div>
<br><br><br><br><br>
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
            <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                <i class="material-icons right ">send</i>
            </button>
        </form>
        <div class="contact-us-oposite col s6 center-align">
            <div><img src="images/Email.png" alt=""></div>
            <div>
                <h5>If you have questions or just want to get in touch, use the form below. We look forward hearing from you.</h5>
            </div>
        </div>
    </div>
    <h1 class="center-align">Our location</h1>
    <div class="row">
        <div class="col s6 center-align">
            <div><img src="images/homeicon.png" alt=""></div>
            <div>
                <h4>Our headquarters</h4>
                <h5>Ulonų g. 5,<br>
                    I laiptinė, 3 aukštas,<br>
                    313 kab., Vilnius</h5>
            </div>
        </div>
        <div class="col s6 center-align">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.4917555425038!2d25.29122255834358!3d54.709913244628545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x73978617430c730c!2sUlon%C5%B3%20g.%205%2C%20Vilnius%2008240!5e0!3m2!1slt!2slt!4v1606214558111!5m2!1slt!2slt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>Z
        </div>
    </div>
</div>


<!-- Čia kontaktų puslapio vidinė dalis -->



<?php include "footer.php" ?>