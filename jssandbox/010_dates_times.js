let val;

/*

	new Date('ano mes dia hora minuto segundo milissegundo');

*/

const today = new Date();
let birthday = new Date('9-10-1981 14:33:00');
birthday = new Date('September 10 1981');
birthday = new Date('9/10/1981');

// Retorna o número de segundos desde 1970
console.log(Date.now());

// getMonth --> 0 (Janeiro) 1 (Fevereiro) 2 (Março) ...
console.log(today.getMonth());

// getDate --> dias do mês
console.log(today.getDate());

// getDay --> 0 (Domingo) 1 (Segunda) 2 (Terça) ...
console.log(today.getDay());

// Ano
console.log(today.getFullYear());

// Horas
console.log(today.getHours());

// Minutos
console.log(today.getMinutes());

// Segundos
console.log(today.getSeconds());

// Milisegundos
console.log(today.getMilliseconds());

// Timestamp -> segundos que se passaram desde 1970
console.log(today.getTime());

console.log(today.getTimezoneOffset());

// SETTING DATE

birthday.setMonth(11);
birthday.setDate(12);
birthday.setFullYear(1985);
birthday.setHours(3);
birthday.setMinutes(30);
birthday.setSeconds(25);
birthday.setMilliseconds(300);

console.log(birthday);
console.log(typeof today);