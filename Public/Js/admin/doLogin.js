var loginModel = Backbone.Model.extend({
    defaults: function() {
        return {
            done : true
        }
    }
});

var loginView = Backbone.View.extend({
    username: '',
    password: '',
    data: {},
    alertError: '用户名或密码错误',
    el: $(".admin_login"),
    events: {
        'click .submit_btn': 'doLogin'
    },
    initialize: function() {
        this.model = new loginModel;
    },
    doLogin: function() {
        var _this = this,
            result;
        _this.info();
        if (_this.username === '' || _this.password === '' || _this.sendData() === false) {
            _this.$('.log').html(this.alertError);
            _this.$('.log').addClass('error');
            _this.$('.username').val('');
            _this.$('.password').val('');
            return ;
        }
        
        window.location.href="/admin";
    },
    sendData: function() {
        var _this = this,
            result = false;
        $.ajax({
            type: "POST",
            url: '/admin/Login/doLogin',
            async: false,
            data: this.info(),
            dataType: "json",
            success: function(data) {
                if (data === true) {
                   result = true;
                }
            }
        });
        return result;
    },
    info: function() {
        this.username = this.$('.username').val();
        this.password = this.$('.password').val();
        return {
            username: this.username,
            password: this.password
        };
    }
});

new loginView;

