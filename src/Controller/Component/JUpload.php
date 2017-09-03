<?php
namespace JUpload\Controller\Component;
/**
 * Created by OmniCode
 * Author: Edvard Sargsyan
 * Date: 9/3/2017
 * Time: 6:50 PM
 */
trait JUpload
{
    /**
    * __construct method
    * @params
    * @return void
    */
    public function upload(array $options)
    {
        if (!isset($options['print_response'])) {
            $options['print_response'] = false;
        }
        $upload = new \UploadHandler($options);
        return $upload->get_response();
    }
}