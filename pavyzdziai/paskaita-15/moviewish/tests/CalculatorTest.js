var assert = require('assert');

var calculator = require('../resources/assets/js/calculator');

describe('Calculator', function() {

    describe('sum()', function() {
      it('should return true', function() {
        assert.equal(true, calculator.sum());
      });

      it('should return number entered', function() {
        assert.equal(2, calculator.sum(2));
      });
    });

});
