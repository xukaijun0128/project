var systemConfig = Backbone.View.extend({
    el: $('#Main').contents().find('#systemDiv'),
    events: {
        'click .add': 'addInfo',
        'click .edit': 'editInfo',
        'click .reset': 'resetInfo'
    },
    initialize: function() {
        this.table = this.$('.systemTable');
        this.render();
    },
    render: function() {
        var _this = this;
        $.each(_this.getConfig(), function(k,v) {
            _this.table.append(
                "<tr>" +
                    "<td style='width:265px;'>" +
                        "<div class='cut_title ellipsis'>" + v.parameter + "</div>" +
                    "</td>" +
                    "<td class='info'><input type='text' value="+v.value+" id="+v.id+"></td>" +
                    "<td>"+ v.variable +"</td>" +
                "</tr>"
            );
        });
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

});

new systemConfig;
