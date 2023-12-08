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
```
NAN
```javascript
```
