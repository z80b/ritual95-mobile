function message(title, text) {
    var dlg = $('<div class="alert-block" />');
    $(dlg).html(text);
    $(dlg).dialog({
        modal : true,
	position: 'center',
	resizable: false,
        title : title
    });
    $(dlg).dialog('open');
}

function showModal(_params) {
    var params = $.extend({
        title: '',
        content: '',
        controls: '<button>Сохранить</button>',
        init: function() {}
    }, _params);
    var
        html = '<div class="b-popup edit-product-modal" style="display: none"><div class="b-popup-content"><h1>'+ params.title +'</h1>';
        html+= '<div class="b-popup-block">'+ params.content +'</div>';
        html+= '<div class="b-popup-controls">'+ params.controls +'</div></div></div>';
    var modal = $(html);
    $(body).append(modal);
    params.init(modal);
    modal.fadeIn(100);
    return modal;
}

$(document).ready(function() {
    $('#content .content .product-edit-link')
        .bind('click', function() {
            document.location.href = $(this).attr('href');
        })
        .bind('contextmenu', function() {
            var m = $(this).attr('href').match(/node\/(\d+)\/edit/);
            $.getJSON('/ajax/?action=editproduct&nid='+ m[1], function(data) {
                var form_html = unescape(data.form);
                //var form = $('<div class="modal-form" />').html(form_html);
                if (form_html) {
                    showModal({
                        title: 'Редактирование товара',
                        content: form_html,
                        init: function(modal) {

                        }
                    });
                    $('.edit-product-modal .prices-table-block').html(unescape(data.prices));
                }
            });
            return false;
        });

    $('#add-product-button').click(function() {
        if (!$('#product-form #product_price').val() || !$('#product-form #product_description').val()) return false;
        var data = $('input,textarea', '#product-form').serializeArray();
        $.ajax({
            url : '/ajax/product/add',
            type : 'post',
            data : data,
            success : function(data) {
                $('#product-fieldset').html(data);
                message('Сообщение', 'Данные были успешно добавлены.');
            },
            error : function() {
                message('Ошибка', 'Произошла ошибка при добавлении данных.');
            }
        });
        return false;
    });

    $('#product-fieldset').on('click', '.del-link', function () {
        var rx = $(this).attr('href').match(/(\d+)$/i);
        if (rx && rx[0]) {
            var data = $('#product-form input').serializeArray();
            $.ajax({
                url : '/ajax/product/del/' + rx[0],
                type : 'post',
                data : data,
                success : function(data) {
                    $('#product-fieldset').html(data);
                    message('Сообщение', 'Данные успешно удалены.');
                },
                error : function() {
                    message('Ошибка', 'Произошла ошибка при удалении данных.');
                }
            });
        }
        return false;
    });

    $('#update-product-button').click(function() {
        if (!$('#product-form #product_pid').val()) return false;

        var data = $('input,textarea', '#product-form').serializeArray();
        $.ajax({
            url : '/ajax/product/update',
            type : 'post',
            data : data,
            success : function(data) {
                $('#product-fieldset').html(data);
                $('input:text,textarea', '#product-form').val('');
                message('Сообщение', 'Данные были успешно изменены.');
            },
            error : function() {
                message('Ошибка', 'Произошла ошибка при изменении данных.');
            },
            complete : function() {
                $('#update-product-button').attr('disabled', 1);
            }
        });
        return false;
    });

    $('#product-fieldset').on('click', '.edit-link', function () {
        var rx = $(this).attr('href').match(/(\d+)$/i);
        if (rx && rx[0]) {
            $.getJSON('/ajax/product/get/' + rx[0], function(response) {
                if (response) {
                    $('#update-product-button').prop('disabled', false);
                    $.each(response, function(id, value) {
                        $('#product_' + id).val(value);
                    });
                }
            });
        }
        return false;
    });
    
    $.ajax({
        url : '/ajax/product/view/' + ($('#edit-node-id').val() || '0'),
        success : function(data) {
            $('#product-fieldset').html(data);
        }
    });
    
    /*$('#map').click(function() {
        $('<img src="/sites/default/files/map.jpg" />').dialog({
            modal : true,
            position: 'center',
            resizable: false,
            title : 'Карта проезда',
            width : 410,
            height : 600
        });
        return false;
    });*/
});