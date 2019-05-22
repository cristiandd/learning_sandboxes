let val;

// Number to string
val = String(52);
val = String(4+4);

// Boolean to string
val = String(true);

// Date to string
val = String(new Date());

// Array to string
val = String([1, 2, 3]);

// Object to string
val = String({a:1, b:2});

// toString() method

val = (5).toString();
val = (true).toString();
//val = 5.toString(); ERROR!!!

// String to number
val = Number('5');
val = Number('word'); // NaN

// Boolean to number
val = Number(true); // 1
val = Number(false); // 0

// Null to number
val = Number(null); // 0

// Undefined to number
val = Number(undefined); // NaN

// Array to number
val = Number(new Array(1, 2, 3)); // NaN

// Object to number
val = Number({a:1, b:2}); // NaN

// parseInt() method
val = parseInt('100');
val = parseInt('100.32'); // ignores the floating point
val = parseFloat('100');
val = parseFloat('100.32');

// Output
console.log(val);
console.log(typeof val);
console.log(val.length); // length only works on strings
console.log(val.toFixed(2));

//////////////////////////////////////////////

// Type Coercion
const val1 = '1';
const val2 = 2;
const sum = val1 + val2;
console.log(sum);
console.log(typeof sum);