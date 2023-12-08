# Js OOP

Basic class
```javascript
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    sayHello() {
        console.log(`Hello, my name is ${this.name}`);
    }
}

const person = new Person("John", 30);
console.log(person.name);  // Accessing property
person.sayHello(); 
```

Inheritance
```javascript
class Student extends Person {
    constructor(name, age, grade) {
        super(name, age);
        this.grade = grade;
    }
}

const student = new Student("Alice", 18, "A");

console.log(student.name);      // Inherited property
student.sayHello();  
```
