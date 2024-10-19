<?php
$r = $_GET['nm'];
$hostname="127.0.0.1";
$username="root";
$db_name="m_a";
$password="";

$conn = mysqli_connect("$hostname","$username","$password","$db_name");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $actorName = $_POST['a_nm'];

  $sql = "SELECT movie_name
          FROM movie
          INNER JOIN movieActor ON 
          movie.movie_no = movie_actor.movie_no
          INNER JOIN actor ON movie_actor.actor_no = actor.actor_no
          WHERE actor_name = '$r'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "Movies in which $actorName has acted:<br>";
      while ($row = $result->fetch_assoc()) {
          echo $row["movie_name"] . "<br>";
      }
  } else {
      echo "No movies found for $actorName.";
  }
}
?>