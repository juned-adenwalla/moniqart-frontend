<?php 

// Function limit text 
function limitText($text, $limit) {
    if (strlen($text) > $limit) {
        $text = substr($text, 0, $limit) . "...";
    }
    return $text;
}

// Function remove country code 
function removeCountryCode($phone) {
    // Define an array of country codes you want to check against
    $countryCodes = array('+1', '+44', '+49', '+61', '+91', '0'); // Add more country codes if needed

    // Check if the phone number starts with any of the country codes
    foreach ($countryCodes as $code) {
        if (strpos($phone, $code) === 0) {
            // Remove the country code if found
            $phone = substr($phone, strlen($code));
            break; // Exit the loop after removing the country code
        }
    }

    // Remove any non-numeric characters (e.g., spaces, dashes, etc.) from the phone number
    $phone = preg_replace('/[^0-9]/', '', $phone);

    return $phone;
}

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

// Function to call payment settings .
function _paymentconfig($param){
    require('_config.php');
    $sql = "SELECT * FROM `tblpaymentconfig`";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
            return $data[$param];
        }
    }
}

// Function to call payment settings .
function _smsconfig($param){
    require('_config.php');
    $sql = "SELECT * FROM `tblsmsconfig`";
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

// Function for all currency markups 
function _allcurrency()
{

    $baseCurrency = $_SESSION['baseCurrency'];

    require('_config.php');
    $sql = "SELECT * FROM `tblcurrency` WHERE `_status` = 'true'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) { ?>
            <option <?php if ($baseCurrency == $data['_conversioncurrency'])
                echo "selected"; ?>
                value="<?php echo $data['_conversioncurrency']; ?>">
                <?php echo $data['_conversioncurrency']; ?></option>
        <?php }
    }
}

// Function for conversion 
function _conversion($amount, $currency)
{
    require('_config.php');
    $sql = "SELECT * FROM `tblcurrency` WHERE `_conversioncurrency` = '$currency'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
            $price = $data['_price'];
        }
        return $amount * $price;
    }else{
        return 'Not converted';
    }
}

