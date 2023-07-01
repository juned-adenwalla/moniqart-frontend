<?php 

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

function base_url($url)
{
    require('_config.php');
    return "$dashboard_url" . $url;
}

function frontend_url($url)
{
    require('_config.php');
    return "$site_url" . $url;
}

?>