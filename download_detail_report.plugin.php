<?php
/**
 * Plugin Name: Download Detail Report
 * Plugin URI: https://go.slims.id
 * Description: It creates detailed information on all downloaded attachment files recorded by the database.
 * Version: 1.0
 * Author: Arif Syamsudin, Drajat Hasan
 * Author URI: https://github.com/buitenzorg812
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus
$plugin->registerMenu('reporting', 'Detailed Download Counter', __DIR__ . '/dl_detail.php');