// Function to convert ISO to Code 
function currency_symbol($cur){
    if(!$cur){
        return false;
    }
    $currencies = array(
        'AED' => 'د.إ', // United Arab Emirates Dirham
        'AFN' => '؋', // Afghan Afghani
        'ALL' => 'L', // Albanian Lek
        'AMD' => '֏', // Armenian Dram
        'ANG' => 'ƒ', // Netherlands Antillean Guilder
        'AOA' => 'Kz', // Angolan Kwanza
        'ARS' => '$', // Argentine Peso
        'AUD' => '$', // Australian Dollar
        'AWG' => 'ƒ', // Aruban Florin
        'AZN' => '₼', // Azerbaijani Manat
        'BAM' => 'KM', // Bosnia-Herzegovina Convertible Mark
        'BBD' => '$', // Barbadian Dollar
        'BDT' => '৳', // Bangladeshi Taka
        'BGN' => 'лв', // Bulgarian Lev
        'BHD' => '.د.ب', // Bahraini Dinar
        'BIF' => 'FBu', // Burundian Franc
        'BMD' => '$', // Bermudan Dollar
        'BND' => '$', // Brunei Dollar
        'BOB' => 'Bs', // Bolivian Boliviano
        'BRL' => 'R$', // Brazilian Real
        'BSD' => '$', // Bahamian Dollar
        'BTC' => '₿', // Bitcoin
        'BTN' => 'Nu.', // Bhutanese Ngultrum
        'BWP' => 'P', // Botswanan Pula
        'BYN' => 'Br', // Belarusian Ruble
        'BYR' => 'Br', // Belarusian Ruble (pre-2016)
        'BZD' => 'BZ$', // Belize Dollar
        'CAD' => '$', // Canadian Dollar
        'CDF' => 'FC', // Congolese Franc
        'CHF' => 'Fr.', // Swiss Franc
        'CLP' => '$', // Chilean Peso
        'CNY' => '¥', // Chinese Yuan
        'COP' => '$', // Colombian Peso
        'CRC' => '₡', // Costa Rican Colón
        'CUC' => '$', // Cuban Convertible Peso
        'CUP' => '$', // Cuban Peso
        'CVE' => 'Esc', // Cape Verdean Escudo
        'CZK' => 'Kč', // Czech Koruna
        'DJF' => 'Fdj', // Djiboutian Franc
        'DKK' => 'kr', // Danish Krone
        'DOP' => '$', // Dominican Peso
        'DZD' => 'دج', // Algerian Dinar
        'EGP' => 'ج.م', // Egyptian Pound
        'ERN' => 'Nfk', // Eritrean Nakfa
        'ETB' => 'Br', // Ethiopian Birr
        'EUR' => '€', // Euro
        'FJD' => '$', // Fijian Dollar
        'FKP' => '£', // Falkland Islands Pound
        'GBP' => '£', // British Pound Sterling
        'GEL' => '₾', // Georgian Lari
        'GGP' => '£', // Guernsey Pound
        'GHS' => '₵', // Ghanaian Cedi
        'GIP' => '£', // Gibraltar Pound
        'GMD' => 'D', // Gambian Dalasi
        'GNF' => 'FG', // Guinean Franc
        'GTQ' => 'Q', // Guatemalan Quetzal
        'GYD' => '$', // Guyanaese Dollar
        'HKD' => '$', // Hong Kong Dollar
        'HNL' => 'L', // Honduran Lempira
        'HRK' => 'kn', // Croatian Kuna
        'HTG' => 'G', // Haitian Gourde
        'HUF' => 'Ft', // Hungarian Forint
        'IDR' => 'Rp', // Indonesian Rupiah
        'ILS' => '₪', // Israeli New Shekel
        'IMP' => '£', // Manx pound
        'INR' => '₹', // Indian Rupee
        'IQD' => 'ع.د', // Iraqi Dinar
        'IRR' => '﷼', // Iranian Rial
        'ISK' => 'kr', // Icelandic Króna
        'JEP' => '£', // Jersey Pound
        'JMD' => 'J$', // Jamaican Dollar
        'JOD' => 'JD', // Jordanian Dinar
        'JPY' => '¥', // Japanese Yen
        'KES' => 'Ksh', // Kenyan Shilling
        'KGS' => 'лв', // Kyrgystani Som
        'KHR' => '៛', // Cambodian Riel
        'KMF' => 'CF', // Comorian Franc
        'KPW' => '₩', // North Korean Won
        'KRW' => '₩', // South Korean Won
        'KWD' => 'KD', // Kuwaiti Dinar
        'KYD' => '$', // Cayman Islands Dollar
        'KZT' => '₸', // Kazakhstani Tenge
        'LAK' => '₭', // Laotian Kip
        'LBP' => 'ل.ل', // Lebanese Pound
        'LKR' => '₨', // Sri Lankan Rupee
        'LRD' => '$', // Liberian Dollar
        'LSL' => 'M', // Lesotho Loti
        'LTL' => 'Lt', // Lithuanian Litas
        'LVL' => 'Ls', // Latvian Lats
        'LYD' => 'LD', // Libyan Dinar
        'MAD' => 'د.م.', // Moroccan Dirham
        'MDL' => 'L', // Moldovan Leu
        'MGA' => 'Ar', // Malagasy Ariary
        'MKD' => 'ден', // Macedonian Denar
        'MMK' => 'K', // Myanmar Kyat
        'MNT' => '₮', // Mongolian Tugrik
        'MOP' => 'P', // Macanese Pataca
        'MRO' => 'UM', // Mauritanian Ouguiya
        'MUR' => '₨', // Mauritian Rupee
        'MVR' => 'Rf', // Maldivian Rufiyaa
        'MWK' => 'MK', // Malawian Kwacha
        'MXN' => '$', // Mexican Peso
        'MYR' => 'RM', // Malaysian Ringgit
        'MZN' => 'MT', // Mozambican Metical
        'NAD' => '$', // Namibian Dollar
        'NGN' => '₦', // Nigerian Naira
        'NIO' => 'C$', // Nicaraguan Córdoba
        'NOK' => 'kr', // Norwegian Krone
        'NPR' => '₨', // Nepalese Rupee
        'NZD' => '$', // New Zealand Dollar
        'OMR' => 'ر.ع.', // Omani Rial
        'PAB' => 'B/.', // Panamanian Balboa
        'PEN' => 'S/.', // Peruvian Nuevo Sol
        'PGK' => 'K', // Papua New Guinean Kina
        'PHP' => '₱', // Philippine Peso
        'PKR' => '₨', // Pakistani Rupee
        'PLN' => 'zł', // Polish Złoty
        'PYG' => '₲', // Paraguayan Guarani
        'QAR' => 'ر.ق', // Qatari Rial
        'RON' => 'lei', // Romanian Leu
        'RSD' => 'Дин.', // Serbian Dinar
        'RUB' => '₽', // Russian Ruble
        'RWF' => 'RF', // Rwandan Franc
        'SAR' => 'ر.س', // Saudi Riyal
        'SBD' => '$', // Solomon Islands Dollar
        'SCR' => '₨', // Seychellois Rupee
        'SDG' => '£', // Sudanese Pound
        'SEK' => 'kr', // Swedish Krona
        'SGD' => '$', // Singapore Dollar
        'SHP' => '£', // Saint Helena Pound
        'SLL' => 'Le', // Sierra Leonean Leone
        'SOS' => 'Sh', // Somali Shilling
        'SRD' => '$', // Surinamese Dollar
        'STD' => 'Db', // São Tomé and Príncipe Dobra
        'SVC' => '$', // Salvadoran Colón
        'SYP' => 'ل.س', // Syrian Pound
        'SZL' => 'E', // Swazi Lilangeni
        'THB' => '฿', // Thai Baht
        'TJS' => 'SM', // Tajikistani Somoni
        'TMT' => 'm', // Turkmenistani Manat
        'TND' => 'د.ت', // Tunisian Dinar
        'TOP' => 'T$', // Tongan Paʻanga
        'TRY' => '₺', // Turkish Lira
        'TTD' => 'TT$', // Trinidad and Tobago Dollar
        'TWD' => 'NT$', // New Taiwan Dollar
        'TZS' => 'Sh', // Tanzanian Shilling
        'UAH' => '₴', // Ukrainian Hryvnia
        'UGX' => 'USh', // Ugandan Shilling
        'USD' => '$', // United States Dollar
        'UYU' => '$U', // Uruguayan Peso
        'UZS' => 'лв', // Uzbekistan Som
        'VEF' => 'Bs', // Venezuelan Bolívar
        'VND' => '₫', // Vietnamese Đồng
        'VUV' => 'VT', // Vanuatu Vatu
        'WST' => 'T', // Samoan Tala
        'XAF' => 'FCFA', // CFA Franc BEAC
        'XAG' => 'oz t', // Silver (troy ounce)
        'XAU' => 'oz t', // Gold (troy ounce)
        'XCD' => 'EC$', // East Caribbean Dollar
        'XDR' => 'SDR', // Special Drawing Rights
        'XOF' => 'CFA', // CFA Franc BCEAO
        'XPF' => '₣', // CFP Franc
        'YER' => '﷼', // Yemeni Rial
        'ZAR' => 'R', // South African Rand
        'ZMK' => 'ZK', // Zambian Kwacha (pre-2013)
        'ZMW' => 'ZK', // Zambian Kwacha
        'ZWL' => '$' // Zimbabwean Dollar
    );

    if(array_key_exists($cur,$currencies)){
      return $currencies[$cur];
    }else{
        return $cur;
    }
}

// Function to get single detail 
function singleDetail($tableName, $columnName, $columnValue, $returnColumn){
    require('_config.php');
    // Prepare the SQL query
    $query = "SELECT * FROM `$tableName` WHERE `$columnName` = '$columnValue' ORDER BY `_id` DESC LIMIT 1";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows were found
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data and return it as an associative array
        while ($row = mysqli_fetch_assoc($result)){
            return $row[$returnColumn];
        }
    } else {
        return null;
    }
}

