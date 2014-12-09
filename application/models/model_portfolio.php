<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 13:58
 */

class Model_Portfolio extends Model
{
    public function get_data()
    {
        /*
         * Emulation DataBase
         */
        return array(
            array(
                'Year'          =>  '2014',
                'Site'          =>  'http://site1.com',
                'Description'   =>  'This first promo site.'
            ),
            array(
                'Year'          =>  '2014',
                'Site'          =>  'http://site2.com',
                'Description'   =>  'This second site.'
            ),
            array(
                'Year'          =>  '2013',
                'Site'          =>  'http://site3.com',
                'Description'   =>  'This site for community.'
            ),
            /*
             * And etc.
             */
        );
    }
}
