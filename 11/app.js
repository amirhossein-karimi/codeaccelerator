const fs = require('fs');

const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
});

function askQuestion(question) {
    return new Promise(resolve => {
        readline.question(question, answer => {
            resolve(answer);
        });
    });
}
function clearConsole() {
    // ANSI escape code to clear the screen
    readline.output.write('\x1B[2J\x1B[H');
}
async function main() {


    let name = await askQuestion('Student name : \n');
    clearConsole();
    let course = {};

    flag = 1;

    while (flag !== 0) {



        let course_Name = await askQuestion('Course name : \n');
        let value = await askQuestion('Value : \n');

        course[course_Name] = value;

        clearConsole();

        flag = parseInt(await askQuestion('continue : \n'));

        clearConsole();

    }

    const sum = Object.values(course).reduce((a, b) => {

        return parseFloat(a) + parseFloat(b);

    }, 0);
    const ave = (sum / Object.keys(course).length).toFixed(2);

    course['average'] = ave;



    const courseJson = JSON.stringify(course, null, 2);

    fs.writeFileSync(`${name}.json`, courseJson);

    readline.close();

}

main();