// Function to get ASC single detail 
function singleAscDetail($tableName, $columnName, $columnValue, $returnColumn){
    require('_config.php');
    // Prepare the SQL query
    $query = "SELECT * FROM `$tableName` WHERE `$columnName` = '$columnValue' ORDER BY `_id` ASC LIMIT 1";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows were found
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data and return it as an associative array
        while ($row = mysqli_fetch_assoc($result)){
            return $row[$returnColumn];
        }
    } else {
        return null;
    }
}

// Function to get count of records 
function recordCount($tableName, $columnName, $columnValue){
    require('_config.php');
    // Prepare the SQL query
    $query = "SELECT * FROM `$tableName` WHERE `$columnName` = '$columnValue'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows were found
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data and return it as an associative array
        return mysqli_num_rows($result);
    } else {
        return 0;
    }
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

// Function category filter 
function category_filter(){
    require('_config.php');
    $query = "SELECT * FROM `tblcategory` WHERE `_categorytype` = 'courses' AND `_status` = 'true'";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $html = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $categoryName = $row['_categoryname'];
        $categoryID = $row['_id'];
    
        $html .= '<option value="' . $categoryID . '">' . $categoryName .'</option>';
    }
    
    // Output the HTML code
    echo $html;
}

// Function listing courses 
function displayCourses($category = null, $search = null, $layout = 'slider', $limit = 10, $offset = 0) {
    require('_config.php');

    // Prepare the query
    $query = "SELECT * FROM tblcourse WHERE _status = 'true' ORDER BY CreationDate DESC";
    
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
        $coursePermalink = $row['_parmalink'];
        $discountPrice = $row['_discountprice'];

        // Determine the class name for the categories__thumb
        $thumbClass = 'course__meta-tag--cat' . $counter;

        if ($layout === 'slider') {
            $html .= '<div class="swiper-slide">
                        <div class="course__item">
                            <div class="course__item-inner">
                                <div class="course__thumb">
                                    <a href="course-detail?id=' . $coursePermalink . '"><img src="' . base_url('uploads/coursethumbnail/' . $courseThumbnail) . '" alt="course Images"></a>
                                    // <a href="#" class="course__btn course__btn--save"><i class="fa-regular fa-bookmark"></i></a>
                                </div>
                                <div class="course__content">
                                    <div class="course__content-top">
                                        <span class="course__meta-tag ' . $thumbClass . '"> ' . singleDetail('tblcategory', '_id', $categoryID, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="course-detail?id=' . $coursePermalink . '">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a><img src="assets/images/avatar/1.png" alt="avatar">' . singleDetail('tblusers', '_id', $mentorName, '_username') . '</a>
                                        <div class="course-price">
                                            <del>' . currency_symbol($_SESSION['baseCurrency']) . ' ' . _conversion($discountPrice,$_SESSION['baseCurrency']) . '</del> <span>' . currency_symbol($_SESSION['baseCurrency']) . ' ' . _conversion($coursePrice,$_SESSION['baseCurrency']) . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        } else if ($layout === 'grid') {
            $html .= '<div class="col-lg-4 col-md-6">
                        <div class="course__item">
                            <div class="course__item-inner">
                                <div class="course__thumb">
                                    <a href="course-detail?id=' . $coursePermalink . '"><img src="' . base_url('uploads/coursethumbnail/' . $courseThumbnail) . '" alt="course Images"></a>
                                    // <a href="#" class="course__btn course__btn--save course__btn--active"><i class="fa-regular fa-bookmark"></i></a>
                                </div>
                                <div class="course__content">
                                    <div class="course__content-top">
                                        <span class="course__meta-tag ' . $thumbClass . '">' . singleDetail('tblcategory', '_id', $categoryID, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="course-detail?id=' . $coursePermalink . '">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a><img src="assets/images/avatar/2.png" alt="avatar">' . singleDetail('tblusers', '_id', $mentorName, '_username') . '</a>
                                        <div class="course-price">
                                            <del>' . currency_symbol($_SESSION['baseCurrency']) . ' ' . _conversion($discountPrice,$_SESSION['baseCurrency']) . '</del> <span>' . currency_symbol($_SESSION['baseCurrency']) . ' ' . _conversion($coursePrice,$_SESSION['baseCurrency']) . '</span>
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

// Function get course count 
function getTotalCourses($category = null, $search = null) {
    require('_config.php');
    
    // Prepare the query
    $query = "SELECT COUNT(*) as total FROM tblcourse WHERE _status = 'true' ORDER BY CreationDate DESC";
    
    // Add category filter if provided
    if ($category !== null) {
        $query .= " AND _categoryid = '$category'";
    }
    
    // Add search filter if provided
    if ($search !== null) {
        $query .= " AND (_coursename LIKE '%$search%' OR _coursedescription LIKE '%$search%')";
    }
    
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Return the total number of courses
    return $row['total'];
}

// Function listing blogs posts 
function displayBlogPosts($category = null, $search = null, $page = 1, $limit = 10, $offset = 0) {
    require('_config.php');

    // Prepare the SQL query with filters and pagination
    $query = "SELECT * FROM `tblblog` WHERE `_status` = 'true' ORDER BY CreationDate DESC";
    
    if ($category) {
        $query .= " AND `_blogcategory` = '$category'";
    }

    if ($search) {
        $query .= " AND (`_blogtitle` LIKE '%$search%' OR `_blogdesc` LIKE '%$search%')";
    }

    // Add pagination to the query
    $query .= " LIMIT $limit OFFSET $offset";
    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any blog posts were found
    if (mysqli_num_rows($result) > 0) {
        // Initialize the HTML variable
        $html = '';
        $counter = 1;

        // Loop through the blog posts and bind the data to the HTML template
        while ($row = mysqli_fetch_assoc($result)) {
            $category = $row['_blogcategory'];
            $blogTitle = $row['_blogtitle'];
            $blogThumb = $row['_blogimg'];
            $blogParmalink = $row['_parmalink'];
            $blogDate = date_create($row['Creation_at_Date']);

            // Determine the class name for the categories__thumb
            $thumbClass = 'blog__meta-tag--cat' . $counter;

            // Add the HTML template with the data
            $html .= '<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                        <div class="blog__item">
                            <div class="blog__item-inner">
                                <div class="blog__thumb">
                                    <a href="blog-details?id=' . $blogParmalink . '"><img src="' . base_url('uploads/blogsPics/' . $blogThumb) . '" alt="blog Images"></a>
                                </div>

                                <div class="blog__content">
                                    <div class="blog__content-top">
                                        <span class="blog__meta-tag ' . $thumbClass .'">' . singleDetail('tblcategory', '_id', $category, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="blog-details?id=' . $blogParmalink . '">' . $blogTitle . '</a></h6>

                                    <div class="blog__content-bottom blog__content-bottom--border">
                                        <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span>
                                            ' . date_format($blogDate,"d F Y") . '</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
           
            $counter++;
            if ($counter > 3) {
                $counter = 1;
            }        
        }

        // Output the HTML code
        echo $html;
    } else {
        // No blog posts found
        echo 'No blog posts found.';
    }
}

// Function to get blog count 
function getTotalBlogPosts($category = null, $search = null) {
    require('_config.php');

    // Prepare the SQL query with filters
    $query = "SELECT COUNT(*) as total FROM `tblblog` WHERE `_status` = 'true'";

    if ($category) {
        $query .= " AND `_blogcategory` = '$category'";
    }

    if ($search) {
        $query .= " AND (`_blogtitle` LIKE '%$search%' OR `_blogdesc` LIKE '%$search%')";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Return the total number of blog posts
    return $row['total'];
}

// Function to get lesson plans 
function displayLessonPlans($courseid){
    require('_config.php');
    $query = "SELECT * FROM `tbllessons` WHERE `_courseid` = $courseid AND `_status` = 'true'";
    // Execute the query and fetch the results
    $result = mysqli_query($conn, $query);

    $lessonHtml = '';
    $number = 1;
    // Loop through the fetched results and build the HTML template
    while ($row = mysqli_fetch_assoc($result)) {
        $lessonName = $row['_lessonname'];
        $lessonDesc = $row['_lessondescription'];

        // Build the HTML for each lesson and append it to the $lessonHtml string
        $lessonHtml .= ' <div class="col-12">
                            <div class="accordion__item">
                                <div class="accordion__header" id="faq' . $number . '">
                                    <button class="accordion__button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faqBody' . $number . '" aria-expanded="false"
                                        aria-controls="faqBody' . $number . '">
                                        <span class="lesson-name">' . $lessonName . '</span> <span
                                            class="lesson"><span class="lesson-number">Lesson ' . str_pad($number, 2, '0', STR_PAD_LEFT) . '</span> <span
                                                class="plus-icon"></span> </span>
                                    </button>
                                </div>
                                <div id="faqBody1" class="accordion-collapse collapse" aria-labelledby="faq' . $number . '"
                                    data-bs-parent="#faqAccordion' . $number . '">
                                    <div class="accordion__body">
                                        ' . $lessonDesc . '
                                    </div>
                                </div>
                            </div>
                        </div>';
        $number++;                
    }

    // Output the generated lesson HTML
    echo $lessonHtml;
}

// Function user register 
function userRegister($username, $email, $phone, $password){
    require('_config.php');

    // Check if the phone number or email already exists
    $checkQuery = "SELECT COUNT(*) FROM `tblusers` WHERE `_userphone` = ? OR `_useremail` = ?";
    $checkStmt = mysqli_prepare($conn, $checkQuery);
    mysqli_stmt_bind_param($checkStmt, "ss", $phone, $email);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_bind_result($checkStmt, $count);
    mysqli_stmt_fetch($checkStmt);
    mysqli_stmt_close($checkStmt);

    if ($count > 0) {
        // Phone number or email already exists
        require('includes/_alert.php');
        $alert = new PHPAlert();
        $alert->warn("User Already Exists");
        return false;
    }

    // Generate an OTP (One-Time Password)
    $otp = rand(100000, 999999);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the INSERT statement with prepared statements
    $query = "INSERT INTO `tblusers`(`_username`, `_useremail`, `_userphone`, `_usertype`, `_userstatus`, `_userpassword`, `_userotp`, `_userverify`)
            VALUES (?, ?, ?, 0, 'true', ?, ?, 'false')";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $phone, $hashedPassword, $otp);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        // User signup successful
        sendSMS($phone, $otp);
        echo "<script>window.location.href = 'verify?phone=" . $phone . "';</script>";
    } else {
        // User signup failed
        require('includes/_alert.php');
        $alert = new PHPAlert();
        $alert->warn("Something Went Wrong");
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
}

// Function to send SMS 
function sendSMS($phone,$message){
    $fields = array(
        "variables_values" => "$message",
        "route" => "otp",
        "numbers" => "$phone",
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "" ._smsconfig('_baseurl') . "",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "authorization: " . _smsconfig('_apikey') . "",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      return false;
    } else {
      return true;
    }
}

// Function to verify OTP 
function verifyOTP($phone,$otp){
    require('_config.php');
     // Your database connection code here

    // Fetch the stored OTP for the given email from the database
    $query = "SELECT `_userotp` FROM `tblusers` WHERE `_userphone` = '$phone' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedOTP = $row['_userotp'];

        // Compare the stored OTP with the OTP entered by the user
        if ($storedOTP == $otp) {
            // OTP is verified
            // Update the user's verification status in the database
            $updateQuery = "UPDATE `tblusers` SET `_userverify` = 'true' WHERE `_userphone` = '$phone'";
            mysqli_query($conn, $updateQuery);

            return true;
        }else{
            return false;
        }
    }

    return false;
}

// Function to login user 
function userLogin($emailOrPhone, $password) {
    require('_config.php');

    // Prepare and bind the SELECT statement with prepared statements
    $query = "SELECT `_userphone`, `_userpassword`, `_userverify`  FROM `tblusers` WHERE `_useremail` = ? OR `_userphone` = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $emailOrPhone, $emailOrPhone);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Fetch the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if a row is returned
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row['_userpassword'])) {
            // Password is correct, retrieve the user ID
            $userid = $row['_userphone'];

            // Store the user ID in the session
            $_SESSION['userid'] = $userid;
            if($row['_userverify'] == 'false' || $row['_userverify'] == false){
                // Generate an OTP (One-Time Password)
                $otp = rand(100000, 999999);
                $query = "UPDATE `tblusers` SET `_userotp`= '$otp' WHERE `_userphone` = '$userid'";
                $stmt = mysqli_query($conn,$query);
                sendSMS($userid, $otp);
                echo "<script>window.location.href = 'verify?phone=" . $userid . "';</script>";
                return false;
            }else{
                // Login successful
                return true;
            }
        }else{
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->warn("Wrong Password");
        }
    }else{
        require('includes/_alert.php');
        $alert = new PHPAlert();
        $alert->warn("User Not Found");
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Login failed
    return false;
}

