<?php defined('BASEPATH') OR exit('No direct script access allowed');
defined('BASE_URL') 
OR define('BASE_URL',
    (is_https()?
        'https://'
        :'http://'
    ).$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');
           
$config['base_url'] = BASE_URL;
$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE; //TRUE;
$config['subclass_prefix'] = 'REST_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-=@';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 1;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = '';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ksa_project';
$config['sess_samesite'] = 'Lax';
$config['sess_expiration'] = 0;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = -1;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix'] = '';
$config['cookie_domain'] = '';
$config['cookie_path'] = '/';
$config['cookie_secure'] = TRUE;
$config['cookie_httponly'] = TRUE;
$config['cookie_samesite']  = 'Lax';
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = TRUE;
$config['csrf_protection'] = FALSE; // TRUE;
$config['csrf_token_name'] = 'project_ksa';
$config['csrf_cookie_name'] = 'project_ksa';
$config['csrf_expire'] = 0;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = date_default_timezone_set('Asia/Jakarta');
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '';
