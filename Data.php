<?php
include_once ("arc/ARC2.php");
include_once ("Graphite/Graphite.php");

$person_uri = "https://plymouth.thedata.place/dataset/aa63ff48-f48e-40d6-a941-669b73434175/resource/87a2a4cc-3357-4e8f-9a62-234a1c8bed88/download/160928-woodland-data.csv";

$graph = new Graphite();

$graph->cacheDir ("web.socem.plymouth.ac.uk");

$graph->load( $person_uri );

$person = $graph->resource( $person_uri );
?>

