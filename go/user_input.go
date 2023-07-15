package main

import "fmt"

func main() {
    // Prompt the user for input
    fmt.Print("Enter your name: ")

    // Read user input from standard input
    var name string
    fmt.Scanln(&name)

    // Print the user input
    fmt.Println("Hello, " + name + "!")
}
