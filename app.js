const express =  require("express");
const bodyParser = require("body-parser");
var app = express();
const archivos = require('fs');
var cors = require('cors')

var db = {
    initDB: function () {
        var fs = require("fs");
        var contents = fs.readFileSync("./peliculas.json");
        this.peliculas = JSON.parse(contents);
    },
    getPeliculasBy: function (filter, value) {
        console.log("filtro: " + filter + "valor: " + value);
        var selected = null;
        this.peliculas.forEach(pelicula => {
            console.log(pelicula);
            console.log(pelicula[filter]);
            if (pelicula[filter] == value) {
                selected = pelicula;
                return selected;
            }
        });
        return selected;
    },
    deletePeliculasByTitulo : function (año) {
      var index;
      for (index = 0; index < this.peliculas.año; index++) {
        if(this.peliculas[index].año == año )
        break;
      }
      if(index<db.peliculas.length){
        delete db.peliculas[index];
        db.peliculas.splice(index, 1);
        db.savePeliculas();
      }
    },

    editPelicula : function(pelicula){
      for (var index = 0; index < this.peliculas.length; index++) {
        if(this.peliculas[index].año == pelicula.tituloOld ){
          console.log("Pelicula encontrado.");
          this.peliculas[index].titulo = pelicula.tituloNew;
          this.peliculas[index].año = pelicula.añoNew;
          this.peliculas[index].genero = pelicula.generoNew;
          this.peliculas[index].edo = pelicula.estadoNew;
          this.peliculas[index].precio = pelicula.precioNew;
          this.peliculas[index].entrada = pelicula.entradaNew;
          break;
        }else{
          console.log("Pelicula no encontrado.");
        }
      }
      console.log(this.peliculas)
      db.savePeliculas();
    },

    savePeliculas : function(){
      archivos.writeFileSync('peliculas.json', JSON.stringify(this.peliculas),
        function (error) {
            if (error) {
                console.log('Hubo un error al escribir en el archivo')
                console.log(error);
            }
        });
    }
    
}
app.use(cors());
app.use(express.static('assets'));
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());


app.get('/',function(req,res){
  res.sendfile("index.html" );
});

app.route("/peliculas")
  .get( (req, res) => {
    db.initDB();
    res.json(db.peliculas);
  })
  .post((req,res)=> {
    db.initDB();
    var pelicula = req.body;
    console.log("Objeto post recibido");
    console.log(pelicula);
    db.peliculas.push(pelicula);
    db.savePeliculas();
    res.json({'status' : 'OK'});
  })
  .delete((req,res)=> {
    db.initDB();
    var pelicula = req;
    console.log("Objeto delete recibido");
    console.log(pelicula);
    db.deletePeliculasByTitulo( pelicula.año );
    //console.log(db.peliculas);
    res.json({'status' : 'OK'})
  })
  .put((req,res)=>{
    db.initDB();
    var pelicula = req.body;
    console.log("Objeto put recibido");
    console.log(pelicula);
    db.editPelicula(pelicula);
    res.json({'status' : 'OK'})
  });

app.get('/peliculas/:titulo', (req, res) => {
  db.initDB();
  var titulo = req.params.titulo;
  var pelicula = db.getPeliculasBy('titulo', titulo);
  res.json(pelicula);
});

app.listen(process.env.PORT||3000,function(){
  console.log("Started on PORT 3000");
})
