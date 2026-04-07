module.exports = function(application)
{
    application.get('/chat',(req, res)=>
    {
        application.app.controllers.chat.iniciaChat(application, req, res);
        //res.render('chat');
    });

    application.post('/chat',(req, res)=>
    {
        application.app.controllers.chat.iniciaChat(application, req, res);
        //res.render('chat');
    });
}