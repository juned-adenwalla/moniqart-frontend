<?php 

// Function to call site settings 
function _siteconfig($param)
{
    require('_config.php');
    $sql = "SELECT * FROM `tblsiteconfig`";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
            return $data[$param];
        }
    }
}

// Function for calling base url 
function base_url($url)
{
    require('_config.php');
    return "$dashboard_url" . $url;
}


// Fuction for calling frontend url 
function frontend_url($url)
{
    require('_config.php');
    return "$site_url" . $url;
}


// Function listing categories
function category_list(){
    require('_config.php');
    $query = "SELECT * FROM `tblcategory` WHERE `_categorytype` = 'courses' AND `_status` = 'true';";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Prepare the HTML code
    $html = '';
    $counter = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        $categoryName = $row['_categoryname'];
        $categoryIcon = $row['_categoryimg'];

        // Determine the class name for the categories__thumb
        $thumbClass = 'categories__thumb--cat' . $counter;

        $html .= '<div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    <div class="categories__item">
                        <div class="categories__item-inner">
                            <div class="categories__thumb ' . $thumbClass . '">
                                <img src="' . base_url('uploads/categoryimages/' . $categoryIcon) . '" alt="course icon">
                            </div>
                            <div class="categories__item-content">
                                <a href="course-category.html" class="stretched-link active">' . $categoryName . '</a>
                            </div>
                        </div>
                    </div>
                </div>';

        // Increase the counter and reset it to 1 if it exceeds 3
        $counter++;
        if ($counter > 3) {
            $counter = 1;
        }
    }

    // Output the HTML code
    echo $html;
}

// Function listing courses 
function displayCourses($category = null, $search = null, $layout = 'slider', $limit = 10, $offset = 0) {
    require('_config.php');

    // Prepare the query
    $query = "SELECT * FROM tblcourse WHERE _status = 'true'";
    
    // Add category filter if provided
    if ($category !== null) {
        $query .= " AND _categoryid = '$category'";
    }
    
    // Add search filter if provided
    if ($search !== null) {
        $query .= " AND (_coursename LIKE '%$search%' OR _coursedescription LIKE '%$search%')";
    }
    
    // Add pagination limits
    $query .= " LIMIT $limit OFFSET $offset";
    
    $result = mysqli_query($conn, $query);

    // Prepare the HTML code
    $html = '';
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $courseName = $row['_coursename'];
        $courseDesc = $row['_coursedescription'];
        $courseThumbnail = $row['_thumbnail'];
        $categoryID = $row['_categoryid'];
        $mentorName = $row['_teacheremailid'];
        $coursePrice = $row['_pricing'];

        // Determine the class name for the categories__thumb
        $thumbClass = 'course__meta-tag--cat' . $counter;

        if ($layout === 'slider') {
            $html .= '<div class="swiper-slide">
                        <div class="course__item">
                            <div class="course__item-inner">
                                <div class="course__thumb">
                                    <img src="' . base_url('uploads/coursethumbnail/' . $courseThumbnail) . '" alt="course Images">
                                    <a href="#" class="course__btn course__btn--save"><i class="fa-regular fa-bookmark"></i></a>
                                </div>
                                <div class="course__content">
                                    <div class="course__content-top">
                                        <span class="course__meta-tag ' . $thumbClass . '">Web Development</span>
                                        <div class="course__focus-inner">
                                            <span>4.9</span>
                                            <img src="assets/images/course/star.png" alt="review-star">
                                            <span>(526)</span>
                                        </div>
                                    </div>
                                    <h6><a href="course-details.html">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a href="mentor-details.html"><img src="assets/images/avatar/1.png" alt="avatar">' . $mentorName . '</a>
                                        <div class="course-price">
                                            <del>$100</del> <span>' . $coursePrice . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        } else if ($layout === 'course grid') {
            $html .= '<div class="col-lg-4 col-md-6">
                        <div class="course__item">
                            <div class="course__item-inner">
                                <div class="course__thumb">
                                    <img src="assets/images/course/' . $categoryID . '.png" alt="course Images">
                                    <a href="#" class="course__btn course__btn--save course__btn--active"><i class="fa-regular fa-bookmark"></i></a>
                                </div>
                                <div class="course__content">
                                    <div class="course__content-top">
                                        <span class="course__meta-tag course__meta-tag--cat' . $categoryID . '">English</span>
                                        <div class="course__focus-inner">
                                            <span>4.5</span>
                                            <img src="assets/images/course/star.png" alt="review-star">
                                            <span>(1326)</span>
                                        </div>
                                    </div>
                                    <h6><a href="course-details.html">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a href="mentor-details.html"><img src="assets/images/avatar/2.png" alt="avatar">Wilsone</a>
                                        <div class="course-price">
                                            <del>$100</del> <span>' . $coursePrice . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
        $counter++;
        if ($counter > 3) {
            $counter = 1;
        }
    }

    // Output the HTML code
    echo $html;
}

?>

<!-- // Usage examples:

// Display all latest active courses using slider layout
displayCourses(null, null, 'slider');

// Display courses in a specific category using course grid layout
displayCourses('category_id', null, 'course grid');

// Display courses based on search criteria using slider layout
displayCourses(null, 'search_keyword', 'slider');

// Display courses in a specific category and based on search criteria using course grid layout
displayCourses('category_id', 'search_keyword', 'course grid');

// Close the database connection
mysqli_close($connection); -->