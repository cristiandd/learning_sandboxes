// document.getElementById()

console.log(document.getElementById('task-title'));

// Get things from the element

console.log(document.getElementById('task-title').id);
console.log(document.getElementById('task-title').className);

const taskTitle = document.getElementById('task-title');

// Change styling

taskTitle.style.background = '#333';
taskTitle.style.color = '#fff';
taskTitle.style.padding = '5px';
// taskTitle.style.display = 'none';

// Change content

taskTitle.textContent = 'Task List';
taskTitle.innerText = 'My Tasks';
taskTitle.innerHTML = '<span style="color:red">Task List</span>';

// document.querySelector()

// By Id
console.log(document.querySelector('#task-title'));
// By Class
console.log(document.querySelector('.card-title'));
// By Tag Name
console.log(document.querySelector('h5'));
// By Attribute
console.log(document.querySelector('[href]'));

document.querySelector('li').style.color = 'red';
document.querySelector('ul li').style.color = 'blue';
document.querySelector('ul li:last-child').style.color = 'red';
document.querySelector('ul li:nth-child(3)').style.color = 'green';
document.querySelector('ul li:nth-child(even)').style.color = 'orange';
document.querySelector('ul li:nth-child(4)').textContent = 'Hello World';