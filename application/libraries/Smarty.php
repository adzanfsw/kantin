<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/smarty/libs/SmartyLib.class.php'; // Adjust the path

class Smarty extends SmartyLib {
    public function __construct() {
        parent::__construct();

        $this->default_template_handler_func = 'default_template_handler';

        $this->setTemplateDir(APPPATH . 'views');
        $this->setCompileDir(APPPATH . 'template_c');
        $this->setConfigDir(APPPATH . 'config');
        $this->setCacheDir(APPPATH . 'cache');
    }

    protected function default_template_handler($type, $template_source, $template_timestamp, $template_references, $template_compiler) {
        return array(
            'filename' => $template_source,
            'timestamp' => $template_timestamp,
        );
    }
    
}

?>