package main

import (
    "fmt"
    "io/ioutil"
    "net/http"
)

func main() {
    url := "https://api.linkpc.net/WBBSE/Madhyamik-Results/?roll_no=601382N0010&dob=2008-08-14"

    resp, err := http.Get(url)
    if err != nil {
        fmt.Println("Error:", err)
        return
    }
    defer resp.Body.Close()

    body, _ := ioutil.ReadAll(resp.Body)
    fmt.Println(string(body))
}
