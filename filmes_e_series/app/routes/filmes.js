module.exports = function (application)
{
    const categoria = 2;
    //
    application.get('/filmes/acao', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 1, application, req, res);
       // res.render('midia');
    });

    application.get('/filmes/terror', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 2, application, req, res);
       // res.render('midia');
    });

    application.get('/filmes/drama', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 3, application, req, res);
       // res.render('midia');
    });

    application.get('/filmes/romace', function (req, res)
    {
        application.app.controllers.midias.listUserCategoriaTipo(categoria, 4, application, req, res);
       // res.render('midia');
    });

    application.get('/filmes', function (req, res)
    {
        //application.app.controllers.filmes.list(application, req, res);
        application.app.controllers.midias.listUserCategoria(categoria, application, req, res);
        //res.render('midia');
    });
}