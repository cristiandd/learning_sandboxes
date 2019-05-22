let soma = 0;

function isDivisibleBy3(num) {
	return num % 3 === 0;
}

function isDivisibleBy5(num) {
	return num % 5 === 0;
}

for(let a = 0; a < 1000; a++) {
	if(isDivisibleBy3(a) || isDivisibleBy5(a)) {
		soma += a;
	}
}

console.log(soma);