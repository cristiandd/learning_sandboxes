function fibonacci(topo) {
	let anterior = 1;
	let proximo = 0;
	const fibonacci = [];
	for(a = 1; a < topo; a = proximo) {
		proximo = a + anterior
		anterior = a;
		fibonacci.push(a);
	}
	return fibonacci;
}

function numPares(array) {
	const numPares = [];
	array.forEach(function(valor) {
		if(valor % 2 === 0) {
			numPares.push(valor);
		}
	});
	return numPares;
}

function somaPares(array) {
	const soma = array.reduce(function(anterior, acumulador) {
		return acumulador + anterior;
	});
	return soma;
}

console.log(somaPares(numPares(fibonacci(4000000))));