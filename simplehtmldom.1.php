<?php
/*
* Learn to use simple_html_dom.php
* Get content of 笑傲江湖
* https://tw.ixdzs.com/read/30/30014/p2.html - p43.html
*/

include_once "simple_html_dom.php";
// Load HTML from a URL
$html = new simple_html_dom();

$filename = "tngh.txt";
$myfile = fopen($filename,"w") or die("Unable to open file to wrire");

//$pages = array range(1,43,1);
foreach (range(1, 43 , 1) as $page) {
	$url = "https://tw.ixdzs.com/read/30/30014/p" . $page . ".html";
	echo "Load " . $url . "...";
	echo "\n";

	// Load url
	$html->load_file($url);

	// Get Title page
	$title = $html->find('title',0);
	$title = $title->innertext;
	
	// Get content
	$content = $html->find('.content',0);
	$txt = $title . "\n" . trim($content->innertext) . "\n";
	
	// Write to file
	echo "\n" . "Write content to file." . "\n";
	fwrite($myfile, $txt);

}

fclose($myfile);

/* Test 1 page only
//$html->load_file('https://tw.ixdzs.com/read/30/30014/p2.html');
//$content = $html->find('.content',0); // Get the first (0) content of <div class="content"></div>
//echo $content->innertext; // echo the content only (without tags)
//$txt = $content->innertext;
//echo $html->plaintext;


//$myfile = fopen("tngh.txt", "w") or die("Unable to open file");
//fwrite($myfile,$txt);
//fclose($myfile);
// End Test 1 page only
*/

$html->clear; // REMEMBER to clear
?>
