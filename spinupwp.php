<?php
/*
Plugin Name:  SpinupWP
Plugin URI:   https://spinupwp.com
Description:  SpinupWP helper plugin.
Author:       Delicious Brains
Version:      1.0
Author URI:   https://spinupwp.com
Network:      True
Text Domain:  spinupwp
Requires PHP: 7.1
Requires WP:  4.7

// Copyright (c) 2019 Delicious Brains. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}