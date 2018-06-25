var app = new Vue({
    el: '.todo',
    data: {
        newTodo: '',
        todos: [{
            id: 666,
            title: '妳好',
            completed: false,
        }],
        cacheTodo: {},
        cacheTitle: '',
        visibility: 'all',
    },
    methods: {
        addTodo: function() {
            var value = this.newTodo.trim();
            var timestamp = Math.floor(Date.now());
            if (!value) {
                return;
            }
            console.log(value, timestamp);
            this.todos.push({
                id: timestamp,
                title: value,
                completed: false,
            });
            this.newTodo = '';
        },
        removeTodo: function(key) {
            this.todos.splice(key, 1);
            console.log(key);
        },
        editTodo: function(item) {
            console.log(item);
            this.cacheTodo = item;
            this.cacheTitle = item.title;
        },
        canceledit: function() {
            this.cacheTodo = {};
        },
        doneedit: function(item) {
            item.title = this.cacheTitle;
            this.cacheTitle = '';
            this.cacheTodo = {};
        },
        removeall: function() {
            return this.todos = [];
        }
    },
    computed: {
        notCompleted: function() {
            return this.todos.filter(item => !item.completed).length;
        },
        todoCompleted: function() {
            return this.todos.filter(item => item.completed).length;
        },
        filterTodos: function() {
            if (this.visibility == 'all') {
                return this.todos;
            } else if (this.visibility == 'active') {
                var newTodos = [];
                this.todos.forEach(item => {
                    if (!item.completed) {
                        newTodos.push(item);
                        // console.log(!item.completed);
                    }
                })
                return newTodos;
            } else if (this.visibility == 'completed') {
                var newTodos = [];
                this.todos.forEach(item => {
                    if (item.completed) {
                        newTodos.push(item);
                        // console.log(!item.completed);
                    }
                })
                return newTodos;
            }
            return [];
        }
    }
});






















// var app = new Vue({
//     el: '#app',
//     data: {
//         message: 'Hello Vue!',
//         score: 100,
//         loading: false,
//         colors: ["a1", "a2", "a3"],
//         home: [{ father: "tom" }, { father: "ted" }],
//         todos: [],
//         myCheck: true,
//         newTodo: '',
//         ntmoney: 0,
//     },
//     methods: {
//         myfa: function(father) {
//             alert("爸爸" + father)
//         },
//         mymom: function(colors) {
//             alert("代號" + colors)
//         },
//         addTodo: function(todo) {
//             this.todos.push({ content: todo, completed: false });
//         },
//         removeTodo: function(todo) {
//             this.todos.splice(this.todos.indexOf(todo), 1);
//         },
//     },
//     computed: {
//         japan: function() {
//             return this.ntmoney / 0.27
//         },
//         usa: function() {
//             return this.ntmoney / 30
//         }
//     },

// })