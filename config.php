<?php
$configuration="prod";
$CONFIG["dev"]["url_cdi"] = "http://localhost/home";
$CONFIG["dev"]["url_consultant"] = "http://localhost/consultant";
$CONFIG["dev"]["url_clients"] = "http://localhost/clients";

$CONFIG["prod"]["url_cdi"] = "http://home.coderdojoindonesia.com";
$CONFIG["prod"]["url_consultant"] = "http://consultant.coderdojoindonesia.com";
$CONFIG["prod"]["url_clients"] = "http://clients.coderdojoindonesia.com";

$url_cdi = $CONFIG[$configuration]["url_cdi"];
$url_consultant = $CONFIG[$configuration]["url_consultant"];
$url_clients = $CONFIG[$configuration]["url_clients"];

$url_cdi = $url_consultant;
$url_clients = $url_consultant;
?>