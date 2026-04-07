function MidiasDAO(connection) 
{
    this._connection = connection;
}

//Devolve um json com todos os filmes e series em orden alfabetica
MidiasDAO.prototype.getMidias = function (callback)
{
    this._connection.query('SELECT mi.*, cat.nome as categoria FROM Midias AS mi INNER JOIN categorias AS cat ON mi.fkCategoria = cat.idCategoria ORDER BY nome;',callback);
}

MidiasDAO.prototype.delMidia = function (id,callback)
{
    this._connection.query('DELETE FROM midias WHERE idMidia = ?;',id,callback);
}

MidiasDAO.prototype.getMidiasCatgoria = (categoria, subcategoria, callback) =>
{
    this._connection.query('SELECT * FROM vw_midias_subcategorias WHERE idCategoria = ? AND idSubCategoria = ? limit 20;', categoria, subcategoria);
}

MidiasDAO.prototype.getMidiasCatgoriaLimitado = (tipo,callback) =>
{
    this._connection.query('SELECT * FROM vw_midias where categoria = 1, subCategoria = 1');
}

module.exports = () => { return MidiasDAO;}