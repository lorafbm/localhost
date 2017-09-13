<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
<p>
    <!--Переданная переменная - {$name}-->
    <!--{if $name == 'Vasya'}
    Переданная переменная - {$name}
    {else}
    Другая переменная
    {/if}-->
    {foreach $arts as $keyvar => $itemvar}
    {$keyvar} => {$itemvar}<br />
    {/foreach}
</p>
</body>
</html>