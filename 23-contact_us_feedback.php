<?php include "template/header.php"; ?>
<?php include "template/baner-top.php"; ?>
<div class="contact-us-feedback">
    <div class="container">
        <?php include "template/side-bar.php"; ?>
        <div class="contact-cont">
            <h2>Contact us</h2>
            <div class="text">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </div>
            <div class="text-cont clearfix">
                <div class="first-town">
                    <p>Chicago, IL</p>
                    <p><a href="tel:3124556789">(312)455 67 89 </a>, <a href="tel:3124556788">(312)455 67 88 </a></p>
                    <p><a href="mailto:dieselckub@gmail.com">dieselckub@gmail.com</a></p>
                </div>
                <div class="second-town">
                    <p>New York,NY</p>
                    <p><a href="tel:3124556787">(312)455 67 87 </a>, <a href="tel:3124556786">(312)455 67 86 </a>,
                        <a href="tel:3124556785">(312)455 67 85 </a>,</p>
                    <p><a href="mailto:dieselckubny@gmail.com">dieselckubny@gmail.com</a></p>
                </div>
            </div>

            <h3>Feedback form</h3>
            <form class="clearfix" action="#">
                <div class="form-cont clearfix">
                    <input type="text" name="name" placeholder="name*" required>
                    <input type="email" name="email" placeholder="e-mail*" required>
                    <input type="text" name="subject" placeholder="subject*" required>
                </div>
                <div class="form-cont clearfix">
                    <textarea name="message" placeholder="message*" required></textarea>
                </div>
                <input class="button" type="submit" name="button" value="send">
            </form>



        </div>
    </div>
</div>
<?php include "template/baner-bottom.php"; ?>
<?php include "template/footer.php"; ?>
