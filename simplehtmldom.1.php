<?php
/*
* Learn to use simple_html_dom.php
* Get content of 笑傲江湖
* https://tw.ixdzs.com/read/30/30014/p2.html - p43.html
*/

include_once "simple_html_dom.php";
// Load HTML from a URL
$html = new simple_html_dom();
//$html->load_file('https://m.pcworld.com.vn/');
$html->load_file('http://tw.ixdzs.com/read/30/30014/p2.html');

$content = $html->find('.content',0); // Get the first (0) content of <div class="content"></div>
echo $content->innertext; // echo the content only (without tags)

//echo $html->plaintext;
$html->clear;
?>