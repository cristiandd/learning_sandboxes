// document.getElementsByClassName (retorna HTML Collection)

const items = document.getElementsByClassName('collection-item');

console.log(items);
console.log(items[0]);
items[0].style.color = 'red';
items[3].textContent = 'Hello';

const listItems = document.querySelector('ul').getElementsByClassName('collection-item');

console.log(listItems);

// document.getElementsByTagName (retorna HTML Collection)

let lis = document.getElementsByTagName('li');

console.log(lis);
console.log(lis[0]);
lis[3].style.color = 'green';

// Convert HTML Collection into array
lis = Array.from(lis);
lis.reverse();
lis.reverse();
lis.forEach(function(li, index) {
	console.log(li);
	li.textContent = `Item ${index + 1}`;
});

// document.querySelectorAll (retorna NodeList)

const newItems = document.querySelectorAll('ul.collection li.collection-item');

newItems.forEach(function(item, index) {
	item.textContent = `Item ${index}`;
});

console.log(newItems);

const liOdd = document.querySelectorAll('li:nth-child(odd)');
const liEven = document.querySelectorAll('li:nth-child(even)');

liOdd.forEach(function(li, index){
	li.textContent = `Ímpar ${index + 1}`;
});

liEven.forEach(function(li, index) {
	li.textContent = `Par ${index + 1}`;
});

for(let li = 0; li < liOdd.length; li++) {
	liOdd[li].style.backgroundColor = 'skyblue';
	liOdd[li].style.color = 'red';
}

for(let li = 0; li < liEven.length; li++) {
	liEven[li].style.backgroundColor = 'cyan';
	liEven[li].style.color = 'magenta';
}