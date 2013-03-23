<?php

$message = '';

/**
 * send an email
 */
function send_mail($to, $subject, $content)
{
    $headers = "From: " . $_SERVER['SERVER_NAME'] . " <noreply@" . $_SERVER['SERVER_NAME'] . ">";
    if (mail($to, $subject, $content, $headers))
    {
        return true;
    }
    else
    {
        return false;
    }
}

/**
 * process a 'Send Report'
 */
if (isset($_POST["submit"]) && $_POST["submit"] == 'Send Report')
{
    $review_content = $_POST["review_content"];
    $review_url = $_POST["review_url"];
    $review_urgent = $_POST["review_urgent"];
    if (send_mail($notification_email, $_SERVER['SERVER_NAME'] . ' Review', "$review_content\r\n$review_url\r\n$review_urgent"))
    {
        $message = "Report sent Thank you";
    }
    else
    {
        $message = "Report email not sent";
    }
}

/**
 * Process a Deploy
 */
if (isset($_POST["submit"]) && $_POST["submit"] == 'Deploy')
{
    $deploy_consent = $_POST["deploy_consent"];
    $deploy_comments = $_POST["deploy_comments"];
    if ($deploy_consent == 1)
    {
        if (send_mail($notification_email, $_SERVER['SERVER_NAME'] . ' ready to deploy', $deploy_comments))
        {
            $message = "Deployment notification sent Thank you";
        }
        else
        {
            $message = "Deployment notification email not sent";
        }
    }
}
?>