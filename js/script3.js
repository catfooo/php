let dag = 0

for (lön = 1, sum = 0; sum < 10000000; dag++) {
    sum += lön
    lön *= 2
    console.log(dag, sum, lön)
    
}
console.log('det tar ', dag, ' dagar att tjena ihop 10 miljoner kronor')
//alert(dag)