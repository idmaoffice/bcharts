<?php
require_once 'simple_html_dom.php';
    $data = file_get_html('https://bscscan.com/txs?a=0x21dd71ab78ede3033c976948f769d506e4f489ee');
    if ( $data->innertext!='' and count($data->find('div.table-responsive')) ) {
        $var = $data->find('div.table-responsive');
        //$table = $var->plaintext;
        echo $var[0];
    }
?>
<style>
    .table-hover td { border: 1px solid black; }
</style>