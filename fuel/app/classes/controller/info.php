<?php

/**
 * @name Controller_Info
 * @author Mazhar Ahmed
 * 
 * this is the info controller for the REST API
 */
class Controller_Info extends Controller_Rest {

    /**
     * @name get_list
     * @author Mazhar Ahmed
     * 
     * this will return the API versioning info
     */
    public function get_list ()
    {
        return $this->response(array(
            'name' => 'Sample',
            'info' => 'Sample API to run Travis CI tests',
            'version' => '1.0.2'
        ));
    }

    /**
     * @name get_item
     * @author Mazhar Ahmed
     * 
     * this is the REST 404 page
     */
    public function get_item()
    {
        return $this->response(array(
            'success' => false,
            'message' => 'not found'
        ), 404);
    }
}
