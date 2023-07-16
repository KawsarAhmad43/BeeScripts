package main

import (
	"fmt"
	"strconv"
)

func main() {
	var input string
	fmt.Println("Enter your age:")
	fmt.Scanln(&input)

	age, err := strconv.Atoi(input)
	if err != nil {
		fmt.Println("Invalid input. Please enter a valid age.")
		return
	}

	if age >= 18 {
		fmt.Println("You are eligible to vote!")
	} else {
		fmt.Println("You are not eligible to vote yet.")
	}
}
