module.exports = function (application)
{
    const categoria = 1;
    //
    application.get('/series/acao', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 1, application, req, res);
       // res.render('midia');
    });

    application.get('/series/terror', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 2, application, req, res);
       // res.render('midia');
    });

    application.get('/series/drama', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 3, application, req, res);
       // res.render('midia');
    });

    application.get('/series/romace', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 4, application, req, res);
       // res.render('midia');
    });

    application.get('/series', function (req, res)
    {
        application.app.controllers.midias.listUserCategoria(categoria, application, req, res);
       // res.render('midia');
    });
}