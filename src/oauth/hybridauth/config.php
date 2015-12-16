<?php
#AUTOGENERATED BY HYBRIDAUTH 2.1.2 INSTALLER - Tuesday 29th of April 2014 01:56:19 AM

/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
    array(
        "base_url" => "",

        "providers" => array(
          // openid providers
            "OpenID" => array(
                "enabled" => true
            ),

            "Google" => array(
                "enabled" => true,
                "keys" => array("id" => "", "secret" => "")
            ),

            "Facebook" => array(
                "enabled" => true,
                "keys" => array("id" => "", "secret" => "")
            ),

            "Twitter" => array(
                "enabled" => true,
                "keys" => array("key" => "", "secret" => "")
            ),

            // windows live
            "Live" => array(
                "enabled" => true,
                "keys" => array("id" => "", "secret" => "")
            ),

            "LinkedIn" => array(
                "enabled" => true,
                "keys" => array("key" => "", "secret" => "")
            ),

            "GitHub" => array(
                "enabled" => true,
                "keys" => array("id" => "", "secret" => "")
            ),

            // Not available in EpiViz

            "Foursquare" => array(
                "enabled" => false,
                "keys" => array("id" => "", "secret" => "")
            ),

            "MySpace" => array(
                "enabled" => false,
                "keys" => array("key" => "", "secret" => "")
            ),

            "AOL" => array(
                "enabled" => false
            ),

            "Yahoo" => array(
                "enabled" => false,
                "keys" => array("id" => "", "secret" => "")
            ),
        ),

      // if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
        "debug_mode" => false,

        "debug_file" => ""
    );