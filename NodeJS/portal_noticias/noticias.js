let http = require('http');

http.createServer(function (req,res)
{
    let categoria = req.url;

    if (categoria == '/tecnologia')
    {
        res.end("<html><body> Notícias de Tecnologia </body></html>");
    }

    else if (categoria == '/moda')
    {
        res.end("<html><body> Notícias de Moda </body></html>");
    }

    else if (categoria == '/beleza')
    {
        res.end("<html><body> Notícias de Beleza </body></html>");
    }
    else{
        res.end("<html><body>Partal de notícias </body></html>");
    }
}).listen(3000);

