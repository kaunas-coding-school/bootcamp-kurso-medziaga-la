var assert = require('assert');

var hp = require('../resources/assets/js/harrypotter.js');

describe('HarryPotter', function() {
    describe('countBooks()', function() {
        it('should return 0 if no parameters given', function() {
            assert.equal(0, hp.countBooks());
        });
    });
});
