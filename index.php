<?php

require "app/Config.php";

$config = new Config;
$config->load('init.php');

// Check exists
var_dump($config->exists('db.hosts.primary'));

// Get primary host
var_dump($config->get('db.hosts.primary'));

// Get database name
var_dump($config->get('db.name'));
