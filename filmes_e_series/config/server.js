/* Importar o módulos */
let express = require('express'); //framework express 
let consign = require('consign'); //consing
let bodyParser = require('body-parser'); //body-parser
let expressValidator = require('express-validator'); //express-validator

/* Iniciar o objeto do express */
let app = express();

/* Setar as variáveis 'view engine' e 'view' do express */
app.set('view engine', 'ejs');
app.set('views','./app/views');

/* Configurar o middleware */
app.use(express.static('./app/public')); //express.static
app.use(bodyParser.urlencoded({extended:true})); //body-parser
app.use(expressValidator()); //expressValidator

/*Efetua o autoload das rotas, dos models e do controllers para o objeto app*/
consign()
    .include('app/routes')
    .then('config/dbConnection.js')
    .then('app/models')
    .then('app/controllers')
.into(app);

/* Exportar o objeto do express */
module.exports = app;

