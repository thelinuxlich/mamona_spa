define(['plugins/router', 'durandal/app'], function (router, app) {
    return {
        router: router,
        search: function() {
            app.showMessage('Teste...');
        },
        activate: function () {
            router.map([
                { route: '', title:'Home', moduleId: 'viewmodels/home/index', nav: true },
            ]).buildNavigationModel();

            return router.activate();
        }
    };
});