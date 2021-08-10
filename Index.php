<?php
include_once ("arc/ARC2.php");
include_once ("Graphite/Graphite.php");

$graph = new Graphite;
$graph->load ("https://plymouth.thedata.place/dataset/woodland-sites");
print $graph->resource ("https://plymouth.thedata.place/dataset/woodland-sites");
?>