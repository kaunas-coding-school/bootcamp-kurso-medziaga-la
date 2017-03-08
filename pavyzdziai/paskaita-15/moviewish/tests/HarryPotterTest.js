var assert = require('assert');

var hp = require('../resources/assets/js/harrypotter.js');

describe('HarryPotter', function() {
    describe('countBooks()', function() {
        it('should return 0 if no parameters given', function() {
            assert.equal(0, hp.countBooks());
        });

        it('should return 1 if 1 parameter given', function() {
            assert.equal(0, hp.countBooks([]));
        });

        it('should return 2 if 2 array values are given', function() {
            assert.equal(2, hp.countBooks([2, 3]));
        });

        it('should return 5 if 5 array values are given', function() {
            assert.equal(5, hp.countBooks([2, 2, 2, 1, 1]));
        });

    });

    describe('calcDiscount()', function(){
        it('should give no discount if one book is sold', function() {
            assert.equal(0, hp.calcDiscount(1));
        });

        it('should give 5% discount if two different books are sold', function() {
            assert.equal(5, hp.calcDiscount(2));
        });

        it('should give 10% discount if three different books are sold', function() {
            assert.equal(10, hp.calcDiscount(3));
        });

        it('should give 20% discount if four different books are sold', function() {
            assert.equal(20, hp.calcDiscount(4));
        });

        it('should give 25% discount if five different books are sold', function() {
            assert.equal(25, hp.calcDiscount(5));
        });
    });

    describe('applyDiscount()', function(){
        it('should give 25% discount if we buy 5 different books', function() {
            assert.equal(25, hp.applyDiscount([2, 2, 2, 1, 1]));
        });
    });

    describe('booksTotal()', function(){
        it('should give 9 if we have an array of 9 books', function() {
            assert.equal(9, hp.booksTotal([3, 2, 2, 1, 1]));
        });
    });

    describe('cartTotal()', function(){
        it('should give $72 total price of 9 if one book costs $8', function() {
            assert.equal(72, hp.cartTotal(9));
        });

        it('should give $72 total price of 9 if one book costs $8', function() {
            assert.equal(72, hp.cartTotal([3, 2, 2, 1, 1]));
        });
    });

    describe('cartDiscount()', function(){
        it('should give $2.4 discount if we buy 3 different books ', function() {
            assert.equal(2.4, hp.cartDiscount([1, 1, 1]));
        });

        it('should give $2.4 discount if we buy 3 different books but 4 in total', function() {
            assert.equal(2.4, hp.cartDiscount([2, 1, 1]));
        });

        it('should give $6.4 discount if we buy 4 different books but 10 in total', function() {
            assert.equal(6.4, hp.cartDiscount([4, 3, 2, 1]));
        });
    });

    describe('totalPrice()', function(){
        it('should give $30 total price if we buy 5 different books but 8 in total', function() {
            assert.equal(30, hp.totalPrice([1, 1, 1, 1, 1]));
        });

        it('should give $60 total price if we buy 5 different books but 10 in total', function() {
            assert.equal(60, hp.totalPrice([2, 2, 2, 2, 2]));
        });

        it('should give $51.6 total price if we buy 5 different books but 8 in total', function() {
            assert.equal(51.6, hp.totalPrice([2, 2, 2, 1, 1]));
        });
    });

});
