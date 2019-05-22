// var, let, const

// Var declaration
var name = 'Caesar';
console.log(name);
name = 'Augustus';
console.log(name);

// Init var
var greeting;
console.log(greeting);
greeting = true;
console.log(greeting);

// Conventions (use camelCase)
var firstName = 'Caesar'; // camelCase
var first_name = 'Augustus'; // underscore
var FirstName = 'Gaius'; // PascalCase
var firstname = 'Cassius';

// Let
let fullName;
console.log(fullName);
fullName = 'Caesar Augustus';
console.log(fullName);
fullName = 'Cicerus';
console.log(fullName);

// Const (constant)
const number = 3;
console.log(number);
//number = 7; (error)
//const otherNumber; (error)

// Constant Object (it's possible to alter its values but it isn't possible to reassign the array) (The same applies to arrays)
const person = { 
	name: 'John'
}

person.name = 'Sara';
person.gender = 'Female';
// person = {a:1, b:2}; (error)
console.log(person);