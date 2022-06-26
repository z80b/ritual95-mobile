<style type="text/css">
    table {}
    table thead th { text-align: center; font-size: 20px }
    table tbody th { text-align: right }
</style>
<table width="100%">
    <thead>
    <tr><th colspan="2">Заказ</th></tr>
    </thead>
    <tbody>
    <tr>
        <th width="20%">Наименование:</th>
        <td><?php print $product->title?></td>
    </tr>
    <tr>
        <th>Описание:</th>
        <td>
            <p><?php print $product->body?></p>
            <p><?php print $product->description?></p>
        </td>
    </tr>
    <tr>
        <th>Цена:</th>
        <td><?php print $product->price?></td>
    </tr>
    <tr><td colspan="2"><hr /></td></tr>
    <tr>
        <th>Ф.И.О. заказчика:</th>
        <td><?php print $custumer->name?></td>
    </tr>
    <tr>
        <th>Контактный телефон:</th>
        <td><?php print $custumer->phone?></td>
    </tr>
    <tr>
        <th>Дополнительные указания:</th>
        <td><?php print $custumer->message?></td>
    </tr>
    </tbody>
</table>