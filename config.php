<?php

    /** nome do host do MySQL */
    /**define("DB_HOST", "localhost");

    /** caminho absoluto para a pasta do sistema **/
    if ( !defined("ABSPATH") )
        define("ABSPATH", dirname(__FILE__) . "/");
        
    /** caminho no server para o sistema **/
    if ( !defined("BASEURL") )
        define("BASEURL", "/portifolio/");

    /** caminhos dos templates de header e footer **/
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>