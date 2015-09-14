<?php
/**
 * Created by PhpStorm.
 * User: samkgaibek
 * Date: 14.09.2015
 * Time: 22:24
 */

$_message = $_POST['message'];
$_group = $_POST['group'];

$_destination = $_group == 0 ? "all groups" : "group " . $_group;

/**
 * YOUR QUERIES
 */

echo "Message \"" . $_message . "\" was send to " . $_destination;