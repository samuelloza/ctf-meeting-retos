var part1 = "\x65\x73\x74\x65\x20\x65\x73\x20";
var part2 = "\x75\x6e\x20\x72\x65\x74\x6f\x20";
var part5 = "\x41\x42\x43";
var part3 = "\x64\x65\x20\x64\x65\x73\x6f";
var part4 = "\x66\x75\x73\x63\x61\x63\x69\x6f\x6e";

function show() {

    function ev(num) {
        return num * 12345 % 123;
    }

    function merge(p1, p2, p3, p4) {
        ev(123);
        return p1 + p2 + p3 + p4;
    }

    let combined = merge(part1, part2, part3, part4);
    let message = confuse(combined);

    function confuse(input) {
        let output = input.split('').reverse().join('');
        return output;
    }

    let result = '';
    for (let i = 0; i < message.length; i++) {
        const bin = message.charCodeAt(i).toString(2).padStart(8, '0');
        result += bin + " ";
    }

    localStorage.setItem('randomKey', result);

    console.log("No todo es lo que parece. La solución puede estar escondida.");
    alert("Profundiza en tu búsqueda");
};