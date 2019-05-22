const form = document.querySelector('form');
const taskInput = document.getElementById('task');
const heading = document.querySelector('h5');
const select = document.querySelector('select');

// Clear input
taskInput.value = '';

// Submit
// form.addEventListener('submit', runEvent);

// Key down
// taskInput.addEventListener('keydown', runEvent);

// Key up
// taskInput.addEventListener('keyup', runEvent);

// Key press
// taskInput.addEventListener('keypress', runEvent);

// Focus
// taskInput.addEventListener('focus', runEvent);

// Blur
// taskInput.addEventListener('blur', runEvent);

// Cut
taskInput.addEventListener('cut', runEvent);

// Paste
taskInput.addEventListener('paste', runEvent);

// Copy
taskInput.addEventListener('copy', runEvent);

// Select
taskInput.addEventListener('select', runEvent);

// Input
taskInput.addEventListener('input', runEvent);

// Change
select.addEventListener('change', runEvent);

function runEvent(e) {
	// e.preventDefault();
	console.log(`EVENT TYPE: ${e.type}`);

	// console.log(e.target.value);

	// heading.innerText = e.target.value;

	// Get input value
	// console.log(taskInput.value);
}