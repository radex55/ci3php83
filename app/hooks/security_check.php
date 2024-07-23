<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Preloadsystem{

    public function validateUserAgent(){
        include(APPPATH.'config/config.php');
        include(APPPATH.'config/routes.php');
        if(isset($route) && isset($config)){
            $uri_string="";
            $segmentsOne="";
            $segmentsUri=[];
            $segments=explode('/',$_SERVER['REQUEST_URI']);
            if(count($segments)>0){
                $segmentsUri=array_values(
                                array_filter(
                                    array_map(function($items){
                                        $str=trim($items);
                                        if(strlen($str)>0){
                                            $url=parse_url('http://dummy/'.$str);
                                            $uri=trim((isset($url['path'])?$url['path']:''),'/');
                                            if(strlen($uri)>0){
                                                return $uri;
                                            }
                                        }
                                    },$segments)
                                )
                            );
                if(count($segmentsUri)>0){
                    $segmentsOne=$segmentsUri[0]??"";
                    $uri_string=join("/",$segmentsUri);
                }
            }
            $dtUri=[];
            $arrConfig=[];
            $arrRoute=[];
            if(count((array) $config['csrf_exclude_uris']??[])){
                $arrConfig=(array) $config['csrf_exclude_uris']??[];
            }
            if(count($route)>0){
                $arrRoute=(array) array_keys((array) $route??[]);
            }
            $dtUri=array_merge($arrConfig,$arrRoute);
            if(!in_array($uri_string,$dtUri) && strlen($uri_string)>0){
                if(count($segmentsUri)>0){
                    $dtUriSegmentOne=array_map(function($items){
                                        return trim(explode("/",trim($items))[0]);
                                    },$dtUri);
                    if(!in_array($segmentsOne,$dtUriSegmentOne)){
                        header('HTTP/1.1 503 Service Unavailable.',TRUE,503);
                        echo 'Why are you looking at this? because the link to this page does not exist on our website or is currently undergoing maintenance.';
                        exit(3); // EXIT_CONFIG
                    }
                }
            }
        }else{
            header('HTTP/1.1 503 Service Unavailable.',TRUE,503);
            echo 'Why are you looking at this? because the link to this page does not exist on our website.';
            exit(3); // EXIT_CONFIG
        }
    }
}
