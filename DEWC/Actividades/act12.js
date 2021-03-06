// a y b
function Vehiculo(marca, modelo, color, anyo) {
    this.marca = marca;
    this.modelo = modelo;
    this.color = color;
    this.anyo = anyo;
    // h
    this.arrancar = function () {
        return `El coche de marca ${this.marca}, modelo ${this.modelo}, de color ${this.color} ha arrancado.`
    }
}

// c
var vehiculo1 = new Vehiculo();
vehiculo1.marca = "Peugeot";
vehiculo1.modelo = "2008";
vehiculo1.color = "Gris oscuro";
vehiculo1.anyo = "2019";

var vehiculo2 = new Vehiculo("Ford", "Mondeo", "Blanco", "2020");
//vehiculo2.marca = "Ford";
//vehiculo2.modelo = "Mondeo";
//vehiculo2.color = "Blanco";
//vehiculo2.anyo = "2020";

// d
console.log("Apartado d: " + vehiculo1.marca);

// e
console.log("Apartado e: " + vehiculo2['color']);

// f
Vehiculo.prototype.mostrarDatos = function () {
    return `El coche es un ${this.marca} ${this.modelo} de color ${this.color} y es del año ${this.anyo}`;
}
console.log("Apartado f: " + vehiculo1.mostrarDatos());

// g
Vehiculo.prototype.acelerar = function (velocidad) {
    return `El coche ${this.marca} ${this.modelo} ha acelerado a ${velocidad} km/h`;
}
console.log("Apartado g: " +  vehiculo1.acelerar(120));

// h
console.log("Apartado h: " + vehiculo1.arrancar());

// i
Vehiculo.prototype.cilindrada;
vehiculo1.cilindrada = 800;
vehiculo2.cilindrada = 500;
console.log("Apartado i Vehiculo1: "+ vehiculo1);
console.log(vehiculo1);

console.log("Apartado i Vehiculo2: " + vehiculo2);
console.log(vehiculo2);

// j
Vehiculo.prototype.frenar = function () {
    return `El coche de marca ${this.marca}, modelo ${this.modelo}, color ${this.color} ha parado.`
}
console.log("Apartado j Vehiculo1: " + vehiculo1.frenar());

console.log("Apartado j Vehículo2: " + vehiculo2.frenar());


// k
var res = '';
for (const key in vehiculo1) {
    res += `${key} `;
}
console.log("Apartado k (for in): ");
console.log(res);  //Muestra todas las propiedades y métodos. Los que están en la función constructora y los que se añaden con prototype

console.log("Apartado k (getOwn): ");
console.log(Object.getOwnPropertyNames(vehiculo1)); // Muestra las propiedades y métodos incluidos en la función constructora

console.log("Apartado k (keys): ");
console.log(Object.keys(vehiculo1));  // Muestra las propiedades y métodos incluidos en la función constructora

var res2 = '';
for (const key in vehiculo1) {
    if (typeof vehiculo1[key]!="function"){
    res2 += `${key} `;
    }
}
console.log("Apartado k filtrando functions (for in): ");
console.log(res2);  //Ahora solo muestra las propiedades que no son function

Object.defineProperties(vehiculo1, {
    
    mostrarDatos: {
        configurable: true,
        writable: true,
        enumerable: false,
        value: vehiculo1.mostrarDatos,
    },
    acelerar: {
        configurable: true,
        writable: true,
        enumerable: false,
        value: vehiculo1.acelerar,
    },
    arrancar: {
        configurable: true,
        writable: true,
        enumerable: false,
        value: vehiculo1.arrancar,
    },
    frenar: {
        configurable: true,
        writable: true,
        enumerable: false,
        value: vehiculo1.frenar,
    },

    marca: {
        configurable: true,
        writable: true,
        enumerable: true,
        value: vehiculo1.marca,
    },
});

var res3 = '';
for (const key in vehiculo1) {
    res3 += `${key} `;
}
console.log("Apartado k con propiedades modificadas (for in): ");
console.log(res3);  //Muestra todas las propiedades y métodos con enumerable true. Los que están en la función constructora y los que se añaden con prototype

console.log("Apartado k con propiedades modificadas (getOwn): ");
console.log(Object.getOwnPropertyNames(vehiculo1)); // Muestra las propiedades y métodos incluidos en la función constructora (o definidos con definePropierties) con enumerable true y false.

console.log("Apartado k con propiedades modificadas (keys): ");
console.log(Object.keys(vehiculo1));  // Muestra las propiedades y métodos incluidos en la función constructora (o definidos con definePropierties) con enumerable true
