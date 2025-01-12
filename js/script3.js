let dag = 0

for (lön = 1, sum = 0; sum < 10000000; dag++) {
    sum += lön
    lön *= 2
    console.log(dag, sum, lön)

    if(sum >= 10000000) {alert(dag + 1)}
    
}
//console.log(`det tar ${dag} dagar att tjena ihop 10 miljoner kronor`)
//alert(dag)

//document.getElementById("result").innerHTML = `det tar ${dag} dagar att tjena ihop 10 miljoner kronor`