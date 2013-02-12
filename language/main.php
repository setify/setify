<?php
class SystemLanguage
{
    public function __construct()
    {
        load_textdomain( 'setify', WP_CONTENT_DIR.'/languages/setify-'.get_locale().'.mo');
        load_textdomain( 'gastro', WP_CONTENT_DIR.'/languages/gastro-'.get_locale().'.mo');
    }
}

$SystemLanguage = new SystemLanguage();