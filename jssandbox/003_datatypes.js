// Primitive Types

// String
const name = 'John Doe';
console.log(typeof name);

// Number
const int = 3;
const float = 4.32;
console.log(typeof int);
console.log(typeof float);

// Boolean
const bool1 = true;
const bool2 = false;
console.log(`${typeof bool1}, ${typeof bool2}`);

// Null
const nulo = null;
console.log(typeof nulo);

// Undefined
let test1;
let test2 = undefined;
console.log(`${typeof test1}, ${typeof test2}`);

// Symbol
const sym = Symbol();
console.log(typeof sym);

// REFERENCE TYPES - Objects

// Array
const arr = [1, 2, 3];
console.log(typeof arr);

// Object literal
const obj = {a:1, b:2};
console.log(typeof obj);

// Date
const today = new Date();
console.log(today);
console.log(typeof today);