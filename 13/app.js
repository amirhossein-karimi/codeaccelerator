
const shops = [
    {
        'name': 'name-one',
        'type': {
            title: 'supermarket',
            value: 1
        },
        'economicalNumber': '123'
    },
    {
        'name': 'name-two',
        'type': {
            title: 'supermarket',
            value: 1
        },
        'economicalNumber': '1234'
    },
    {
        'name': 'name-three',
        'type': {
            title: 'vegetable shop',
            value: 2
        },
        'economicalNumber': '125'
    },
    {
        'name': 'name-four',
        'type': {
            title: 'vegetable shop',
            value: 2
        },
        'economicalNumber': '1231'
    },
    {
        'name': 'name-five',
        'type': {
            title: 'supermarket',
            value: 1
        },
        'economicalNumber': '1237'
    },
    {
        'name': 'name-six',
        'type': {
            title: 'Toy',
            value: 3
        },
        'economicalNumber': '12234'
    },
    {
        'name': 'name-seven',
        'type': {
            title: 'supermarket',
            value: 1
        },
        'economicalNumber': '1255'
    },
    {
        'name': 'name-eight',
        'type': {
            title: 'Toy',
            value: 3
        },
        'economicalNumber': '11231'
    }
]

function getAllTypes(shops) {
    let types = shops.map(item => item.type);
    let unique = [];
    let uniqueData = [];

    types.forEach(element => {
        if (!unique.includes(element.value)) {
            unique.push(element.value);
            uniqueData.push(element);
        }
    });

    return uniqueData;
}


getAllTypes(shops).forEach((item) => {



    if (item.value === 1) {
        console.log('supermarket \n');

        console.log(shops.filter(shop => shop.type.value === item.value));

    }
    if (item.value === 2) {
        console.log('vegetable shop \n');

        console.log(shops.filter(shop => shop.type.value === item.value));

    }
    if (item.value === 3) {
        console.log('Toy \n');

        console.log(shops.filter(shop => shop.type.value === item.value));

    }



})






