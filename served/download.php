<?php

$file = '/var/www/stuxnet-zip/stuxnet.zip';
header('Content-Type: application/zip');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"stuxnet.zip\"");
readfile($file);
