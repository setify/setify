<?php
class DashboardStorage
{
    public function __construct()
    {
        add_action('wp_dashboard_setup', array($this, 'addDashboardStorage'));
    }

    function addDashboardStorage()
    {
        global $wp_meta_boxes;
        wp_add_dashboard_widget('storage_widget', 'Speicherplatz', array($this, 'dashboardStorageWidget'));
    }

    function dashboardStorageWidget()
    {
        include_once dirname(__FILE__) . "/widget/widget.php";
    }

}

$DashboardStorage = new DashboardStorage();