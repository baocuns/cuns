<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');

class Sendmail_Library
{
    public function __construct()
    {
    }
    public function sendmail()
    {
        $to      = $_REQUEST['email'];
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: baonv.23.student@fit.tdc.edu.vn\n';

        // ini_set("SMTP", "localhost");
        // ini_set("smtp_port", "25");
        // ini_set("sendmail_from", "baonv.23.student@fit.tdc.edu.vn");
        // ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");

        return mail($to, $subject, $message, $headers);
    }
}
