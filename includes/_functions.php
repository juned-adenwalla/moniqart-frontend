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
    $query = "SELECT * FROM `$tableName` WHERE `$columnName` = '$columnValue'";

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
        $coursePermalink = $row['_parmalink'];
        $discountPrice = $row['_discountprice'];

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
                                        <span class="course__meta-tag ' . $thumbClass . '"> ' . singleDetail('tblcategory', '_id', $categoryID, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="course-detail?id=' . $coursePermalink . '">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a><img src="assets/images/avatar/1.png" alt="avatar">' . singleDetail('tblusers', '_id', $mentorName, '_username') . '</a>
                                        <div class="course-price">
                                            <del>' . currency_symbol($_SESSION['baseCurrency']) . ' ' ._conversion($discountPrice,$_SESSION['baseCurrency']) . '</del> <span>' . currency_symbol($_SESSION['baseCurrency']) . ' ' ._conversion($coursePrice,$_SESSION['baseCurrency']) . '</span>
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
                                    <img src="' . base_url('uploads/coursethumbnail/' . $courseThumbnail) . '" alt="course Images">
                                    <a href="#" class="course__btn course__btn--save course__btn--active"><i class="fa-regular fa-bookmark"></i></a>
                                </div>
                                <div class="course__content">
                                    <div class="course__content-top">
                                        <span class="course__meta-tag ' . $thumbClass . '">' . singleDetail('tblcategory', '_id', $categoryID, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="course-detail?id=' . $coursePermalink . '">' . $courseName . '</a></h6>
                                    <div class="course__content-bottom">
                                        <a><img src="assets/images/avatar/2.png" alt="avatar">' . singleDetail('tblusers', '_id', $mentorName, '_username') . '</a>
                                        <div class="course-price">
                                            <del>' . currency_symbol($_SESSION['baseCurrency']) . ' ' ._conversion($discountPrice,$_SESSION['baseCurrency']) . '</del> <span>' . currency_symbol($_SESSION['baseCurrency']) . ' ' ._conversion($coursePrice,$_SESSION['baseCurrency']) . '</span>
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

// Function listing blogs posts 
function displayBlogPosts($category = null, $search = null, $page = 1, $limit = 10) {
    require('_config.php');

    // Prepare the SQL query with filters and pagination
    $query = "SELECT * FROM `tblblog` WHERE `_status` = 'true'";
    
    if ($category) {
        $query .= " AND `_blogcategory` = '$category'";
    }

    if ($search) {
        $query .= " AND (`_blogtitle` LIKE '%$search%' OR `_blogdesc` LIKE '%$search%')";
    }

    // Calculate the offset based on the current page and limit
    $offset = ($page - 1) * $limit;

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
            $blogDate = date_create($row['Creation_at_Date']);

            // Determine the class name for the categories__thumb
            $thumbClass = 'blog__meta-tag--cat' . $counter;

            // Add the HTML template with the data
            $html .= '<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                        <div class="blog__item">
                            <div class="blog__item-inner">
                                <div class="blog__thumb">
                                    <img src="' . base_url('uploads/blogsPics/' . $blogThumb) . '" alt="blog Images">
                                </div>

                                <div class="blog__content">
                                    <div class="blog__content-top">
                                        <span class="blog__meta-tag ' . $thumbClass .'">' . singleDetail('tblcategory', '_id', $category, '_categoryname') . '</span>
                                    </div>
                                    <h6><a href="blog-details.html">' . $blogTitle . '</a></h6>

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
    // Your database connection code here
    require('_config.php');

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
        sendSMS($phone,$otp);
        return true;
   
    } else {
        // User signup failed
        echo false;
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

?>
