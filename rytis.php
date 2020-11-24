<?php include "header.php" ?>

<div class="contact-background1">
    <div class="contact-text container center-align ">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="images/defaultImageResized.jpg">
                    <span class="card-title">Rytis</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>My name is Rytis 27 y.o. male . I`m starting my career in programming. So far I learned basics of Java, C# and PHP</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="images/hobby.jpg">
                    <span class="card-title">Hobbies</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>My hobbies consist of playing basketball, watching movies, reading books, playing video games and eating snacks</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 m6">
            <br><br><br>
            <h4>Languages i learned</h4>
        </div>
        <div class="col s6 m6">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/Clogo.png" style="width:500px heigh:500px ">
                    <div class="text">C#</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/javalogo.png" style="width:500px heigh:500px  ">
                    <div class="text">JAVA</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/phplogo.png" style="width:500px heigh:500px ">
                    <div class="text">PHP</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>