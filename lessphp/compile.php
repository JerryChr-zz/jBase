<?php

require_once(dirname(__FILE__) . '/lessc.inc.php');

$inputFile = "../less/template.less";
$outputFile = "../css/template.css";

$less = new lessc;

// create a new cache object, and compile
$cache = $less->cachedCompile($inputFile);

file_put_contents($outputFile, $cache["compiled"]);

// the next time we run, write only if it has updated
$last_updated = $cache["updated"];
$cache = $less->cachedCompile($cache);
if ($cache["updated"] > $last_updated) {
    file_put_contents($outputFile, $cache["compiled"]);
}

function autoCompileLess($inputFile, $outputFile) {
    // load the cache
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    $newCache = $less->cachedCompile($cache);

    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}

autoCompileLess('../less/template.less', '../css/template.css');


?>