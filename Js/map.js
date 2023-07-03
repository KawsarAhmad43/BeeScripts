//the primary purpose of map is to transform each element of an array into a new value or object. It allows you to apply a specific operation to each element and create a new array based on the results. This is useful when you want to modify the values or structure of an existing array without mutating the original array.

//example 1
const numbers = [1, 2, 3, 4, 5];

const doubledNumbers = numbers.map(function (number) {
  return number * 2;
});
console.log(doubledNumbers);

//it can be done using array function too
const newNumbers = [2, 3, 4, 5, 6];
const newDoubledNumbers = newNumbers.map(newNumbers => newNumbers * 2);
console.log(newDoubledNumbers);

//example 2
const names = ["sarfaraz", "eva", "mesbah"];
const capitalizedNames = names.map(function(name) {
  return name.toUpperCase();
});
console.log(capitalizedNames);
//array function
const names = ["sarfaraz", "eva", "mesbah"];
const capitalizedNames = names.map(name => name.toUpperCase());
console.log(capitalizedNames);

//example 3
const users = [
  { name: "eva", age: 23 },
  { name: "sarfaraz", age: 25 },
  { name: "mesbah", age: 28 }
];
const userNames = users.map(function(user) {
  return user.name;
});
console.log(userNames);
//array function
const users = [
  { name: "eva", age: 23 },
  { name: "sarfaraz", age: 25 },
  { name: "mesbah", age: 28 }
];
const userNames = users.map(user => user.name);
console.log(userNames);


//example 4
const products = [
  { id: 1, name: "watch", price: 5000 },
  { id: 2, name: "sneakers", price: 8000 },
  { id: 3, name: "perfume", price: 1500 }
];

const discountedProducts = products.map(function(product) {
  return {
    id: product.id,
    name: product.name,
    price: product.price * 0.8 // Applying a 20% discount
  };
});

console.log(discountedProducts);
//array function
const products = [
  { id: 1, name: "watch", price: 5000 },
  { id: 2, name: "sneakers", price: 8000 },
  { id: 3, name: "perfume", price: 1500 }
];

const discountedProducts = products.map(product => ({
  id: product.id,
  name: product.name,
  price: product.price * 0.8 // Applying a 20% discount
}));

console.log(discountedProducts);



//example 5
//suppose we want discount in different percentage in each product
const products = [
  { id: 1, name: "watch", price: 5000 },
  { id: 2, name: "sneakers", price: 8000 },
  { id: 3, name: "perfume", price: 1500 }
];

const discountedProducts = products.map(product => {
  let discountPercentage;

  switch (product.name) {
    case "watch":
      discountPercentage = 0.2; // 20% discount
      break;
    case "sneakers":
      discountPercentage = 0.1; // 10% discount
      break;
    case "perfume":
      discountPercentage = 0.05; // 5% discount
      break;
    default:
      discountPercentage = 0; // No discount for other products
      break;
  }

  return {
    id: product.id,
    name: product.name,
    price: product.price * (1 - discountPercentage)
  };
});

console.log(discountedProducts);
//example 6 suppose i have multiple category products in my store [electric,food,sports] from there i want to get sum of all available electric products sum
const products = {
  electric: [
    { id: 1, name: "TV", price: 20000 },
    { id: 2, name: "Laptop", price: 50000 },
    { id: 3, name: "Refrigerator", price: 30000 }
  ],
  food: [
    { id: 1, name: "Apple", price: 50 },
    { id: 2, name: "Banana", price: 20 },
    { id: 3, name: "Orange", price: 30 }
  ],
  sports: [
    { id: 1, name: "Football", price: 1000 },
    { id: 2, name: "Tennis racket", price: 1500 },
    { id: 3, name: "Basketball", price: 800 }
  ]
};

const electricProducts = products.electric;

const electricProductsList = electricProducts.map(product => product.name);
const totalTaka = electricProducts.reduce((sum, product) => sum + product.price, 0);

console.log("Electric Products List:", electricProductsList);
console.log("Total Taka:", totalTaka);



//example 7
const names = [
  { 
  name: "Hasan",
  title: "hasan", 
  count: [10, 20, 30]
  },
  { 
  name: "Abdul", 
  title: "abdul", 
  count: [50, 80, 30]
  },
  {
  name: "Karim", 
  title: "karim", 
  count: [20, 20, 90]
  }
];

// Extract and sum the count arrays for each object
const individualSums = names.map(obj => obj.count.reduce((sum, num) => sum + num, 0));
console.log(individualSums);
// sum all the individualSums
const totalSum = individualSums.reduce((sum,num)=>sum+num,0);
console.log(totalSum);





