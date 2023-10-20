const products = [
    {
        price: 25000,
        title: 'book',
        discount: 5000
    },
    {
        price: 30000,
        title: 'ball',
        discount: 7000
    },
    {
        price: 32000,
        title: 'mobile',
        discount: 3500
    }
];


function calculateBasket(products) {

    let sumOfPrice = products.reduce(function (f, t) {

        return f + t.price;
    }, 0);

    let sumOfDiscount = products.reduce(function (f, t) {

        return f + t.discount;
    }, 0);

    return {
        'sumOfPrice': sumOfPrice,
        'sumOfDiscount': sumOfDiscount,
        'total': sumOfPrice - sumOfDiscount
    }


}


console.log(calculateBasket(products));
