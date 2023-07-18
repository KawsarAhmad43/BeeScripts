package main

import "fmt"

func main() {
	var count int
	fmt.Println("Enter the number of values:")
	fmt.Scanln(&count)

	fmt.Println("Enter the numbers:")

	for i := 0; i < count; i++ {
		var num int
		fmt.Scanln(&num)
		fmt.Println(num)
	}
}
