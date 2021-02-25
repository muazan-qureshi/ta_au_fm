<?php session_start();

// class start Here
class ta_au_fy
{
  // Connection start here
  function connection()
  {
    $connect = mysqli_connect('localhost', 'root', '', 'ta_au_fm');
    return $connect;
  }
  // Connection end here

  // admin login
  function agentlogin()
  {
    if (isset($_POST['agent_login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `agents` WHERE email = '$email' AND password = '$password'";
      $query = mysqli_query($this->connection(), $sql);
      // return $query;

      $count = mysqli_num_rows($query);

      if ($count == 1) {
        $_SESSION['liveagent'] = $_POST['email'];
        echo "<script>window.location.href='index.php'</script>";
      } else {
        echo "<script>alert('Sorry Something is Wrong')</script>";
      }
    }
  }
  // admin login end here

  // for user live info
  function user_live()
  {
    $a = $_SESSION['liveagent'];
    $sql = "SELECT * FROM `agents` WHERE email = '$a'";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }
  //

  // function for getting visitors query
  function visitor_query()
  {
    $sql = "SELECT * from visitorquery";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }
  // visitor query function end here




} // class "auction_tours" end here

$object = new ta_au_fy;
