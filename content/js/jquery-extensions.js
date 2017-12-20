$.fn.showError = function (errors) {
    return this.each(function () {
        var $this = $(this);
        var messages = errors;
        if (!(typeof errors === 'object' && errors.constructor === Array)) {
            messages = [errors];
        }
        $.each(messages, function(i,msg) {
            $this.find(".alert-danger").append('<p>' + msg + '</p>').show();
        });
    });
}

$.fn.hideError = function () {
    return this.each(function () {
        var $this = $(this);
        $this.find(".alert-danger").text("").hide();
    });
}