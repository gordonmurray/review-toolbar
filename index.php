<?php include 'config.php'; ?>
<?php include 'process.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Review Toolbar</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/murrion.js" ></script>
    </head>

    <body style="margin-top:5px;">

        <!-- Report a Fault Modal -->
        <form method="post" action="index.php" name="form_report" >
            <input type="hidden" name="report" value="true" />
            <div id="modal_fault" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <h3 id="myModalLabel">Report a fault</h3>
                </div>
                <div class="modal-body">
                    <p>
                        <label>Please describe the problem as briefly as you can</label>
                        <textarea name="review_content" rows="5" class="span6" placeholder="Try to include the expected bahaviour and what happened instead"></textarea>

                        <label>Page URL</label>
                        <input name="review_url" type="text" class="span5" id="current_url" placeholder="URL here" />

                        <label class="checkbox">
                            <input name="review_urgent" type="checkbox"> This item is urgent
                        </label>

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" name="submit" value="Send Report" class="btn btn-primary" />
                </div>
            </div>
        </form>
        <!-- End of Report a Fault Modal -->

        <!-- Deploy Modal -->
        <form method="post" action="index.php" name="form_deploy" >
            <input type="hidden" name="deploy" value="true" />
            <div id="modal_deploy" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <h3 id="myModalLabel">Consent to Deploy Live</h3>
                </div>
                <div class="modal-body">
                    <p>
                        <label class="checkbox">
                            <input name="deploy_consent" type="checkbox" value="1"> I would like to deploy the changes from the Test site to the Live site
                        </label>

                        <br />

                        <label>Comments</label>
                        <textarea name="deploy_comments" rows="5" class="span6" placeholder="Any particular instructions to perform upon depoyment?"></textarea>

                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" name="submit" value="Deploy" class="btn btn-primary" />
                </div>
            </div>
        </form>
        <!-- End of Deploy Modal -->

        <div class="container">
            <div class="row">
                <div class="span12 text-right">
                    <?php echo (isset($message) && $message != '') ? $message : ''; ?>
                    <a href="<?php echo $default_url; ?>" class="btn" target="testing_content_frame"><i class="icon-home"></i></a>
                    <a href="#modal_fault" role="button" class="btn btn-info" data-toggle="modal" onClick="update_current_url();">Report a fault</a>
                    <a href="#" class="btn btn-warning" disabled>Sync Database</a>
                    <a href="#modal_deploy" role="button" class="btn btn-danger" data-toggle="modal">Deploy Live</a>
                </div>
            </div>
        </div><br />

        <iframe src="<?php echo $default_url; ?>" id="testing_content_frame" name="testing_content_frame" scrolling="no">Sorry, Frames need to work for this</iframe>

    </body>

    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
</html>