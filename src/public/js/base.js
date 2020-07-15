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