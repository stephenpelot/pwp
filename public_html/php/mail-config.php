<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpUser = 'apikey';
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = '6Ldrt30UAAAAAG76EAY90txIOMLDw8vcYcEaFJE7';
$secret = '6Ldrt30UAAAAAK9KV5xCmWyX-A2OlDkj9dLZcAQ-';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["stephenpelot@gmail.com" => "Stephen Pelot"];