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
    systemConfig: Backbone.View.extend({
        el: $('#systemDiv'),
        events: {
            'click .add': 'addInfo',
            'click .edit': 'editInfo',
            'click .reset': 'resetInfo'
        },
        initialize: function() {
            var tap = '<h1><%=width%></h1>';
            this.$el.append(_.template(tap, {width: '我的个大擦'}));
            this.table = this.$('.systemTable');
            this.render();
        },
        render: function() {
            var _this = this;
            _this.table.append(exports.tpl({config: _this.getConfig()}));
        },
        getConfigInfo: function() {

        },
        addInfo: function() {

        },
        editInfo: function() {
            var _this = this,
                id = '',
                data,
                value = '',
                datas = [];
            this.table.find('tr').each(function(k, v) {
                data = {};
                id = $(v).children('td.info').children().prop('id');
                value = $(v).children('td.info').children().prop('value');
                if (typeof id !== 'undefined') {
                    data['id'] = id;
                    data['value'] = value;
                    datas.push(data);
                }
            });
            datas = JSON.stringify(datas);
            $.ajax({
                type: "GET",
                url: '/admin/System/editConfig',
                async: false,
                data: {data: datas},
                dataType: "json",
                success: function(data) {
                    alert('修改成功');
                }
            });
        },
        resetInfo: function() {

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
        }
    })
};

new exports.systemConfig;
