let mysql = require('mysql');

let connMySQL = function()
{
    return mysql.createConnection(
    {
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'mylistmovie',
        port:'3306'
    }); 
}

module.exports = function()
{
    return connMySQL;
} 