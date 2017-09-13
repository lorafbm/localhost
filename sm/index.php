<?php
//Подключаем класс смарти
require_once 'libs/Smarty.class.php';
//Создадим обьект класса смарти
$smarty = new Smarty();

//определим основные директории
//каталог с конфигурационными файлами Smarty
$smarty->setConfigDir('libs/configs');
//каталог с Вашими шаблонами в формате tpl Smarty
$smarty->setTemplateDir('libs/templates');
//каталог с компилированными шаблонами Smarty
$smarty->setCompileDir('libs/templates_c');
//каталог в котором хранится кеш шаблонов
$smarty->setCacheDir('libs/cache');


//Создадим переменную для примера
/*$name = 'hahaha';
//Передаем переменную в шаблонизатор Smarty
$smarty->assign('name',$name);
//Выводим шаблон на экран
$smarty->display('main.tpl');*/

$arts=array('name'=>'вася','age'=>'15');

$smarty->assign('arts', $arts); // передаем смарти массив

//Выводим шаблон на экран
$smarty->display('main.tpl');
