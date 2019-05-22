const person = {
	firstName: 'Steve',
	'last Name': 'Smith',
	age: 30,
	hobbies: ['music', 'sports'],
	address: {
		city: 'Miami',
		state: 'FL'
	},
	getBirthYear: function() {
		return 2019 - this.age;
	}
}

console.log(person);
console.log(person.firstName);
console.log(person['firstName']);
console.log(person['last Name']);
console.log(person.hobbies[1]);
console.log(person.address.city);
console.log(person.address['state']);
console.log(person['address']['city']);
console.log(person.getBirthYear());


const people = [
	{ name: 'John', age: 30 },
	{ name: 'Mike', age: 23 }
]

for (let i = 0; i < people.length; i++) {
	console.log(people[i].name);
}