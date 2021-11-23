
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('B1T+ CMS-т нэвтэрч орлоо', 'Welcome to B1T+');

    }, 1300);
});

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app',
//     data:{
//         msg:'Terhe sfsdf asdfasdf asdf asd f',
//
//     },
// });
//
//


var appnav = new Vue({
    el: '#navapp',
    data:{
        msg:'Terhe sfsdf asdfasdf asdf asd f',
        MainMenuList:[],
    },
    created: function () {
        this.fetchData();

    },

    computed: {
        MainFilteredMenus:function() {
            return this.MainMenuList.filter(function(mainmenutemp){
                return mainmenutemp.type!=null && mainmenutemp.type.indexOf('Үндсэн')>-1
            });
        },
        OtherFilteredMenus:function() {
            return this.MainMenuList.filter(function(mainmenutemp){
                return mainmenutemp.type!=null && mainmenutemp.type.indexOf('Туслах')>-1
            });
        },
    },
    methods: {
        fetchData: function () {
            var self=this;
            // self.$data.MainMenuList=[{text:'sdfsdf'},{text:'123123'},{text:'sdfs234234'}];
            $.ajax({
                url: '/api/group',
                complete: function (data) {
                    self.MainMenuList = data.responseJSON;
                    console.log(self.MainMenuList);
                }
            })
        }
    }

});
import {ServerTable, ClientTable, Event} from 'vue-tables-2';
Vue.use(ClientTable, { perPage: 25}, false, require('../../../node_modules/vue-tables-2/compiled/template.js')('client'));
Vue.component('vuegriddelete', {
    props: ['data'],
    template: `<a class='delete' @click='erase'>Устгах</a>`,
    methods: {
        erase() {
            let id = this.data.id; // delete the item
            window.location.href='/deletegroup/'+id;
        }
    }
});

Vue.component('vuegridedit', {
    props: ['data'],
    template: `<a class='delete' @click='edit'>Засах</a>`,
    methods: {
        edit() {
            let id = this.data.id; // delete the item
            window.location.href='/editgroup/'+id;
        }
    }
});

Vue.component('mbselect', {
    template: ' <select v-model="selectedOption" ><option v-for="option in options" :value="option.name">{{ option.name }}</option></select>',
    props: ['options', 'selected'],
    data() {
        return {
            selectedOption: ''
        }
    },
    methods: {
        notify_selection() {
            //  this.$parent.$emit('update', this.selectedOption);
        }
    },
    created() {
        this.selectedOption = this.selected;
    }
});

var grouplist = new Vue({
    el: '#grouplist',
    data: {
        active_options: [],
        active_options1: [],
        active_options2: [],
        active_options3: [],
        mgl:'монгол',
        turul:'Мэдээ',
        mediaturul:'Зураг',
        vuemessage: 'vue data message',
        selectedval:'',
        columns: ['id', 'name', 'type','orderby', 'edit', 'erase'],
        tableData: [],
        options: {
            templates: {
                edit: 'vuegridedit',
                erase: 'vuegriddelete'
            },
            // requestFunction: function(data) {
            //     return axios.get('http://b1ts.dev:81/api/group', { params: data }).catch(function (e) {
            //         this.dispatch('error', e);
            //     }.bind(this));
            // }
        },


    },
    created: function () {
        console.log("CREATED 123");
        // this.$on('update', (selection) => {
        //         this.selectedval = selection;    });
        this.fetchData();
        this.fetchoptions();

    },
    mounted: function () {
        console.log("MOUNTED 123");

    },
    methods: {
        fetchData: function () {
            var self = this;
            // self.$data.MainMenuList=[{text:'sdfsdf'},{text:'123123'},{text:'sdfs234234'}];
            console.log("FETCHDATA");
            $.ajax({
                url: '/api/group',
                complete: function (data) {
                    self.$data.tableData = data.responseJSON;

                }
            })
        },
        fetchoptions:function(){
            var self = this;
            $.ajax({
                url: '/api/groupoption',
                complete: function (data) {
                    self.$data.active_options = data.responseJSON;

                }
            });
            $.ajax({
                url: '/api/grouplang',
                complete: function (data) {
                    self.$data.active_options1 = data.responseJSON;

                }
            });
            $.ajax({
                url: '/api/groupoption1',
                complete: function (data) {
                    self.$data.active_options2 = data.responseJSON;

                }
            });
            $.ajax({
                url: '/api/groupoption2',
                complete: function (data) {
                    self.$data.active_options3 = data.responseJSON;

                }
            });
        }
    },

});
