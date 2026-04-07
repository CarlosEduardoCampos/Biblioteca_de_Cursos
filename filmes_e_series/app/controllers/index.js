module.exports.home = function(application, req, res)
{
    res.render("index", {titulo:"MyListMovies - Home", validacao:{}});
}