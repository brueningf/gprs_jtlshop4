{assign var='gpsr_manufacturer' value=$gpsrData[$Artikel->kArtikel]['manufacturer']}
{if count($gpsr_manufacturer) > 0}
<div class="product-manufacturer mb-3">
    <strong>Herstellerinformationen:</strong>
    <div class="product-manufacturer-manufacturer small">
        {if isset($gpsr_manufacturer.name)}{$gpsr_manufacturer.name}<br>{/if}
        {$gpsr_manufacturer.street}&nbsp;{if isset($gpsr_manufacturer.housenumber)}{$gpsr_manufacturer.housenumber}{/if}<br>
        {if isset($gpsr_manufacturer.state)}{$gpsr_manufacturer.state}<br>{/if}
        {$gpsr_manufacturer.city},&nbsp;{$gpsr_manufacturer.country},&nbsp;{$gpsr_manufacturer.postalcode}<br>
        {if isset($gpsr_manufacturer.email)}{$gpsr_manufacturer.email}<br>{/if}
        {if isset($gpsr_manufacturer.homepage)}{$gpsr_manufacturer.homepage}{/if}
    </div>
</div>
{/if}
