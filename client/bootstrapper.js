define(['durandal/app', 'durandal/viewLocator', 'durandal/system', 'plugins/router'],
function(app, viewLocator, system, router) {

    system.debug(true);
    app.title = 'Mamona Framework SPA';
    app.start().then(function() {
        viewLocator.useConvention();
        app.setRoot('viewmodels/shell', 'entrance');
    });
});