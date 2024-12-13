<?php 
/**
* Hook HOOK_ARTIKEL_PAGE
*
* @global JTLSmarty $smarty
* @global Plugin $oPlugin
*/
global $smarty, $oPlugin;

require_once 'GPSR.php';

$gpsr = new GPSR([$args_arr['oArtikel']]);
if ($gpsr->hasData()) {
    $gpsr->assignData($smarty);
}