// Function to reset password 
function resetPassword($phone) {
    // Your database connection code here
    require('_config.php');

    // Generate a new password
    $newPassword = rand(100000, 999999);

    // Hash the new password for security
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Prepare and bind the UPDATE statement with prepared statements
    $query = "UPDATE `tblusers` SET `_userpassword` = ? WHERE `_useremail` = ? OR `_userphone` = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $hashedPassword, $phone, $phone);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        // Password reset successful

        // Close the prepared statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        // Return the new password
        sendSMS($phone,$newPassword);
        require('includes/_alert.php');
        $alert = new PHPAlert();
        $alert->success("Password Reset Done");
    } else {
        // Password reset failed

        // Close the prepared statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return false;
    }
}

// Function to update profile 
function updateUser($username, $email, $phone, $bio, $age, $location, $state, $pin) {
    // Your database connection code here
    require('_config.php');
    require('_alert.php');
    $user = $_SESSION['userid'];
    // Get the current user's information
    $query = "SELECT _useremail, _userphone FROM tblusers WHERE _userphone = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $currentEmail, $currentPhone);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Check if email or phone number has changed
    if ($email !== $currentEmail || $phone !== $currentPhone) {
        // Check if the new email or phone number is linked with any other account
        $query = "SELECT COUNT(*) AS count FROM tblusers WHERE (_useremail = ? OR _userphone = ?) AND _userphone <> ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $email, $phone, $user);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if ($count > 0) {
            // New email or phone number is linked with another account
            $alert = new PHPAlert();
            $alert->warn("Email or Phone is linked with another account");
        }
    }

    // Update the user's information
    $query = "UPDATE tblusers SET _username = ?, _useremail = ?, _userphone = ?, _userbio = ?, _userage = ?, _userlocation = ?, _userstate = ?, _userpin = ? WHERE _userphone = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssissss", $username, $email, $phone, $bio, $age, $location, $state, $pin, $user);
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        // User update successful
        $alert = new PHPAlert();
        $alert->success("Account Updated");
    } else {
        // User update failed
        $alert = new PHPAlert();
        $alert->warn("Something Went Wrong");
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
}

