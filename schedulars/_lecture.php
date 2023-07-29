<?php 

lessonReminder();

function lessonReminder(){
    include('../includes/_functions.php');
    include('../includes/_config.php');
    // Get today's date and time in IST
    date_default_timezone_set(_siteconfig('_timezone'));
    $todayDate = date('Y-m-d');
    $currentTime = date('H:i');

    // Calculate the end time of the 15-minute window in IST
    $endTime = date('H:i', strtotime('+15 minutes', strtotime($currentTime)));

    // SQL query to fetch lessons where _lessondate is today and _lessontime is within the next 15 minutes in IST
    $sql = "SELECT * FROM tbllessons WHERE _lessondate = '$todayDate' AND _lessontime BETWEEN '$currentTime' AND '$endTime'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $courseid = $row['_courseid'];
            $lessonid = $row['_id'];
            $sql = "SELECT * FROM `tblpurchasedcourses` WHERE `_courseid` = $courseid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $userid = singleDetail('tblusers', '_id', $row['_courseid'], '_userphone');
                    $sql = "SELECT * FROM `tblusers` WHERE `_userphone` = $userid";
                    echo $sql;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $userEmail = $row['_useremail'];
                            $userName = $row['_username'];
                            emailNotification('lesson', $userName,'Lesson Started',$userEmail,$lessonid);
                        }
                    }
                }
            }
        }
    }
}


?>