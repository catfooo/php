// oop

// constructor function
function Person(firstName, lastName, dob) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = dob;
}

// instantiate object
const person1 = new Person('kitty', 'katty', '1-2-2005');
const person2 = new Person('kotty', 'kutty', '1-8-2006');

console.log(person2.firstName);
