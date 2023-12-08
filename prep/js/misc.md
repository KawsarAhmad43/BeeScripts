# MISC



#### NAN:
NaN stands for "Not a Number" in JavaScript. It is a special value that represents an unrepresentable or undefined value in the context of numbers.
```javascript
const result = "Hello" / 2;

console.log(result); // NaN
console.log(isNaN(result)); // true
```

#### Curry Function
```javascript
// Magic box (curry function)
function magicBox(a) {
    return function(b) {
        return function(c) {
            return a + b + c;
        };
    };
}

// Using the magic box to add numbers
const result = magicBox(1)(2)(3);

console.log(result);  // Outputs: 6
```
#### Callback
 Callbacks are functions that are passed as arguments to another function 
```javascript
// Define a function that plays music
function playMusic() {
  console.log("Music is playing 🎵");
}

// Define a function that represents the button on the toy
function pressButton(callback) {
  // When the button is pressed, call the callback function
  callback();
}

// Now, let's press the button and see what happens
pressButton(playMusic);
```
#### Object Freeze
Object.freeze(obj) prevents any modifications to the properties of the obj object, making it immutable.
```javascript
let obj = {
  name: "john Abraham Khan",
age: "40",
};

Object.freeze(obj);
```
