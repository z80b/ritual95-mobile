(function($) {
    $(document).ready(function() {
        //alert('product_buy module');
        $('.product-node button.order-button').bind('click', function() {
            var pid = $(this).attr('pid');
            $.get('/ajax/product/buy/'+ pid, function(response) {
                $(response).modal({
                    title: 'Создание заказа',
                    width: 500,
                    height: 'auto',
                    open: true,
                    class: 'b-popup-order',
                    controls: '',
                    init: function($modal) {
                        function success_submit(data) {
                            console.log(data);
                            if (data && data.status != 'error') {
                                $modal.trigger('close');
                                if (data.message) $.message(data.message);
                                else $.message('Ok');

                            } else if (data.message) {
                                $.message(data.message, 'error');
                            } else $.message('Unknown error', 'error');

                        }

                        function error_submit(msg) {
                            $.alert('Unknown error', 'error');
                        }

                        $('.form-submit', $modal).click(function() {
                            //console.log($($modal).find('input, textarea'));
                            //var form_data = $($modal).find('input, textarea').serialize();
                            var form_data = {
                                url: '/ajax/product/buy/'+ pid +'/submit',
                                cache: false,
                                type: 'get',
                                contentType: 'application/json; charset=UTF-8',
                                dataType: 'json',
                                success: success_submit,
                                data: {}

                            };
                            $($modal).find('input, textarea').each(function() {
                                var value = $(this).val();
                                if (value) {
                                    form_data.data[$(this).attr('name')] = value;
                                }
                            });
                            //console.log(form_data);
                            $.ajax(form_data);

                        });
                    }
                });
            });
        });
    });
})(jQuery);
