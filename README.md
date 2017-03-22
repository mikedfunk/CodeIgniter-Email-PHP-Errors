# ABANDONED

This is for codeigniter <= 2.x. It will not work in CodeIgniter 3.x.

# CodeIgniter-Email-PHP-Errors


A configurable drop-in customization to email yourself PHP errors encountered in your application.

## Usage

1. drop ```email_php_errors.php``` into ```application/config``` and ```MY_Exceptions.php``` into ```application/core```. If you already have a ```MY_Exceptions.php``` just modify accordingly.
2. Edit the config file with your from email and to email, the subject line, and the message template.

## Change Log

**1.0.1**

* added enable/disable config item
* parses subject *and* content for short codes

**1.0.0**

* initial release
