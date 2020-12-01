<?php

session_start();
include_once("nav.php");
session_destroy();
header("location: logout-past.php");

