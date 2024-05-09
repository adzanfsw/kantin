<?php
    
    function role_auth()
    {
        // Get CodeIgniter instance
        $CI =& get_instance();
        
        // Check if username exists in session
        if (!$CI->session->userdata('username')) {
            $CI->session->set_flashdata('notifikasi', array('message' => 'Silahkan login terlebih dulu!', 'color' => 'red'));
            redirect(site_url('auth'));
        }
    }

?>