<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Review Toolbar</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/murrion.js" ></script>
    </head>

    <body style="margin-top:5px;">

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <button class="btn btn-primary">Send Report</button>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="span12 text-right">
                    <a href="../index.php" class="btn btn-mini" target="testing_content_frame">Home</a>
                    <a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" onClick="update_current_url();">Report a fault</a>
                    <a href="#" class="btn btn-warning" disabled>Sync Database</a>
                    <a href="#" class="btn btn-danger" disabled>Deploy Live</a>
                </div>
            </div>
        </div><br />
        
        <iframe src="http://www.google.com" id="testing_content_frame" name="testing_content_frame" scrolling="no">Sorry, Frames need to work for this</iframe>

    </body>

    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
</html>