const firstName = 'William';
const lastName = 'Johnson';
const str = 'Hello there, my name is Caesar';
const tags = 'orange, blue, green, yellow, pink, red, silver, black, white';

let val;

// Concatenation
val = firstName + lastName;
val = firstName + ' ' + lastName;

// Append
val = 'Caesar ';
val += 'Augustus';

// Escaping
val = "That's awesome, I can't wait";
val = 'That\'s awesome, I can\'t wait';

// length
val = firstName.length;

// concat()
val = firstName.concat(' ', lastName);

// Change case
val = firstName.toUpperCase();
val = firstName.toLowerCase();

// Return string character
val = firstName[2];

// indexOf()
val = firstName.indexOf('l');
val = firstName.lastIndexOf('l');

// charAt()
val = firstName.charAt(1);
// Get last character
val = firstName.charAt(firstName.length -1);

// substring()
val = firstName.substring(0, 4);

// slice()
val = firstName.slice(0, 4);
val = firstName.slice(-4);

// split()
val = str.split();
val = str.split('');
val = str.split(' ');
val = tags.split(',');

// replace()
val = str.replace('Caesar', 'Julius');

// includes()
val = str.includes('word');

console.log(val);