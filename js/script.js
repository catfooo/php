alert("hej");

let hund = "meow";

// alert(cat);

function cat() {
    alert("cat");
}
cat()

function dog(hej) {
    alert(hej)
}
dog(hund)

function madröm(a, b) {
    return a + " " + b + " " + "madröm";
}
let ab = madröm("mörk", "vet");
alert(ab);

let score = 75;

function repeat() {
    
    if (score >= 50) {
        congratulate();
    } else {
        encourage();
    }
}
repeat()


function congratulate() {
    let msg = 'grats';
    alert(msg);
}

function encourage() {
    let msg = 'igen';
    alert(msg);
}

// cant redeclare like let score = 40, but reassign like score = 40
score = 40;
repeat()

let numbers = '';

for (let index = 0; index < 10; index++) {
    numbers += index + ' ';
    
}

alert(numbers);

let år = 0;
let lön = 1;
for (/*let år = 0, lön = 1*/; lön < 10000000; år++) {
    // lön += lön * 2 ** år
    lön *= 2;
    år = år ++
    
}
// let length = Math.sqrt(lön) + 1;
alert(år + 1);