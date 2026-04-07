module.exports = function (application)
{
    application.get('/sinopse', function (req, res)
    {
        res.render('sinopse');
        //res.render('index');
    });
    
    application.get('/', function (req, res)
    {
        application.app.controllers.index.home(application, req, res); 
        //res.render('index');
    });
}