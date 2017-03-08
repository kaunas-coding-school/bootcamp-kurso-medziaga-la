var assert = require('assert');
var C = require('../resources/assets/js/calculator.js');

describe('Calculator', function() {

  describe('isEven', function() {
    it('should return true', function() {
      assert.equal(true, C.isEven(2));
    });
  });

});
