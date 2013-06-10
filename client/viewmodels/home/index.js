define(function() {
    var home = function () {
        this.displayName = 'Bem-vindo!';
    };

    home.prototype.viewAttached = function (view) {
        //you can get the view after it's bound and connected to it's parent dom node if you want
    };

    return home;
});