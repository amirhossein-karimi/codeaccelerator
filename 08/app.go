package main

import (
	"fmt"
	"time"
)

func main() {
	now := time.Now()
	hours := now.Hour()
	min := now.Minute()
	seconds := now.Second()

	fullSec := (hours * 60 * 60) + (min * 60) + seconds
	fmt.Println(fullSec)

}
