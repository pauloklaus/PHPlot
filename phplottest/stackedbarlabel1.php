<?php
# $Id: stackedbarlabel1.php 1001 2011-08-08 02:22:55Z lbayuk $
# Test: stackedbars with labels, defaults, both labels on
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'suffix' => "\nData Labels On", # Title part 2
  'ydatalabel' => 'plotstack',     # Y data label position, NULL to skip
  'edgedata' => True,      # If true, use some low vals (0s and 1s) in the data
);
require 'stackedbars.php';
