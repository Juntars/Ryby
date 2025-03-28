<?php
$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "wedkowanie"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get predatory fish data or other related data
$sql = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 2";  // Example for predatory fish
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data for each row
    $lp = 1;  // Row counter (L.P.)
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $lp++ . "</td>"; // Displaying L.P.
        echo "<td>" . $row['nazwa'] . "</td>";  // Displaying fish species
        echo "<td>" . $row['wystepowanie'] . "</td>";  // Displaying fish habitat
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data found.</td></tr>";
}

// Close the connection
$conn->close();
?>