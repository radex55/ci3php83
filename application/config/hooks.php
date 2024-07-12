<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$hook['pre_system'][] = array(
    'class'    => 'Preloadsystem',
    'function' => 'validateUserAgent',
    'filename' => 'security_check.php',
    'filepath' => 'hooks'
);