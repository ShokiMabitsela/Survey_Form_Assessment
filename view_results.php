<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM surveys";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $total_surveys = $result->num_rows;
    $ages = [];
    $pizza_count = 0;
	$pasta_count = 0;
	$percentage_pap_and_wors_count = 0;
	$watch_movies_ratings = [];
	$listen_radio_ratings = [];
	$eat_out_rating = [];
    $watching_tv_ratings = [];

    while($row = $result->fetch_assoc()) {
        $ages[] = $row['age'];
        if (strpos($row['favorite_food'], 'Pizza') !== false) {
            $pizza_count++;
        }
		if (strpos($row['favorite_food'], 'Pasta') !== false) {
            $pasta_count++;
		}
		if (strpos($row['favorite_food'], 'Pap and Wors') !== false) {
            $percentage_pap_and_wors_count++;
		}
		$watch_movies_ratings[] = $row['watch_movies_rating'];
		$listen_radio_ratings[] = $row['listen_radio_rating'];
		$eat_out_ratings[] = $row['eat_out_rating'];
        $watching_tv_ratings[] = $row['watch_tv_rating'];
    }

    $average_age = array_sum($ages) / count($ages);
    $oldest_person = max($ages);
    $youngest_person = min($ages);
    $percentage_pizza = ($pizza_count / $total_surveys) * 100;
	$percentage_pasta = ($pasta_count / $total_surveys) * 100;
	$percentage_pap_and_wors = ($percentage_pap_and_wors_count / $total_surveys) *100;
    $average_watch_movies_ratings     = array_sum($watch_movies_ratings) / count($watch_movies_ratings);
	$average_listen_radio_ratings = array_sum($listen_radio_ratings) / count($listen_radio_ratings);
	$average_eat_out_rating          = array_sum($eat_out_ratings) / count($eat_out_ratings);
	$average_watching_tv_ratings     = array_sum($watching_tv_ratings) / count($watching_tv_ratings);
	
echo "<table>";
echo "<div style='text-align: center; margin-top: 20px;'>";
echo "<h1>Survey Results</h1>";
echo "<div style='position: absolute; top: 0; right: 0;'>";
echo "<form action='index.html' method='get'>";
echo "<input type='submit' value='FILL OUT SURVEY' style='border: none; background: none; color: black; cursor: pointer; font-size: 16px; text-decoration: underline;'>";
echo "<form action='view_results.php' method='get'>";
echo "<input type='submit' name='view_results' value='VIEW SURVEY RESULTS' style='border: none; background: none; color: blue; cursor: pointer; font-size: 16px; text-decoration: underline;'>";
echo "</form>";
echo "</div>";
echo "<table style='border-collapse: collapse; margin: 0 auto;'>";
echo "<tr><td>Total surveys completed:</td><td>$total_surveys</td></tr>";
echo "<tr><td>Average age of participants:</td><td>" . round($average_age, 1) . "</td></tr>";
echo "<tr><td>Oldest person participated:</td><td>$oldest_person</td></tr>";
echo "<tr><td>Youngest person participated:</td><td>$youngest_person</td></tr>";
echo "<tr><td>Percentage of people who like Pizza:</td><td>" . round($percentage_pizza, 1) . "%</td></tr>";
echo "<tr><td>Percentage of people who like Pasta:</td><td>" . round($percentage_pasta, 1) . "%</td></tr>";
echo "<tr><td>Percentage of people who like Pap and Wors:</td><td>" . round($percentage_pap_and_wors, 1) . "%</td></tr>";
echo "<tr><td>People who like watching Movies:</td><td>" . round($average_watch_movies_ratings, 1) . "</td></tr>";
echo "<tr><td>People who like listening to radio:</td><td>" . round($average_listen_radio_ratings, 1) . "</td></tr>";
echo "<tr><td>People who like eating out:</td><td>" . round($average_eat_out_rating, 1) . "</td></tr>";
echo "<tr><td>People who like watching TV:</td><td>" . round($average_watching_tv_ratings, 1) . "</td></tr>";
echo "</table>";
echo "</form>";
echo "</div>";
} else {
    echo "No Surveys Available";
}

$conn->close();
?>