// Function to get user transaction 
function userTransactions(){
    require('_config.php');
    $user = $_SESSION['userid'];
    // Execute the SELECT query
    $query = "SELECT * FROM tblpayment WHERE `_useremail` = '$user' ORDER BY CreationDate DESC";
    $result = mysqli_query($conn, $query);
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and fetch the data
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['_id'];
            $currency = $row['_currency'];
            $amount = $row['_amount'];
            $razorpayid = $row['_razorpayid'];
            $couponcode = $row['_couponcode'];
            $status = $row['_status'];
            $productid = $row['_productid'];
            $updationDate = date_create($row['CreationDate']);
            ?>
             <tr class="align-middle" style="white-space: nowrap;">
                <td>
                    <?php echo $razorpayid; ?>
                </td>
                <td><?php echo date_format($updationDate,"d F Y (h:i a)"); ?></td>
                <td><a href='course-detail?id=<?php echo singleDetail('tblcourse', '_id', $productid, '_parmalink'); ?>'>Check Product</a></td>
                <td>
                    <div class="d-flex align-items-center">
                        <span><?php echo $currency; ?>&nbsp;</span>
                        <span><?php echo $amount; ?></span>
                    </div>
                </td>
                <td><?php echo $couponcode; ?></td>
                <td><?php 
                    if($status == 'failed'){
                    echo "<span style='color:red'>Failed</span>";
                    }else{
                    echo "<span style='color:green'>Success</span>";
                    } ?>
            </tr><?php 
        }
    } else {
        // No data found
        echo "<tr><td colspan='7'><span style='color:red;text-align:center'>No Record Found</span></td></tr>";
    }

}

