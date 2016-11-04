$(function () {
    $.ajax({
        type: 'POST',
        url: '/site/get-notice',
        success: function(response) {
            var Notice = $.parseJSON(response),
                obNoty = {};
            $.each(Notice, function (key, val) {
                obNoty[key] = noty({
                    type: 'alert',
                    layout: 'bottomRight',
                    text: val.content,
                    notice_id: val.id,
                    callback: {
                        onCloseClick: function () {
                            $.ajax({
                                type: 'POST',
                                url: '/site/read-notice',
                                data: {'id': this.options.notice_id},
                            });
                        }
                    }
                });
            });
        }
    });
});