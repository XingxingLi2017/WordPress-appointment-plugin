<?php
/*
Plugin Name:  AppointmentPeach
Plugin URI:   https://github.com/XingxingLi2017/WordPress-appointment-plugin
Description:  Self-Booked Customer Appointments
Version:      0.1.0
Author:       Xingxing Li
Author URI:   https://github.com/XingxingLi2017/WordPress-appointment-plugin
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  AppointmentPeach
Domain Path:  /languages
*/

require_once 'activation.php';
register_activation_hook(__FILE__,"activation");

// public
require_once "includes/app.php";

// admin
show_setup_menu();
