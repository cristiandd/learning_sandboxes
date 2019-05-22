const name = 'Marcos';
const age = 40;
const job = 'Web Developer';
const city = 'Rio de Janeiro';
let html;

// Without template strings (es5)
html = '<ul><li>Name: ' + name + '</li><li>Age: ' + age + '</li><li>Job: ' + job + '</li><li>City: ' + city + '</li></ul>'

html = '<ul>' +
		'<li>Name: ' + name + '</li>' +
		'<li>Age: ' + age + '</li>' +
		'<li>Job: ' + job + '</li>' +
		'<li>City: ' + city + '</li>' +
		'</ul>';

function hello() {
	return 'hello';
}

// With template strings (es6)
html = `<ul>
			<li>Name: ${name}</li>
			<li>Age: ${age}</li>
			<li>Job: ${job}</li>
			<li>City: ${city}</li>
			<li>${hello()}</li>
			<li>${age >= 40 ? 'Olá' : 'Oi' }</li>
		</ul>
		`

document.body.innerHTML = html;