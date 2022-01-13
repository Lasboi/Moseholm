// Denne kode opdatere det antal som der bliver vist brugeren på webshop siden hvor man kan vælge antal.
//Der er en funktion til både plus og minus og til alle 4 knapper.

let count1 = 1;
let countElement1 = document.getElementById("count1");
function plus1(){
    count1++;
    countElement1.value = count1;
}
function minus1(){
    if (count1 > 1) {
        count1--;
        countElement1.value = count1;
    }
}

let count2 = 1;
let countElement2 = document.getElementById("count2");
function plus2(){
    count2++;
    countElement2.value = count2;
}
function minus2(){
    if (count2 > 1) {
        count2--;
        countElement2.value = count2;
    }
}

let count3 = 1;
let countElement3 = document.getElementById("count3");
function plus3(){
    count3++;
    countElement3.value = count3;
}
function minus3(){
    if (count3 > 1) {
        count3--;
        countElement3.value = count3;
    }
}

let count4 = 1;
let countElement4 = document.getElementById("count4");
function plus4(){
    count4++;
    countElement4.value = count4;
}
function minus4(){
    if (count4 > 1) {
        count4--;
        countElement4.value = count4;
    }
}