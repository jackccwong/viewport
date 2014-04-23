<!DOCTYPE html>
<html>
<head>
<title>Sample to use viewport meta for Zetakey browser</title>

<?php

if(($_GET["ucontent"]==NULL) || ($_GET["ucontent"]=="")){
    $viewport_tag = "<meta name=\"viewport\" content=\"".$_GET["content"]. "\">";
}
else{
    $viewport_tag = "<meta name=\"viewport\" content=\"".$_GET["ucontent"]. "\">";
}
    echo $viewport_tag;
    $viewport_tag = str_replace("<", "&lt;", $viewport_tag);
    $viewport_tag = str_replace(">", "&gt;", $viewport_tag);
?>

</head>
<body>
<div>
    <h1>Viewport Meta Tag</h1>
    <h3>This page is using</h3>
    <p><?php echo $viewport_tag ?></p>
<?php

echo  "<img src=\"". $_GET["imagesize"]."x".$_GET["imagesize"].  ".jpg\"/>";
?>
    
    
<h3>Further reading</h3>
<ol>
    <li><a href="https://developer.apple.com/library/mac/documentation/AppleApplications/Reference/SafariWebContent/UsingtheViewport/UsingtheViewport.html">Mac Developer Library</a></li>
    <li><a href="https://developer.mozilla.org/en-US/docs/Mozilla/Mobile/Viewport_meta_tag">Mozilla Developer Network</a></li>
</ol>
</div>

<a href="index.html">Try other viewport settings</a>
</body>

</html>

