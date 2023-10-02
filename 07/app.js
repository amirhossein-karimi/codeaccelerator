
const date = '2021-10-02';

const user_date = new Date(date);

const current_date = new Date();

let year = (user_date.getFullYear() - current_date.getFullYear());

let month = (user_date.getMonth() - current_date.getMonth());

let dt = (user_date.getDate() - current_date.getDate());

let diff = 0;

diff = (year * 365) + (month * 30) + (dt);

if (diff > 1) {
    console.log(`${diff} days remaining until this date `)
} else {
    console.log(`${Math.abs(diff)} days have passed since this date`)
}

