<?php
class SystemMenu
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'editAdminMenu'));
        // Change menu order
        add_filter('custom_menu_order', array($this, 'customMenuOrder'));
        add_filter('menu_order', array($this, 'customMenuOrder'));
    }

    function editAdminMenu()
    {
        global $menu;
        global $submenu;

        remove_menu_page('tools.php');
        remove_submenu_page('options-general.php', 'options-permalink.php');
        remove_submenu_page('options-general.php', 'page=email_template');

        // Remove the Theme Editor submenu
        add_submenu_page(
            'options-general.php',
            __('Delete Site', 'setify'),
            __('Delete Site', 'setify'),
            'manage_options',
            'ms-delete-site.php'
        );
    }

    function customMenuOrder($menuOrder)
    {
        if (!$menuOrder) return true;
        return array(
            'index.php', // Dashboard
            'separator1', // First separator
            'edit.php?post_type=page', // Pages
            'edit.php?post_type=meals', // Meals
            'edit.php', // Posts
            'upload.php', // Media
            'link-manager.php', // Links
            'edit-comments.php', // Comments
            'separator2', // Second separator
            'themes.php', // Appearance
            'plugins.php', // Plugins
            'users.php', // Users
            'options-general.php', // Settings
            'separator-last', // Last separator
        );
    }
}

$SystemMenu = new SystemMenu();