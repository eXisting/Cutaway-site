<?php

class MainModel extends Model{

    public function get_data()
    {
        $data['images'] = $this->simulateData();

        $imagesCount = isset($data['images']) ? count($data['images']) : 0;
        if ( $imagesCount === 0 )
            throw new Exception("Images does not exists! Failure to load carousel images!");

        return $data;
    }


    private function simulateData()
    {
        $imgArray = array();

        // images should be taken from db
        $imgArray[] = "/images/html_logo.png";
        $imgArray[] = "/images/css_logo.png";
        $imgArray[] = "/images/c++_logo.png";
        $imgArray[] = "/images/sharp_logo.png";
        $imgArray[] = "/images/js_logo.png";
        $imgArray[] = "/images/plsql_logo.png";
        $imgArray[] = "/images/php_logo.png";
        $imgArray[] = "/images/net_logo.png";
        $imgArray[] = "/images/unity_logo.jpeg";
        $imgArray[] = "/images/git_logo.jpg";
        $imgArray[] = "/images/svn_logo.jpg";
        $imgArray[] = "/images/drupal_logo.png";
        $imgArray[] = "/images/opencart_logo.jpg";

        return $imgArray;
    }
}