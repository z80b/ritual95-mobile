(function($) {

    $.fn.modal = function(_params) {
        var html, modal, $this = this;
        var params = $.extend({
            title: '',
            class: '',
            content: '',
            //controls: '<button class="close">Закрыть</button>',
            width: 420,
            height: 620,
            init: function() {}
        }, _params);

        $('body .b-popup').remove();
        html = '<div class="b-popup '+ params.class +'" style="display: none"><div class="b-popup-content"><button class="close">✖</button><h1 class="title">'+ params.title +'</h1>';
        html+= '<div class="b-popup-block"></div>';
        html+= '<div class="b-popup-controls"></div></div></div>';
        modal = $(html);
        $('.b-popup-block', modal).append(this);
        //$('.b-popup-controls', modal).append(params.controls);
        $('.b-popup-content', modal).css({ width: params.width, height: params.height });

        $('.b-popup-content .close', modal).click(function() {
            $this.trigger('close');
        });

        this.bind('open', function() { $(modal).fadeIn(100) });
        this.bind('close', function() { $(modal).remove() });

        $('body').append(modal);
        params.init(this);
        if (params.open) this.trigger('open');
        return this;
    }

    $.message = function(msg, type) {
        var html, $message;

        if (!type) type = 'message';
        if (typeof(msg) == 'string') {
            html = '<p>'+ msg + '</p>';
        } else {
            html = '<ul>';
            $.each(msg, function(key, val) {
                html += '<li>'+ val +'</li>';
            });
            html += '</ul>';
        }
        html = '<div class="b-message '+ type +'"><button class="close">✖</button><div class="b-message-content">'+ html +'</div></div>';
        $message = $(html);

        $message.find('button.close').click(function() {
            $message.remove();
        });

        setTimeout(function() {
            $message.fadeOut(300, function() { this.remove() });
        }, 5000);

        $('body').append($message);
        $message.fadeIn(300);
    }

    $.alert = function(msg, type) {
        var html = '';
        if (!type) type = 'message';
        if (typeof(msg) == 'String') {
            html = '<p>'+ msg + '</p>';
        } else {
            html = '<ul>';
            $.each(msg, function(key, val) {
                html += '<li>'+ val +'</li>';
            });
            html += '</ul>';
        }
        $(html).modal({
            open: true,
            width: 480,
            height: 'auto',
            class: type
        });
    }

    $.fn.shineMenu = function(param) {
        function setActive(element) {
            var lipos = $(element).parent('li').position();
            if (lipos) {
                var left = lipos.left - ulpos.left;
                var offset = (param.width - $(element).parent('li').outerWidth(true)) / 2;
                $('ul', menu).animate({'backgroundPosition' : (left - offset) + 'px 100%'}, param.delay);
            }
        }
        $.extend({
            width : 240,
            delay : 500
        }, param);
        var menu = this;
        var ulpos = $('ul', menu).position();
        //var elements = $('li a', this);
        $('ul', menu).css('ackground-position', '-240px 100%');
        setActive($('li a.active', this));
        $('li a', this).click(function() {
            setActive(this);
            //return false;
        });
    }

    $.fn.phoneSelect = function(view_container) {
        $(this).change(function() {
            var nid = $(this).val();
            $.get('/node/' + nid + '/get', function(response) {
                $(view_container).fadeOut(400, function() {
                    $(view_container).html(response);
                    $(view_container).fadeIn(400);
                });
            });
        });
        $(this).change();
    }

    function initPhonesDialog() {
        return false;
        /*if (!$.cookie('show_phones') || $.cookie('show_phones') != 'no') {
            if (!$.cookie('show_phones_done') || $.cookie('show_phones_done') != 'yes') {
                setTimeout(function() {
                    $('.b-popup').fadeIn(1000);
                    var date = new Date();
                    date.setTime(date.getTime() + (60 * 60 * 1000));
                    $.cookie('show_phones_done', 'yes', { expires: date.toGMTString(), path: '/' });
                }, 2000);
                $('.b-popup button').click(function() { $('.b-popup').fadeOut(200) });
                $('.b-popup :checkbox').change(function() {
                    if ($(this).attr('checked')) {
                        $.cookie('show_phones', 'yes', { path: '/' });
                    } else $.cookie('show_phones', 'no', { path: '/' });
                });
            }
        }*/
    }

    $(document).ready(function() {
        $('#map, #map2').click(function() {
            $('<img src="/sites/default/files/map.jpg" />').modal({
                open: true,
                class: 'b-popup-map'
            });
            return false;
        });

        $('.group-page img[href]').click(function() {
            var href = $(this).attr('href');
            var img = $('<img src="'+ href +'" />').css('opacity', 0);
            img.load(function() {
                if ((img.height() / img.width()) >= 1.5) {
                    img.css({'height': '600px', 'width': 'auto'});
                } else img.css({'width': '420px', 'height': 'auto'});
                img.animate({'opacity': 1},900);
            });
            img.modal({ open: true, class: 'b-popup-image'});
        });
        
        $('#menu').shineMenu({ width : 240, delay : 100 });
        $('#phones-select').phoneSelect('#phones-view-block');
        $('.product-edit-link').hover(
            function() { $(this).css('backgroundColor', '#EEE' )},
            function() { $(this).css('backgroundColor', '' )}
        );
        initPhonesDialog();
    });
})(jQuery);