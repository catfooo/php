for (let dag = 1, lön = 1, sum = 0; sum < 10000000; dag++) {
    sum += lön
    lön *= 2
    console.log(dag, sum, lön)
    
}