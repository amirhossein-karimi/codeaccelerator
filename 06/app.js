
const fs = require('fs');

const data = fs.readFileSync('./file.txt',
    { encoding: 'utf8', flag: 'r' });

const filteredWords = data.split(/\s+|\W+/).filter(word => word.length > 0);


let objectWithMoreThanOneRepeat = {};

filteredWords.map((item) => {


    if (!objectWithMoreThanOneRepeat[item]) {

        let count = 0;
        for (let i = 0; i < filteredWords.length - 1; i++) {
            if (item === filteredWords[i]) {
                count += 1;
            }
        }
        if (count > 1) {
            objectWithMoreThanOneRepeat[item] = count;
        }

    }


});

console.log(objectWithMoreThanOneRepeat)






