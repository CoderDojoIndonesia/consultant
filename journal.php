<h1>Journal of Consultation</h1>
<?
$files = glob('journal/*.php', GLOB_BRACE);
foreach($files as $file) {
    include($file);
}

?>