let val;

const list = document.querySelector('ul.collection');
const listItem = document.querySelector('li.collection-item');

val = listItem;
val = list;

// Get child nodes
val = list.childNodes;
val = list.childNodes[0];
val = list.childNodes[0].nodeName;
val = list.childNodes[1].nodeType;

/* Types of Nodes
	
	1 - Element
	2 - Attribute (deprecated)
	3 - Text node
	8 - Comment
	9 - Document itself
	10 - Doctype

*/

// Get children element nodes
val = list.children;
val = list.children[0];
val = list.children[0].textContent = 'Hello';

// Children of children
list.children[3].children[0].id = 'test-link';
val = list.children[3].children[0];

// First Child & First Element Child
val = list.firstChild;
val = list.firstElementChild;

// Last Child & Last Element Child
val = list.lastChild;
val = list.lastElementChild;

// Child Element Count
val = list.childElementCount;

// Get Parent Node

val = listItem.parentNode;
val = listItem.parentElement;
val = listItem.parentElement.parentElement;

// Get next sibling
val = listItem.nextSibling;
val = listItem.nextElementSibling;
val = listItem.nextElementSibling.nextElementSibling;

// Get previous sibling
// val = listItem.previousSibling;
val = listItem.previousElementSibling;


console.log(val);