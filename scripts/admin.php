<?php

define('CLI_SCRIPT', true);
require(dirname(__FILE__).'/config.php');
require_once($CFG->libdir . '/filelib.php');
require_once($CFG->libdir . '/gdlib.php');

$user = new stdClass();
$user->id = 2;
$user->firstname = 'Adrian';
$user->lastname = 'Greeve';
$user->email = 'adrian@moodle.com';
$user->city = 'Perth';
$user->country = 'AU';
$DB->update_record('user', $user);
