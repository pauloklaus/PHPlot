<?php
# $Id: range-bars3.php 1557 2013-03-27 00:25:37Z lbayuk $
# PHPlot test: Plot range test, implied independent variable (bar plot)
# This is a parameterized test. See the script named at the bottom for details.
$tp = array(
  'nx' => 3,               # Number of independent variable data points
  'ny' => 4,               # Number of data sets (dependent variables)
  'horizontal' => TRUE,    # True for horizontal bars, false for vertical
  );
require 'range-bars.php';