// Function to get user courses
function userCourses(){
    require('_config.php');
    $user = $_SESSION['userid'];
    // Execute the SELECT query
    $query = "SELECT * FROM tblpurchasedcourses WHERE `_userid` = $user ORDER BY CreationDate DESC";
    $result = mysqli_query($conn, $query);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and fetch the data
        while ($row = mysqli_fetch_assoc($result)) {
            $courseid = $row['_courseid'];
            $purchasedate = date_create($row['CreationDate']);
            $coursestatus = $row['_coursestatus'];
            $coursetype = singleDetail('tblcourse', '_id', $courseid, '_coursechannel');
            // Output the data in the table rows ?>

            <div class="coursedetails__coursereviews">
                <div class="coursedetails__coursereviews-author">
                    <div class="coursedetails__coursereviews-thumb">
                        <img src="<?php echo base_url('uploads/coursethumbnail/' . singleDetail('tblcourse', '_id', $courseid, '_thumbnail')); ?>" alt="author">
                    </div>
                    <div class="coursedetails__coursereviews-designation">
                        <h6><?php echo limitText(singleDetail('tblcourse', '_id', $courseid, '_coursename'), 60); ?></h6>
                        Purchased on : <span><?php echo date_format($purchasedate,"d F Y"); ?></span>&nbsp;|
                        Course Status :
                        <?php
                          if($coursestatus == 'active'){ ?>
                            <span style="color:green">Active</span>
                          <?php }else{?>
                            <span style="color:red">In-Active</span>
                          <?php }  
                        ?>
                        <blockquote>
                        <p><?php echo limitText(singleDetail('tblcourse', '_id', $courseid, '_coursedescription'), 180); ?></p>
                        </blockquote>
                    </div>
                </div>
                <div class="coursedetails__coursereviews-rating"><?php
                    if($coursestatus == 'active' && $coursetype == 'online'){ ?>
                        <a class='trk-btn trk-btn--rounded trk-btn--primary1' style="background-color: green;color:white" href='view-course?id=<?php echo singleDetail('tblcourse', '_id', $courseid, '_parmalink'); ?>&lesson=<?php echo singleAscDetail('tbllessons', '_courseid', $courseid, '_id'); ?>'>View Course</a>
                    <?php }else if($coursestatus == 'in-active'){ ?>
                        <a class='trk-btn trk-btn--rounded trk-btn--primary1' style="background-color: red;color:white">Course Suspended</a>
                    <?php }else if($coursetype == 'offline' ){ ?>
                        <a class='trk-btn trk-btn--rounded trk-btn--primary1' style="background-color: #e5b519;">Visit Branch</a>
                    <?php } ?>                    
                </div>
            </div>
            <?php
        }
    } else {
        // No data found
        echo "<tr><td colspan='7'><span style='color:red;text-align:center'>No Record Found</span></td></tr>";
    }

}

// Function to get fee markups 
function feeMarkup(){
    require('_config.php');
    // Execute the query to retrieve fee markups
    $query = "SELECT * FROM `tbltaxes` WHERE `_status` = 'true'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Loop through the rows and display the fee markups
        while ($row = mysqli_fetch_assoc($result)) {
            $taxName = $row['_taxname'];
            $taxAmount = $row['_taxamount'];
            $taxType = $row['_taxtype'];
            if($taxType == 'Fixed'){
                 // Display the fee markup in the template
                echo '<tr>
                        <th scope="row">' . $taxName . '</th>
                        <td>+ ' . currency_symbol($_SESSION['baseCurrency']); echo _conversion($taxAmount,$_SESSION['baseCurrency']) . '</td>
                    </tr>';
            }else{
                 // Display the fee markup in the template
                 echo '<tr>
                        <th scope="row">' . $taxName . '</th>
                        <td>+ ' . $taxAmount . '%</td>
                    </tr>';
            }
        }
    } else {
        // Query failed
        echo 'No Fee Applicable';
    }
}

// Function to get discount markup
function discountMarkup($couponCode,$couponType,$baseamount){
    require('_config.php');
     // Prepare and bind the SELECT statement with prepared statements
     $query = "SELECT * FROM `tblcoupon` WHERE `_couponname` = ? AND `_totaluse` < `_maxusage` LIMIT 1";
     $stmt = mysqli_prepare($conn, $query);
     mysqli_stmt_bind_param($stmt, "s", $couponCode);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
 
     // Check if a coupon is found
     if ($row = mysqli_fetch_assoc($result)) {
        $couponamount = _conversion($row['_couponamount'],$_SESSION['baseCurrency']);
        $amount = _conversion($baseamount,$_SESSION['baseCurrency']);
         // Bind the coupon details to the template
         if($row['_couponprod'] == $couponType){
            if($row['_couponcondition'] == 'more'){
                if($amount >= $couponamount){
                    if($row['_coupontype'] == 'Fixed'){
                        echo '<th scope="row">' . $row['_couponname'] . '</th>';
                        echo '<td>- ' . currency_symbol($_SESSION['baseCurrency']); echo $couponamount . '</td>';
                        $_SESSION['discount'] = $row['_couponamount'];
                        $_SESSION['couponcode'] = $couponCode;
                        require('includes/_alert.php');
                        $alert = new PHPAlert();
                        $alert->success("Coupon Applied");
                    }else if($row['_coupontype'] == 'Variable'){
                        echo '<th scope="row">' . $row['_couponname'] . '</th>';
                        echo '<td>- ' . $row['_couponamount'] . '%</td>';
                        $discountAmount = ($row['_couponamount'] / 100) * $baseamount;
                        $_SESSION['discount'] = $discountAmount;
                        $_SESSION['couponcode'] = $couponCode;
                        require('includes/_alert.php');
                        $alert = new PHPAlert();
                        $alert->success("Coupon Applied");
                    }
                }else if($couponamount <= $amount){
                    require('includes/_alert.php');
                    $alert = new PHPAlert();
                    $alert->warn("Coupon Not Good");
                }
            }else if($row['_couponcondition'] == 'less'){
                if($amount <= $couponamount){
                    require('includes/_alert.php');
                    $alert = new PHPAlert();
                    $alert->warn("Coupon Not Applicable");
                    
                }else if($couponamount <= $amount){
                    if($row['_coupontype'] == 'Fixed'){
                        echo '<th scope="row">' . $row['_couponname'] . '</th>';
                        echo '<td>- ' . currency_symbol($_SESSION['baseCurrency']); echo $couponamount . '</td>';
                        $_SESSION['discount'] = $row['_couponamount'];
                        $_SESSION['couponcode'] = $couponCode;
                        require('includes/_alert.php');
                        $alert = new PHPAlert();
                        $alert->success("Coupon Applied");
                    }else if($row['_coupontype'] == 'Variable'){
                        echo '<th scope="row">' . $row['_couponname'] . '</th>';
                        echo '<td>- ' . $row['_couponamount'] . '%</td>';
                        $discountAmount = ($row['_couponamount'] / 100) * $baseamount;
                        $_SESSION['discount'] = $discountAmount;
                        $_SESSION['couponcode'] = $couponCode;
                        require('includes/_alert.php');
                        $alert = new PHPAlert();
                        $alert->success("Coupon Applied");
                    }
                }
            }
         }else{
            require('includes/_alert.php');
            $alert = new PHPAlert();
            $alert->warn("Invalid Coupon");
         }
     }else{
        require('includes/_alert.php');
        $alert = new PHPAlert();
        $alert->warn("Invalid Coupon");
     }
 
     // Close the prepared statement and database connection
     mysqli_stmt_close($stmt);
}

