<?php
	echo $site="techpluto.com";
	$curl = curl_init($site);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36");
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,10);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    $page = curl_exec($curl);
    ?>