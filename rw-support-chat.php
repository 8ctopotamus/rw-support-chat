<?php
/*
  Plugin Name: Real Wealth<sup>&reg;</sup> Support Chat
  Plugin URI:  https://zylocod.es
  Description: A support chat for Real Wealth<sup>&reg;</sup> Marketing.
  Version:     1.0
  Author:      ICS, LLC
  Author URI:  https://zylocod.es
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

include 'inc/init.php';
include 'inc/functions.php';
include 'inc/admin.php';