// Function to get total bill amount
function getTotal($amount){
    $totalArr = array();
    require('_config.php');
    // Execute the query to retrieve fee markups
    $query = "SELECT * FROM `tbltaxes` WHERE `_status` = 'true'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Loop through the rows and display the fee markups
        while ($row = mysqli_fetch_assoc($result)) {
            $taxAmount = $row['_taxamount'];
            $taxType = $row['_taxtype'];
            if($taxType == 'Fixed'){
                array_push($totalArr,$taxAmount);
            }else{
                $taxAmount = ($taxAmount / 100) * $amount;
                array_push($totalArr,$taxAmount);
            }
        }
    }
    if(isset($_SESSION['discount'])){
        $finalAmount = $amount - $_SESSION['discount'];
    }else{
        $finalAmount = $amount;
    }
    return $finalAmount + array_sum($totalArr);
    
}

// Function for payment callback 
function paymentCallback($razorpayId, $userEmail, $amount, $currency, $status, $producttype, $productid, $couponcode){
    // Perform any additional processing or validation if needed
    require('_config.php');

    if($producttype == 'course'){
        $producttitle = singleDetail('tblcourse', '_id', $productid, '_coursename');
    }else if($producttype == 'membership'){
        $producttitle = singleDetail('tblmembership', '_id', $productid, '_membershipname');
    }
    // Prepare the SQL query with placeholders
    $query = "INSERT INTO `tblpayment`(`_razorpayid`, `_useremail`, `_amount`, `_currency`, `_status`, `_producttitle`, `_productid`, `_producttype`, `_couponcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo "Error: " . $conn->error;
        $conn->close();
        exit;
    }

    // Bind the parameters to the statement
    $stmt->bind_param("ssdssssss", $razorpayId, $userEmail, $amount, $currency, $status, $producttitle, $productid, $producttype, $couponcode);

    // Execute the statement
    if ($stmt->execute()) {
        if($status == 'success'){
            if($producttype == 'course'){
                if(insertPurchasedCourse($productid, $userEmail)){
                    return true;
                }else{
                    return false;
                }
            }else if($producttype == 'membership'){
                if(updateUserMembership($userEmail, $productid, date('Y-m-d'), singleDetail('tblmembership', '_id', $productid, '_duration'))){
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            echo "<script>window.location.href = 'my-account?purchase=failed';</script>";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

// Function for purchasing course
function insertPurchasedCourse($courseId, $userId) {
    require('_config.php');

    // Construct the SQL query
    $query = "INSERT INTO `tblpurchasedcourses`(`_courseid`, `_userid`, `_coursestatus`) VALUES ('$courseId', '$userId', 'active')";
    // Execute the query
    if (mysqli_query($conn, $query)) {
        emailNotification('purchase',$courseId,'test mail');
        return true;
    } else {
        return false;
    }
}

// Function for purchasing memebership 
function updateUserMembership($userPhone, $userMembership, $userMemStart, $userMemsLeft) {
    require('_config.php');

    // Construct the SQL query
    $query = "UPDATE `tblusers` SET `_usermembership`='$userMembership', `_usermemstart`='$userMemStart', `_usermemsleft`='$userMemsLeft' WHERE `_userphone`='$userPhone'";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
}

// Function to get lesson plan for view course 
function viewLessonPlan($courseID,$param){
    require('_config.php');
    $query = "SELECT * FROM `tbllessons` WHERE `_courseid` = $courseID AND `_status` = 'true'";
    // Execute the query and fetch the results
    $result = mysqli_query($conn, $query);

    $lessonHtml = '';
    $number = 1;
    // Loop through the fetched results and build the HTML template
    while ($row = mysqli_fetch_assoc($result)) {
        $lessonName = $row['_lessonname'];
        $lessonDesc = $row['_lessondescription'];
        $lessonID = $row['_id'];
        // Build the HTML for each lesson and append it to the $lessonHtml string
        $lessonHtml .= ' <div class="col-12" style="border: 1px solid #A7ADB6;border-radius:12px">
                            <div class="accordion__item">
                                <div class="accordion__header" id="faq' . $number . '">
                                    <button class="accordion__button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faqBody' . $number . '" aria-expanded="false"
                                        aria-controls="faqBody' . $number . '">
                                        <span class="lesson-name" style="font-size:16px">' . limitText($lessonName,15) . '</span> <span
                                            class="lesson"><span class="lesson-number">Lesson ' . str_pad($number, 2, '0', STR_PAD_LEFT) . '</span> <span
                                                class="plus-icon"></span> </span>
                                    </button>
                                </div>
                                <div id="faqBody' . $number . '" class="accordion-collapse collapse" aria-labelledby="faq' . $number . '"
                                    data-bs-parent="#faqAccordion' . $number . '">
                                    <div class="accordion__body">
                                        ' . $lessonDesc . '<br><br>
                                        <a href="view-course?id='.$param.'&lesson='.$lessonID.'" class="trk-btn trk-btn--primary1" style="width:100%;border-radius:10px">Learn lesson</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
        $number++;                
    }

    // Output the generated lesson HTML
    echo $lessonHtml;
}

// Function to get all live lessons of instructor 
function getLessonPlansByTeacherEmail($teacherID) {
    require('_config.php');
    // Search for courses based on teacher's email
    $courseQuery = "SELECT * FROM `tblcourse` WHERE `_teacheremailid` = '$teacherID' AND `_status` = 'true'";
    $courseResult = $conn->query($courseQuery);

    // Get the current date
    $currentDate = date('Y-m-d');

    $lessonPlans = array();

    if ($courseResult->num_rows > 0) {
        while ($courseRow = $courseResult->fetch_assoc()) {
        $courseId = $courseRow['_id'];
        $courseThumbnail = $courseRow['_thumbnail'];

        // Search for lesson plans assigned to the course
        $lessonQuery = "SELECT * FROM `tbllessons` WHERE `_courseid` = '$courseId' AND `_lessontype` = 'live' AND `_lessondate` >= '$currentDate' ORDER BY `_lessondate`, `_lessontime`";
        $lessonResult = $conn->query($lessonQuery);

        if ($lessonResult->num_rows > 0) {
            while ($lessonRow = $lessonResult->fetch_assoc()) {
            $lessonDate = $lessonRow['_lessondate'];
            $lessonTime = $lessonRow['_lessontime'];
            $lessonId = $lessonRow['_id'];
            $lessonURL = $lessonRow['_lessonurl'];

            $lessonPlans[] = array(
                'courseId' => $courseId,
                'lessonDate' => $lessonDate,
                'lessonTime' => $lessonTime,
                'lessonId' => $lessonId,
                'courseId' => $courseId,
                'courseThumbnail' => $courseThumbnail,
                'lessonURL' => $lessonURL
            );
            }
        }
        }
    }

    // Close the connection
    $conn->close();

    // Sort the lesson plans based on date and time
    usort($lessonPlans, function($a, $b) {
        $dateComparison = strcmp($a['lessonDate'], $b['lessonDate']);
        if ($dateComparison !== 0) {
        return $dateComparison;
        }
        return strcmp($a['lessonTime'], $b['lessonTime']);
    });

    return $lessonPlans;
}

// Function to get remaining time 
function calculateTimePending($startDate, $startTime) {
    date_default_timezone_set(_siteconfig('_timezone'));
  
    $currentDateTime = new DateTime();
    $eventDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $startDate . ' ' . $startTime);
    echo $eventDateTime;
    if ($currentDateTime < $eventDateTime) {
        $remainingTime = $currentDateTime->diff($eventDateTime);
        return $remainingTime;
    } else {
        return 'Not Prepared';
    }
}

// Function to load memberships 
function loadMemberships(){
    require('_config.php');
    
    // Prepare the SQL query
    $query = "SELECT * FROM `tblmembership` WHERE `_status` = 'true'";
    
    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any membership plans were found
    if (mysqli_num_rows($result) > 0) {
        // Initialize the HTML variable
        $html = '';

        // Loop through the membership plans and bind the data to the HTML template
        while ($row = mysqli_fetch_assoc($result)) {
            $membershipName = $row['_membershipname'];
            $membershipDesc = $row['_membershipdesc'];
            $duration = $row['_duration'];
            $price = $row['_price'];
            $permalink = $row['_membershippermalink'];

            // Generate the HTML code for each membership plan using the provided template
            $html .= '<div class="col-md-4 ml-auto pricing-box align-self-center">
                        <div class="card mb-4">
                            <div class="card-body p-4 text-center">
                                <h5 class="font-weight-normal">' . $membershipName . '</h5>
                                <sup>' . currency_symbol($_SESSION['baseCurrency']) . '</sup><span class="text-dark display-5">' . _conversion($price,$_SESSION['baseCurrency']) . '</span>
                                <h6 class="font-weight-light font-14">' . $duration . ' Month (s)</h6>
                                <p class="mt-4">' . $membershipDesc . '</p>
                            </div>
                            <a class="btn btn-danger-gradiant p-3 btn-block border-0 text-white" style="background-color:#B1FDAF" href="checkout?id=' . $permalink .'&type=membership">CHOOSE PLAN </a>
                        </div>
                    </div>';
        }

        // Output the HTML code
        echo $html;
    } else {
        // No membership plans found
        echo 'No membership plans found.';
    }
}

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Function to send email notification 
function emailNotification($notification,$productid = null,$subject){
    require('_config.php');

    $sql = "SELECT * FROM `tblemailconfig` WHERE `_supplierstatus` = 'true'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);
    require_once "../vendor/autoload.php";
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    foreach ($query as $data) {
        //Enable SMTP debugging.
        // $mail->SMTPDebug = 10;                                       
        //Set SMTP host name                          
        $mail->Host = $data['_hostname'];
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = $data['_smtpauth'];
        //Provide username and password     
        $mail->Username = $data['_emailaddress'];
        $mail->Password = $data['_emailpassword'];
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "ssl";
        //Set TCP port to connect to
        $mail->Port = $data['_hostport'];

        $mail->From = $data['_emailaddress'];
        $mail->FromName = $data['_sendername'];
        //Address to which recipient will reply
        $mail->addReplyTo($data['_emailaddress'], "Reply");
    }
    //To address and namS
    $mail->addAddress(singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_useremail')); //Recipient name is optional

    $mail->isHTML(true);

    $sql = "SELECT * FROM `tblemailtemplates`";
    $query = mysqli_query($conn, $sql);
    foreach ($query as $data) {
        if($notification == 'purchase'){
            $template = $data['_purchasetemplate'];
        }
    }
    if($notification == 'purchase'){
        $variables = array();
        $variables['user_name'] = singleDetail('tblusers', '_userphone', $_SESSION['userid'], '_username');
        $variables['product_price'] = singleDetail('tblcourse', '_id', $productid, '_discountprice');
        $variables['product_name'] = singleDetail('tblcourse', '_id', $productid, '_coursename');
        $variables['site_title'] = _siteconfig('_sitetitle');
        $variables['site_logo'] = $dashboard_url . '/uploads/images/' . _siteconfig('_sitelogo');
        $sendmail = _usetemplate($template, $variables);
    }

    $mail->Subject = 'Test Email';
    $mail->Body = $sendmail;
    $mail->IsHTML(true);
    if ($mail->send()) {
    } else {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

function _usetemplate($template, $data)
{
    foreach ($data as $key => $value) {
        $template = str_replace('{{ ' . $key . ' }}', $value, $template);
    }

    return $template;
}

// Function to get course status 
function getCourseStatus($userId, $courseId) {
    // Establish your database connection
    require('_config.php');

    // Construct the query
    $query = "SELECT `_coursestatus` FROM `tblpurchasedcourses` WHERE `_userid` = $userId AND `_courseid` = $courseId";

    // Execute the query and fetch the result
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Return the course status
    if ($row) {
        return $row['_coursestatus'];
    }

    // Return null if no result found
    return null;
}

?>
