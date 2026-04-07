module.exports.listAdminMidia = function(application, req, res)
{
    let connection = application.config.dbConnection();
    let midiaDAO = new application.app.models.MidiasDAO(connection);

    midiaDAO.getMidias((error, result) => 
    {
        res.render("admin/list_midia", {titulo:"MyListMovies - Midias", midias:result});
    });
}

module.exports.createAdminMidia = function(application, req, res)
{
    res.render("admin/form_midia", {titulo:"MyListMovies - Nova Midia", rota_post:"/adm/nova_midia/",midia:''});
}

module.exports.editAdminMidia = function(application, req, res)
{
    res.render("admin/form_midia", {titulo:"MyListMovies - Editar Midia", rota_post:"/adm/editar_midia/", midia:''});
}
module.exports.deleteAdminMidia = function(application, req, res)
{
    let connection = application.config.dbConnection();
    let midiaDAO = new application.app.models.MidiasDAO(connection);

    midiaDAO.delMidia(req.params.id, (error, result) =>
    {
        res.redirect('/adm/list_midia');
    });
}