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