// FUNCTION DECLARATIONS

function greet() {
	// console.log('Hello');
	return 'Hello';
}

console.log(greet());

// FUNCTION WITH PARAMETERS

function greeting(firstName, lastName) {
	return `Hello ${firstName} ${lastName}!`;
}

console.log(greeting('Caesar', 'Augustus'));

// FUNCTION WITH STANDARD PARAMETER VALUES

function greeting2(firstName = 'John', lastName = 'Doe') {
	// if(typeof firstName === 'undefined') {
	// 	firstName = 'John';
	// }
	// if(typeof lastName === 'undefined') {
	// 	lastName = 'Doe';
	// }

	return `Hello ${firstName} ${lastName}`;
}

console.log(greeting2());

// FUNCTION EXPRESSIONS

const square = function(x) {
	return x * x;
};

console.log(square(8));

// IMMEDIATELLY INVOKABLE FUNCTION EXPRESSION

(function () {
	console.log('IIFE Ran..');
})();

(function (name) {
	console.log(`Hello ${name}`);
})('Augustus');

// PROPERTY METHODS

const todo = {
	add: function(){
		console.log('Add todo..');
	},
	edit: function(id){
		console.log(`Edit todo ${id}`);
	}
};

todo.delete = function(){
	console.log('Delete todo');
};

todo.add();
todo.edit(22);
todo.delete();