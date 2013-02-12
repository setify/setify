<?php
class SystemStyle
{
    public function __construct()
    {
        add_action('init', array($this, 'systemStyle'));
    }

    function systemStyle()
    {
        wp_register_style('master-min', plugins_url('css/master.min.css', __FILE__));
        wp_enqueue_style('master-min');
    }
}

$systemStyle = new SystemStyle();