<?php

$course=$_POST["index"];
if(strcmp($course,"cpp")==0)
{
    header("Location: cppindex.html");
}
if(strcmp($course,"c")==0)
{
    header("Location: cindex.html");
}
if(strcmp($course,"php")==0)
{
    header("Location: phpindex.html");
}
if(strcmp($course,"sql")==0)
{
    header("Location: sqlindex.html");
}
if(strcmp($course,"java")==0)
{
    header("Location: javaindex.html");
}
if(strcmp($course,"html")==0)
{
    header("Location: htmlindex.html");
}
?>

