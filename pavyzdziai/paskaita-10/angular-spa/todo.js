angular.module('todoApp', ['ui.router'])
  .config(function($stateProvider, $locationProvider){
    var helloState = {
      name: 'hello',
      url: '/hello',
      template: '<h1>Labas rytas</h1>'
    };
    var todoState = {
      name: 'todo',
      url: '/todo',
      templateUrl: 'todo.html'
    };
    $stateProvider.state(helloState);
    $stateProvider.state(todoState);
    $locationProvider.html5Mode({
      enabled: true,
      requireBase: false
    });
  })
  .controller('TodoListController', ['$log', function($log){
    var todoList = this;
    todoList.name = "Laurynas";

    todoList.todos = [
      {
        text: 'Mano kitas darbas',
        done: true
      },
      {
        text: 'Mano antrasis darbas',
        done: false
      }
    ];

    todoList.addTodo = function () {
      // $log.debug(typeof(todoList.todoText));
      if (!todoList.todoText) {
        return;
      }
      todoList.todos.push(
        {
          text: todoList.todoText,
          done: false
        }
      );
      todoList.todoText = '';
    };

    todoList.remaining = function () {
      var count = 0;
      angular.forEach(todoList.todos, function(todo) {
        count += todo.done ? 0 : 1;
      });
      return count;
    };



    // $log.debug(todoList);
  }]);
