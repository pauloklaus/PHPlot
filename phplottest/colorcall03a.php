<?php
# $Id: colorcall03a.php 1001 2011-08-08 02:22:55Z lbayuk $
# Color callback - points plot with color callback
# See the script named below for details.
$plot_type = 'points';
function pick_color($unused_img, $unused_passthru, $row, $col)
{
    return $row + $col;
}
require 'colorcall00.php';
