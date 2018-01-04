<?php

/*

 Version: 1.0

 Author: Md Rashadul Islam

 Author URI: http://itsrashad.info

 License: GPL2

 */

defined( 'ABSPATH' ) or die();



wp_localize_script( 'itscountdown-counter-script', 'itscountdownstrings', array (

		'seconds' => _n( 'Second', 'Seconds', 5, 'its-countdown' ),

		'seconds_1' => _n( 'Second', 'Seconds', 1, 'its-countdown' ),

		'seconds_2' => _n( 'Second', 'Seconds', 2, 'its-countdown' ),

		'minutes' => _n( 'Minute', 'Minutes', 5, 'its-countdown' ),

		'minutes_1' => _n( 'Minute', 'Minutes', 1, 'its-countdown' ),

		'minutes_2' => _n( 'Minute', 'Minutes', 2, 'its-countdown' ),

		'hours' => _n( 'Hour', 'Hours', 5, 'its-countdown' ),

		'hours_1' => _n( 'Hour', 'Hours', 1, 'its-countdown' ),

		'hours_2' => _n( 'Hour', 'Hours', 2, 'its-countdown' ),

		'days' => _n( 'Day', 'Days', 5, 'its-countdown' ),

		'days_1' => _n( 'Day', 'Days', 1, 'its-countdown' ),

		'days_2' => _n( 'Day', 'Days', 2, 'its-countdown' ),

		'weeks' => _n( 'Week', 'Weeks', 5, 'its-countdown' ),

		'weeks_1' => _n( 'Week', 'Weeks', 1, 'its-countdown' ),

		'weeks_2' => _n( 'Week', 'Weeks', 2, 'its-countdown' ),

		'months' => _n( 'Month', 'Months', 5, 'its-countdown' ),

		'months_1' => _n( 'Month', 'Months', 1, 'its-countdown' ),

		'months_2' => _n( 'Month', 'Months', 2, 'its-countdown' ),

		'years' => _n( 'Year', 'Years', 5, 'its-countdown' ),

		'years_1' => _n( 'Year', 'Years', 1, 'its-countdown' ),

		'years_2' => _n( 'Year', 'Years', 2, 'its-countdown' ) 

) );