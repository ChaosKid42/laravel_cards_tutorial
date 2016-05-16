window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

var Vue = require('vue');
new Vue({
    
    el: 'body',
    
    data: {
    
      message: ''
    
    }

});


var name = "Bob", time = "today";
console.log(`Hello ${name}, how are you ${time}?`)