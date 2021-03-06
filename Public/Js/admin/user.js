var exports = {
    tpl: _.template($('#tpl_user').html()),
    editAjax: function(data) {
        $.ajax({
            type: "GET",
            url: '/admin/System/editConfig',
            async: false,
            data: {data: data},
            dataType: "json",
            success: function() {
                alert('修改成功');
            }
        });
    },
    getUser: function() {
        var configData = [];
        $.ajax({
            type: "GET",
            url: '/admin/System/getUser',
            async: false,
            dataType: "json",
            success: function(data) {
                configData = data;
            }
        });
        return configData;
    },
    systemUser: Backbone.View.extend({
        table: {},
        el: $('#systemUser'),
        events: {
            
        },
        initialize: function() {
            this.table = this.$('.userTable');
            this.render();
        },
        render: function() {
            var _this = this;
            this.table.append(exports.tpl({config: exports.getUser()}));
        }
    })
};

new exports.systemUser;
