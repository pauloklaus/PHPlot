<?php
# $Id: mdvl04.php 1001 2011-08-08 02:22:55Z lbayuk $
# Testing phplot - Data Value Labels on more plot types - case 4
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => "\nLines, @90d",   # Title part 2
  'plot_type' => 'lines',  # Plot type
  'dvl_angle' => 90,      # Data Value Label angle, NULL to default
  );
require 'mdvl.php';
