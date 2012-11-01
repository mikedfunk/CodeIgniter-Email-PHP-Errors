<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * where to send php errors to and from
 *
 * @author Mike Funk
 * @email mfunk@christianpublishing.com
 *
 * @file email_php_errors.php
 */

$config['php_error_from'] = 'from@from.com';
$config['php_error_to'] = 'to@to.com';
$config['php_error_subject'] = 'PHP Error';

// available shortcodes are {{severity}}, {{message}}, {{filepath}}, {{line}}
$config['php_error_message'] = 'Severity: {{severity}} --> {{message}} File Path: {{filepath}} Line: {{line}}';

/* End of file email_php_errors.php */
/* Location: ./application/config/email_php_errors.php */