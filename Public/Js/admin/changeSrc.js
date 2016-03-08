var exports = {
    changeSrc: Backbone.View.extend({
        iframe: {},
        el: $('aside'),
        events: {
            'click dd a': 'startIframe',
        },
        initialize: function() {
            this.iframe = this.$el.parent().find('iframe');
        },
        render: function() {
        },
        startIframe: function(e) {
            this.$('a').removeClass('active');
            var src = $(e.target).addClass('active').attr('toWhere');
            this.iframe.attr('src', src);
        }
    })
};

new exports.changeSrc;


