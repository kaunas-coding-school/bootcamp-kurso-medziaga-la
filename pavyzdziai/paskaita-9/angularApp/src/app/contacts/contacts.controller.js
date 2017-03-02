(function() {
  'use strict';

  angular
    .module('angularApp')
    .controller('ContactController', ContactController);

  /** @ngInject */
  function ContactController() {
    var vm = this;
    vm.message = "Hello";
  }
})();
