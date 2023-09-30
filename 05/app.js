

const number = 100;

let list = [];

for (let i = 2; i <= number; i++) {
    let flag = true;
    for (let j = 2; j <= i; j++) {
        if (i === j) {
            continue;
        }
        if (i % j === 0) {
            flag = false;
        }
    }
    if (flag) {
        list.push(i);
    }
}
console.log(list)


