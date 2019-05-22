const numbers =  [43, 56, 33, 23, 44, 36, 5];

const numbers2 = new Array(1, 2, 3, 4, 5, 6);

const fruits = ['Apple', 'Orange', 'Banana', 'Strawberry'];

const mixed = [34, 'Apple', null, true, undefined, {a:1, b:2}, [1, 2], new Date()];


// Get array length
console.log(mixed.length);

// Check if is array
console.log(Array.isArray(mixed));

// Get a single value
console.log(mixed[2]);
console.log(mixed[mixed.length - 1]);

// Insert into array
mixed[mixed.length] = 3;
console.log(mixed);

// Find index of value
console.log(mixed.indexOf(true));

// MUTATING ARRAYS

// Adding on to end
numbers.push(30);
console.log(numbers);

// Adding on to front
numbers.unshift(11);
console.log(numbers);

// Take off from end
numbers.pop();
console.log(numbers);

// Take off from front
numbers.shift();
console.log(numbers);

// Splice
numbers.splice(1, 1);
console.log(numbers);
numbers.splice(2, 3);
console.log(numbers);

// Reverse
numbers.reverse();
console.log(numbers);

// Concatenate arrays
console.log(numbers.concat(numbers2));

// Sort
console.log(numbers.sort());
console.log(fruits.sort());

console.log([6, 4, 2, 5, 3, 1].sort(function(x, y) {
	return x - y;
}))

console.log([1, 2, 3, 4, 5, 6].sort(function(x, y) {
	return y - x;
}))

// Find

function under50(num) {
	return num < 50;
}

function over50(num) {
	return num > 50;
}

console.log([4, 6, 54, 47, 33, 67, 21, 12].find(over50));