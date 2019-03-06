<?php

/**
 * @name Controller_Api
 * @author Mazhar Ahmed
 * 
 * this is the sample API endpoint
 */
class Controller_Api extends Controller_Rest {

    /**
     * @name get_list
     * @author Mazhar Ahmed
     * 
     * just returns something
     */
    public function get_list()
    {
        return $this->response(DB::select('id','name', 'hint')->from('demo')->execute());
    }
}
