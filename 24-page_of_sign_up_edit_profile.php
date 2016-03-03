<?php include "template/header.php"; ?>
<?php include "template/baner-top.php"; ?>
<div class="sign-up">
    <div class="container">
        <?php include "template/side-bar.php"; ?>
        <form action="#">
            <p>
                <label for="nickname">Nickname</label>
                <input required id="nickname" name="nickname" type="text">
            </p>
            <p>
                <label for="email">E-mail</label>
                <input required id="email" name="email" type="email">
            </p>
            <p>
                <label for="password">Password</label>
                <input required id="password" name="password" type="password">
            </p>
            <p class="left clearfix">
                <label for="chose_file_input">Profile photo</label>
                <a id="chose_file" href="#">Upload</a>
                <input required id="chose_file_input" name="imagefile" type="file" />
            </p>
            <p class="checkbox">
                <input required type="checkbox" id="check1" />
                <label for="check1">I have read and accepted the <a href="#">User Agreement</a></label>
            </p>
            <p class="right"><input  class="button" type="submit" value="Sign up"></p>

        </form>
    </div>
</div>
<?php include "template/baner-bottom.php"; ?>
<?php include "template/footer.php"; ?>
