<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Extend exceptions to email me on exception
 *
 * @author Mike Funk
 * @email mfunk@christianpublishing.com
 *
 * @file MY_Exceptions.php
 */

/**
 * MY_Exceptions class.
 *
 * @extends CI_Exceptions
 */
class MY_Exceptions extends CI_Exceptions {

    // --------------------------------------------------------------------------

    /**
     * extend log_exception to add emailing of php errors.
     *
     * @access public
     * @param mixed $severity
     * @param mixed $message
     * @param mixed $filepath
     * @param mixed $line
     * @return void
     */
    function log_exception($severity, $message, $filepath, $line)
    {
        $ci =& get_instance();

        // this allows different params for different environments
        $ci->config->load('email_php_errors');

        // set up email with config values
        $ci->load->library('email');
        $ci->email->from(config_item('php_error_from'));
        $ci->email->to(config_item('php_error_to'));
        $ci->email->subject(config_item('php_error_subject'));

        // set up content
        $content = config_item('php_error_content');
        $content = str_replace('{{severity}}', $severity, $content);
        $content = str_replace('{{message}}', $message, $content);
        $content = str_replace('{{filepath}}', $filepath, $content);
        $content = str_replace('{{line}}', $line, $content);

        // set message and send
        $ci->email->message($content);
        $ci->email->send();

        // do the rest of the codeigniter stuff
        parent::log_exception($severity, $message, $filepath, $line);
    }

    // --------------------------------------------------------------------------
}
/* End of file MY_Exceptions.php */
/* Location: ./application/core/MY_Exceptions.php */