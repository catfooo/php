// oop

// constructor function
function Person(firstName, lastName, dob) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = new Date(dob);
    
}

Person.prototype.getBirthYear = function() {
    return this.dob.getFullYear();
}
Person.prototype.getFullName = function() {
    return `${this.firstName} ${this.lastName}`;
}

// instantiate object
const person1 = new Person('kitty', 'katty', '2005-02-01');
const person2 = new Person('kotty', 'kutty', '2006-08-01');

console.log(person2.getFullName());
console.log(person1);
