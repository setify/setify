<?php
class DashboardDefaults
{
    public function __construct()
    {
        add_action('wp_dashboard_setup', array($this, 'removeDashboardWidgets'));
    }

    function removeDashboardWidgets()
    {
        global $wp_meta_boxes;
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

    }
}

$DashboardDefaults = new DashboardDefaults();