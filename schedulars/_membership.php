<?php

membershipReminder();
membershipCancel();

function membershipReminder(){
    include('../includes/_functions.php');
    include('../includes/_config.php');

    // Step 2: Execute SQL query to fetch users whose subscription is ending in 5 days
    date_default_timezone_set(_siteconfig('_timezone'));
    $futureDate = date('Y-m-d', strtotime("+5 days"));
    $sql = "SELECT * FROM `tblusers` WHERE `_usermemsleft` = '$futureDate'";
    echo $sql;
    $result = $conn->query($sql);

    // Step 3: Loop through the query results and send notifications to the users
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userName = $row['_username'];
            $userEmail = $row['_useremail'];
            // Assuming you have a function to send notifications to users (implement this function based on your notification system)
            emailNotification('reminder', $userName,'Subscription Renewal',$userEmail);
        }
    }
}

function membershipCancel(){
    include('../includes/_config.php');
    // Get today's date
    date_default_timezone_set(_siteconfig('_timezone'));
    $todayDate = date('Y-m-d');

    // SQL query to fetch users whose subscription ends today
    $sql = "SELECT * FROM tblusers WHERE _usermemsleft = '$todayDate'";
    $result = $conn->query($sql);

    // Update _usermembership column to NULL for users whose subscription ends today
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userId = $row['_id'];
            $userName = $row['_username'];
            $userEmail = $row['_useremail'];
            $updateQuery = "UPDATE tblusers SET _usermembership = NULL, _usermemstart = NULL, _usermemsleft = NULL WHERE _id = $userId";
            echo $updateQuery;
            emailNotification('cancelled', $userName,'Subscription Cancelled',$userEmail);
            $conn->query($updateQuery);
        }
    }

}

?>