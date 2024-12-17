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

if (score >= 50) {
    congratulate();
}

function congratulate() {
    let msg = 'grats';
    alert(msg);
}