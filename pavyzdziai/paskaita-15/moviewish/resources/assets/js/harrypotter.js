var HarryPotter = {};
// HarryPotter knygu kaina
HarryPotter.price = 8;

// Galimybe pakeisti knygos kaina
HarryPotter.setPrice = function(newPrice) {
    this.price = newPrice;
};

// Metodas skaiciuoja kiek skirtingu knygu perkam
// input Array
// output Number
HarryPotter.countBooks = function(books) {
    if (!books){
        return 0;
    }
    return books.length;
};

// Metodas skaiciuoja kokia nuolaida duoti pagal tai kiek knygu perkam
// input Number
// output Number
HarryPotter.calcDiscount = function(differentBooks) {
    var discount = 0;
    switch (differentBooks) {
        case 2:
            discount = 5;
            break;
        case 3:
            discount = 10;
            break;
        case 4:
            discount = 20;
            break;
        case 5:
            discount = 25;
            break;
    }
    return discount;
};

HarryPotter.applyDiscount = function(books) {
    var count = this.countBooks(books);
    return this.calcDiscount(count);
};

HarryPotter.booksTotal = function(books) {
    var sum = 0;
    for (var i = 0; i < books.length; i++) {
        sum += books[i];
    }
    return sum;
};

HarryPotter.cartTotal = function(books) {
    if (typeof(books) === 'object') {
        return this.booksTotal(books) * this.price;
    }
    return books * this.price;
};

HarryPotter.cartDiscount = function(books) {
    var discount = this.applyDiscount(books); // 10%
    var cartTotal = this.cartTotal(this.countBooks(books)); // books == [2, 1, 1]
    return cartTotal * discount / 100;  // 10/100*72
};

HarryPotter.totalPrice = function(books) {
    var cartTotal = this.cartTotal(books);
    var booksTotal = this.countBooks(books);
    var discountSum = 0;
    var max = Math.max.apply(null, books);

    for (var i = 0; i < max; i++) {
        discountSum += this.cartDiscount(books);
        for (var j = 0; j < booksTotal; j++) {
            books[j] -= 1;
            if (books[j] === 0) {
                books.splice(j, 1);
                j--;
                booksTotal--;
            }
        }
    }
    return cartTotal - discountSum;
};


module.exports = HarryPotter;
