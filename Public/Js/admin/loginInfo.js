var exports = {
    tpl: _.template($('#tpl_user').html()),
    deleteAjax: function(num) {
        $.ajax({
            type: "GET",
            url: '/admin/System/deleteLog',
            async: false,
            data: {num: num},
            dataType: "json",
            success: function() {
                alert('删除成功');
            }
        });
    },
    getLog: function() {
        var configData = [];
        $.ajax({
            type: "GET",
            url: '/admin/System/getlog',
            async: false,
            dataType: "json",
            success: function(data) {
                configData = data;
            }
        });
        return configData;
    },
    systemLog: Backbone.View.extend({
        table: {},
        el: $('#systemUser'),
        events: {
            'click .clear': 'clearLog'
        },
        initialize: function() {
            this.table = this.$('.userTable');
            this.render();
        },
        render: function() {
            var _this = this;
            this.table.append(exports.tpl({config: exports.getLog()}));
        },
        clearLog: function(e) {
            var num = $(e.target).attr('num');
            exports.deleteAjax(num);
        }
    })
};

new exports.systemLog;
