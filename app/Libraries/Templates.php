<?php

namespace App\Libraries;


class Templates
{

    public $data = [];

    public function style() {

        $data['css'] = [
            'css/plugins/pe-icon-7-stroke.css',
            'css/plugins/font-awesome.min.css',
            'css/plugins/bootstrap.min.css',
            'css/plugins/animate.min.css',
            'css/plugins/swiper-bundle.min.css',
            'css/plugins/odometer.min.css',
            'css/plugins/select2.min.css',
            'css/plugins/ion.rangeSlider.min.css',
            'css/style.min.css',
        ];
        
        $data['js'] = [
            'js/vendor/modernizr-3.11.2.min.js',
            'js/vendor/jquery-3.5.1.min.js',
            'js/plugins/popper.min.js',
            'js/plugins/bootstrap.min.js',
            'js/plugins/swiper-bundle.min.js',
            'js/plugins/ajax-contact.js',
            'js/plugins/odometer.min.js',
            'js/plugins/select2.min.js',
            'js/plugins/ion.rangeSlider.min.js',
            'js/plugins/jquery.zoom.min.js',
            'js/main.js'
        ];
        return $data;
    }
    
}
