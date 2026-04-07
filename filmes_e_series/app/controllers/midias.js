module.exports.listUserCategoria = function(categoria, application, req, res)
{
    switch (categoria) {
        case 1:
            res.render("categoria", {titulo:"MyListMovies - Séries"});
        break;

        case 2:
            res.render("categoria", {titulo:"MyListMovies - Filmes"});
        break;

        case 3:
            res.render("categoria", {titulo:"MyListMovies - Animes"});
        break;

        default:
            res.render("index", {titulo:"MyListMovies - Home", validacao:{}});
        break;
    }
}

module.exports.listUserSubcategoria = function(categoria, tipo, application, req, res)
{
    switch (tipo) {
        case 1:
            res.render("subcategoria", {titulo:"MyListMovies - Ação", subTitulo:"Ação"});
        break;

        case 2:
            res.render("subcategoria", {titulo:"MyListMovies - Terror", subTitulo:"Terror"});
        break;

        case 3:
            res.render("subcategoria", {titulo:"MyListMovies - Drama", subTitulo:"Drama"});
        break;

        case 4:
            res.render("subcategoria", {titulo:"MyListMovies - Romace", subTitulo:"Romace"});
        break;

        default:
            res.render("index", {titulo:"MyListMovies - Home", validacao:{}});
        break;
    }
}