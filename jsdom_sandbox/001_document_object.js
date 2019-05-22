let val;

val = document;
val = document.all; // Retorna HTML ALL Collection
val = document.all[9];
val = document.all.length;
val = document.head;
val = document.body;
val = document.doctype;
val = document.domain;
val = document.URL;
val = document.characterSet;
val = document.charset;
val = document.inputEncoding;
val = document.contentType;
val = document.documentURI;
val = document.activeElement;
val = document.lastModified;
val = document.title;

val = document.forms; // Retorna HTML Collection
val = document.forms[0];
val = document.forms[0].id;
val = document.forms[0].method;
val = document.forms[0].action;

val = document.links; // Retorna HTML Collection
val = document.links[5];
val = document.links[5].className;
val = document.links[5].classList; // Retorna DOM Token List
val = document.links[5].classList[2];

val = document.images; // Retorna HTML Collection

val = document.scripts;
val = document.scripts[2].baseURI;
val = document.scripts[2].getAttribute('src');
val = document.scripts[2].getAttributeNames();

let scripts = document.scripts; // Retorna HTML Collection

let scriptsArr = Array.from(scripts);

scriptsArr.forEach(function(script) {
	console.log(script.getAttribute('src'));
});

console.log(val);