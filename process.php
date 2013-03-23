<?php

/*
 * send an email
 */
function send_mail($to, $from, $subject, $content)
{
    $headers = "From:" . $from;
    if (mail($to, $subject, $content, $headers))
    {
        return true;
    }
    else
    {
        return false;
    }
}

/*
 * process a 'Send Report'
 */
if (isset($_POST["submit"]) && $_POST["submit"] == 'Send Report')
{
    $review_content = $_POST["review_content"];
    $review_url = $_POST["review_url"];
    $review_urgent = $_POST["review_urgent"];
    if (send_mail($notification_email, $notification_email, 'Review Report', $review_content))
    {
        echo "Report sent Thank you";
    }
}

/*
 * Process a Deploy
 */
if (isset($_POST["submit"]) && $_POST["submit"] == 'Deploy')
{
    $deploy_consent = $_POST["review_content"];
    $deploy_comments = $_POST["review_content"];
    if ($deploy_consent == 1)
    {
        if (send_mail($notification_email, $notification_email, 'Ready to deploy', $deploy_comments))
        {
            echo "Deployment notification sent Thank you";
        }
    }
}
?>