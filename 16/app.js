const candidates = [
    {
        amir: {
            intelligence: 89,
            general_information: 45,
            it: 35
        }
    },
    {
        ali: {
            intelligence: 90,
            general_information: 47,
            it: 36
        },
    },
    {
        mohamad: {
            intelligence: 39,
            general_information: 49,
            it: 55
        }
    }
];

const indexs = {
    intelligence: 5,
    general_information: 3,
    it: 4
};


let candidatePoints = [];

candidates.map((candidate) => {

    let point = 0;

    const canidateData = candidate[Object.keys(candidate)];

    point += canidateData.intelligence * indexs.intelligence;
    point += canidateData.general_information * indexs.general_information;
    point += canidateData.it * indexs.it;

    let newObj = {
        name: Object.keys(candidate),
        value: point
    }

    candidatePoints.push(newObj);

});


let winnerCandidate = candidatePoints[0];

for (const iterator of candidatePoints) {
    if(iterator.value > winnerCandidate.value){
        winnerCandidate = iterator;
    }
}
console.log(winnerCandidate);



