<?php

class ta_au_fy
{
    // Connection start here
    function connection()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'ta_au_fm');
        return $connect;
    }
    // Connection end here

    function visitor_query()
    {
        if (isset($_POST['vquery_btn'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $sql = "INSERT INTO `visitorquery`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
            $query = mysqli_query($this->connection(), $sql);
            return $query;
        }
    }
} // class end here

$object = new ta_au_fy;
