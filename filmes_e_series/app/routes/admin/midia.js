module.exports = function (application)
{
    // Lista dos ultimos 10 cadastros
    application.get("/adm/list_midia",(req, res)=>
    {
        application.app.controllers.admin_midia.listAdminMidia(application, req, res);
    });

    application.route('/adm/nova_midia/')
        .get((req, res)=>
        {
            application.app.controllers.admin_midia.createAdminMidia(application, req, res);
        })
        .post((req, res)=>
        {
            //application.app.controllers.admin_midia.listAdminMidia(application, req, res);
            res.send("Foi criada uma nova midia");
        });
    //fim route

    application.route('/adm/editar_midia/')
        .get((req, res)=>
        {
            application.app.controllers.admin_midia.editAdminMidia(application, req, res);
        })
        .post((req, res)=>
        {
            //application.app.controllers.admin_midia.listAdminMidia(application, req, res);
            res.send("Uma midia foi editada");
        });
    //fim route 

    application.get('/adm/midia/deletar/:id?',(req, res) =>
        {
            application.app.controllers.admin_midia.deleteAdminMidia(application, req, res);
        })
    ;
}