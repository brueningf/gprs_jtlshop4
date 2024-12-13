<?php 
/**
* Hook HOOK_SMARTY_OUTPUTFILTER
*
* @global JTLSmarty $smarty
* @global Plugin $oPlugin
*/
if (Shop::getPageType() === PAGE_ARTIKEL) {
    $gpsrData = $smarty->getTemplateVars('gpsrData');
    if(!empty($gpsrData)) {
        $product = $smarty->getTemplateVars('Artikel')->kArtikel;
        pq('div#article-tabs')->after(
            <<<HTML
            <section class="panel panel-default mt-8">
                <div class="panel-heading">
                    <h5 class="panel-title">Angaben zur Produktsicherheit</h5>
                </div>
                <div class="panel-body" id="gpsr"></div>
            </section>
            HTML
        );
        
        if(!empty($gpsrData[$product]['manufacturer'])) {
            $template = $oPlugin->cFrontendPfad . 'template/' . 'gpsr_template_manufacturer.tpl';

            pq('div#gpsr')->append(
                $smarty->fetch($template)
            );
        }
    }
} 
