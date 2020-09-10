// arroja un alert con input
// var usuario = prompt('identifiquese');

var primera, segunda;
primera = 20;
segunda = 24;
var comparacion = segunda > primera; 
variable = typeof(comparacion);

// console.log(variable);

// challenge 1
var masa, altura;

masa = 60;
altura = 1.70;
mati = bmi = masa / (altura * altura);

masa = 70;
altura = 1.50;
cony = bmi = masa / (altura * altura);
evaluacion = mati > cony;
console.log('matias: ' + mati + ' , cony: ' + cony );
console.log('matias tiene mayor bmi que cony ? ' + evaluacion);


// ternary opertaro 
var edad = 18;
console.log(legalidad = edad >= 18 ? "Mayor de edad " : "Menor de edad");

//challenge 2
var marcadorJhon = (89 + 120 + 103) / 3;
var marcadorMike = (116 + 94 + 123) / 3;
var marcadorMary = (97 + 134 + 165) / 3;

switch(true) {
  case marcadorJhon > marcadorMike && marcadorJhon > marcadorMary:
    console.log('Ganó el equipo de jhon con :' + marcadorJhon + " puntos.");
    break;

  case marcadorMike > marcadorJhon && marcadorMike > marcadorMary :
    console.log('Ganó el equipo de mike con :' + marcadorMike + " puntos.");
    break;
  
  case marcadorMary > marcadorMike && marcadorMary > marcadorJhon :
    console.log('Ganó el equipo de mary con :' + marcadorMary + " puntos.");
    break;
    
    default :
    console.log('los equipos empataron');
}
  
// challenge 3


function calcularTip(dinero){
  var descuento;
  
  switch(true)
  {
    case dinero < 50:
      descuento = 0.2; 
      break;

    case dinero >= 50 && dinero < 200:
      descuento = 0.15;
      break;
      
      default:
        descuento = 0.1;
  }

  return descuento * dinero;
}
      
var gastos = [124, 48, 268];
var totalTip = [
  calcularTip(gastos[0]),
  calcularTip(gastos[1]),
  calcularTip(gastos[2])
];
var totalToPay = [ 
  gastos[0] + totalTip[0],
  gastos[1] + totalTip[1],
  gastos[2] + totalTip[2]
];

console.log(totalTip , totalToPay);

// challenge 4

var matias = {
  nombreCompleto: 'matias diaz',
  peso: 70,
  altura: 1.50,
  calcularMasa: function(){
    this.masa = this.peso / (this.altura * this.altura);
    return this.masa;
  }
}

var cony = {
  nombreCompleto: 'constanza inzunza',
  peso: 70,
  altura: 1.50,
  calcularMasa: function(){
    this.masa = this.peso / (this.altura * this.altura);
    return this.masa;
  }
}

function calcularGanador(jugador1, jugador2){
  switch(true){
    case jugador1.calcularMasa() > jugador2.calcularMasa():
      console.log('Ganador ' + jugador1.nombreCompleto + ' con una masa de :' + jugador1.masa);
      break;
    case jugador2.masa > jugador1.masa:
      console.log('Ganador ' + jugador2.nombreCompleto + ' con una masa de :' + jugador2.masa);
      break;
    default:
      console.log('Empate entre ' + jugador1.nombreCompleto + ' y ' + jugador2.nombreCompleto + ' con masas de ' + jugador1.masa + ' y ' + jugador2.masa);      
  }
}

calcularGanador(matias, cony);

// challenge 4 part 1

var cuentasJohn = {
  dinero: [124, 48, 268, 260, 42],
  calcularPropina :  function(){
    this.propinas = [];
    this.totalPagar = [];

    for(var i = 0; i < this.dinero.length; i++){
      var porcentaje = 0;

      switch(true){
        case this.dinero[i] < 50:
          porcentaje = 0.2;
          break;
        case this.dinero[i] >= 50 && this.dinero[i] < 200:
          porcentaje = 0.15;
          break;
        default:
          porcentaje = 0.1;
          break;
        }

      this.propinas.push(this.dinero[i] * porcentaje);
      this.totalPagar.push(this.propinas[i] + this.dinero[i]);
    }
  }
};

cuentasJohn.calcularPropina();

// challenge 4 part 2

var cuentasMark = {
  dinero: [77, 375, 110, 45],
  calcularPropina :  function(){
    this.propinas = [];
    this.totalPagar = [];

    for(var i = 0; i < this.dinero.length; i++){
      var porcentaje = 0;

      switch(true){
        case this.dinero[i] < 100:
          porcentaje = 0.2;;
          break;
        case this.dinero[i] >= 100 && this.dinero[i] < 300:
          porcentaje = 0.1;;
          break;
        default:
          porcentaje = 0.25;
          break;
        }

      this.propinas.push(this.dinero[i] * porcentaje);
      this.totalPagar.push(this.propinas[i] + this.dinero[i]);
    }
  }
};
cuentasMark.calcularPropina();

function calcularPromedioPropinas(propinas){
  var promedioPropina = 0;
  for(var i = 0; i < propinas.length; i++){
    promedioPropina += propinas[i];
  }
  return promedioPropina / propinas.length;
}

console.log(calcularPromedioPropinas(cuentasJohn.propinas));
console.log(calcularPromedioPropinas(cuentasMark.propinas));


//lest do it!
function interviewQuestion(job){
  return function (name){
    switch (job){
      case 'diseñador':
        texto = 'hola ' + name + ' diseñador';
        break;
      case 'profesor':
        texto = 'hola ' + name + ' profesor';
        break;
      default:
        texto = 'que haces ' + name;
    }
    console.log(texto)
  }
}

interviewQuestion('diseñador')('matias');

// challenge 7
(function(){
  function Question(pregunta, alternativas, respuesta_correcta){
    this.pregunta = pregunta;
    this.alternativas = alternativas;
    this.respuesta_correcta = respuesta_correcta;
  }

  Question.prototype.evaluarRespuesta = function(respuesta){
    if(pregunta.respuesta_correcta == respuesta){
      console.log('Respuesta Correcta');
    }else{
      console.log('Respuesta Incorrecta');
    }
  }

  Question.prototype.imprimirPregunta = function(preguntaSeleccionada){
    console.log(preguntaSeleccionada.pregunta)
    for(i = 0; i < preguntaSeleccionada.alternativas.length; i++){
      console.log(i + ') ' + preguntaSeleccionada.alternativas[i]);
    }
  }
  
  var pregunta1 = Question('1+1 = ?', ['1', '2', '3'], 1);
  var pregunta2 = Question('2+4 = ?', ['0', '6', '2'], 1);
  var pregunta3 = Question('6+3 = ?', ['1', '2', '9'], 2);
  
  var preguntaAleatoria = this.preguntas[Math.floor(Math.random() * preguntas.length)];
  
  var preguntas = [pregunta1, pregunta2, pregunta3];

  var pregunta = question.seleccionarPregunta();
  question.imprimirPregunta(pregunta);
  var respuesta = parseInt(prompt('responde con una alternativa'));
  question.evaluarRespuesta(respuesta, pregunta);
}
)();