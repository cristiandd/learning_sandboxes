// document.querySelector('.clear-tasks').addEventListener('click', function(e) {

// 	console.log('Hello World');
// 	// Caso o link[href] não tenha um '#' mas está vazio ou possui um link, é preciso usar o preventDefault no event object
// 	// O preventDefault vai prevenir o comportamento padrão do elemento
// 	e.preventDefault();

// });

document.querySelector('.clear-tasks').addEventListener('click', onClick);

function onClick(e) {
	e.preventDefault();
	// console.log('Clicked');

	let val;

	val = e;

	// Event target element

	val = e.target;
	val = e.target.id;
	val = e.target.className;
	val = e.target.classList;
	// e.target.innerText = 'Hello';

	// Event type
	val = e.type;

	// Timestamp
	val = e.timeStamp;

	// Coords event relative to the window
	val = e.clientY;
	val = e.clientX;

	// Coords event relative to the element
	val = e.offsetY;
	val = e.offsetX;

	console.log(val);
}