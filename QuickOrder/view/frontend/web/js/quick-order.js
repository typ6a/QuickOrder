define([
    'jquery'
], function ($) {
    "use strict";
    return function (config, element) {
        $(element).click(function () {
            var form = $(config.form);
            var baseUrl = form.attr('action'),
                quickOrderUrl = baseUrl.replace('checkout/cart/add', 'quickorder/cart/add');
            form.attr('action', quickOrderUrl);
            form.trigger('submit');
            form.attr('action', baseUrl);
            return false;
        });
    }
});
