<?php include "template/header.php"; ?>
<?php include "template/baner-top.php"; ?>
<?php include "template/nav-menu.php"; ?>
<div class="page-add-edit-group">
    <div class="container">
        <?php include "template/side-bar.php"; ?>

        <div class="text-cont clearfix">
            <h2>Add group/Edit group:</h2>
            <form action="#">
                <input type="text" placeholder="Group name">
                <div class="textarea-cont">
                    <h3>Group description text</h3>
                    <textarea placeholder="Add comment...">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsumdolor sit amet conse ctetur adipisicing elit.</textarea>
                </div>
            </form>
            <div class="add-photos clearfix">
                <div class="add-photos-button">
                    <a>add photos</a>
                </div>
                <div class="photos-cont clearfix">
                    <div class="clearfix">
                        <div class="photo-cell clearfix">
                            <img src="images/truck-1.png" alt="">
                            <div class="button-cont clearfix">
                                <a href="#">main</a>
                                <a href="#">delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="button-cont-last clearfix">
                        <a href="#">Cancel</a>
                        <a href="#">Save</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include "template/baner-bottom.php"; ?>
<?php include "template/footer.php"; ?>
