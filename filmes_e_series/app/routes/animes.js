module.exports = function (application)
{
    const categoria = 3;
    //
    application.get('/animes/acao', function (req, res)
    {
        application.app.controllers.midias.listUserSubcategoria(categoria, 1, application, req, res);
       // res.render('midia');
    });

    application.get('/animes/terror', function (req, res)
    {
        application.app.controllers.midias.listUserSubcategoria(categoria, 2, application, req, res);
       // res.render('midia');
    });

    application.get('/animes/drama', function (req, res)
    {
        application.app.controllers.midias.listUserSubcategoria(categoria, 3, application, req, res);
       // res.render('midia');
    });

    application.get('/animes/romace', function (req, res)
    {
        application.app.controllers.midias.listUserSubcategoria(categoria, 4, application, req, res);
       // res.render('midia');
    });

    application.get('/animes', function (req, res)
    {
        //application.app.controllers.series.list(application, req, res);
        application.app.controllers.midias.listUserCategoria(categoria, application, req, res);
        //res.render('midia');
    });
}