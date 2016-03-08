var exports = {
    tpl: _.template(
        '<% _.each(config, function(item) {%>' +
        '<tr>' +
            '<td style="width:265px">' +
                '<div class="cut_title ellipsis"><%= item.parameter %></div>' +
            '</td>' +
            '<td class="info"><input type="text" value=<%= item.value %> id=<%= item.id %>>' +
            '</td>' +
            '<td><%= item.variable %></td>' +
        '</tr>' +
      '<% }) %>'
    ),
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
    getConfig: function() {
        var configData = [];
        $.ajax({
            type: "GET",
            url: '/admin/System/getConfig',
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
        }
    })
};

new exports.systemUser;
