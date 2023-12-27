var options = {
  useEasing: true,
  useGrouping: true,
  separator: ".",
  decimal: ",",
};

var linea = new CountUp("linea", 0, 10, 0, 3, options);
if (!linea.error) {
  linea.start();
} else {
  console.error(linea.error);
}

var productos = new CountUp("productos", 0, 50, 0, 4, options);
if (!productos.error) {
  productos.start();
} else {
  console.error(productos.error);
}

var anos = new CountUp("anos", 0, 40, 0, 5, options);
if (!anos.error) {
  anos.start();
} else {
  console.error(anos.error);
}
