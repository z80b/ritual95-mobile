<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Заказ №<?=$field['zakaz_num']?></title>
    <style type="text/css">
        table th { text-align: left }
    </style>
</head>
<body>
    <h3>Заказ №<?=$field['zakaz_num']?></h3>
    <table>
        <tr>
            <td><b>Заказчик</b></td>
            <td><?=$field['name']?></td>
        </tr>
        <tr>
            <td><b>Домашний телефон</b></td>
            <td><?=$field['hphone']?></td>
        </tr>
        <tr>
            <td><b>Мобильный телефон</b></td>
            <td><?=$field['mphone']?></td>
        </tr>
        <tr>
            <td><b>Адрес электронной почты</b></td>
            <td><?=$field['email']?></td>
        </tr>
        <tr>
            <td><b>Адрес заказчика</b></td>
            <td><?=$field['addres']?></td>
        </tr>
        <?if ($field['place']):?>
        <tr>
            <td><b></b></td>
            <td>Заказчик сам заберет памятник</td>
        </tr>
        <?else:?>
        <tr>
            <td><b>Место установки памятника</b></td>
            <td><?=$field['place_addres']?></td>
        </tr>
    </table>
    <?endif?>
    <h3>Данные покойного</h3>
    <table>
        <tr>
            <td><b>Ф.И.О. покойного</b></td>
            <td><?=$field['name1']?></td>
        </tr>
        <tr>
            <td><b>Название файла фотографии</b></td>
            <td><?=$field['file1']?></td>
        </tr>
        <tr>
            <td><b>Дата рождения</b></td>
            <td><?=$field['birthday1']?></td>
        </tr>
        <tr>
            <td><b>Дата смерти</b></td>
            <td><?=$field['deadday1']?></td>
        </tr>
        </table>
        <?if ($field['name2']):?>
        <h3>Данные второго покойного</h3>
        <table>
        <tr>
            <td><b>Ф.И.О. покойного</b></td>
            <td><?=$field['name2']?></td>
        </tr>
        <tr>
            <td><b>Название файла фотографии</b></td>
            <td><?=$field['file2']?></td>
        </tr>
        <tr>
            <td><b>Дата рождения</b></td>
            <td><?=$field['birthday2']?></td>
        </tr>
        <tr>
            <td><b>Дата смерти</b></td>
            <td><?=$field['deadday2']?></td>
        </tr>
    </table>
    <?endif?>
    <h3>Тип и параметры памятника</h3>
    <table>
        <tr>
            <td><b>Тип памятника</b></td>
            <td><?=$field['form']?></td>
        </tr>
        <tr>
            <td><b>Форма цветника</b></td>
            <td><?=$field['cvetnik_form']?></td>
        </tr>
        <tr>
            <td><b>Цвет памятника</b></td>
            <td><?=$field['color']?></td>
        </tr>
        <tr>
            <td><b>Гравировать портрет</b></td>
            <td><?=$field['portret']?></td>
        </tr>
        <tr>
            <td><b>Тип шрифта</b></td>
            <td><?=$field['font_type']?></td>
        </tr>
        <tr>
            <td><b>Гравировать крест</b></td>
            <td><?=$field['cross']?></td>
        </tr>
        <tr>
            <td><b>Гравировать виньетки'</b></td>
            <td><?=$field['vinjetki']?></td>
        </tr>
        <tr>
            <td><b>Гравировать цветы</b></td>
            <td><?=$field['flowers']?></td>
        </tr>
        <tr>
            <td><b>Эпитафия</b></td>
            <td><?=$field['epitafiya']?></td>
        </tr>
        <tr>
            <td><b>Гравировать свечу</b></td>
            <td><?=$field['svecha']?></td>
        </tr>
        <tr>
            <td><b>Укомплектовать вазой</b></td>
            <td><?=$field['vaza'] ? 'Да' : 'Нет'?></td>
        </tr>
        <tr>
            <td><b>Добавить к заказу</b></td>
            <td><?=$field['more']?></td>
        </tr>
        <tr>
            <td><b>Способ нанесения графики</b></td>
            <td><?=$field['sposob']?></td>
        </tr>
        <tr>
            <td><b>Дополнительная работа</b></td>
            <td><?=$field['dop_work']?></td>
        </tr>
        <tr>
            <td><b>Монтаж памятника</b></td>
            <td><?=$field['montag']?></td>
        </tr>
    </table>
</body>
</html>
