/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {addUserRole, baseUrl, getUserRoles} from "./urls";


require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
import userRole from './controls'
import './urls'
const app = new Vue({
    el: '#app',
    data(){
        return{
            userRole,
            allUserRoles:[]
        }
    },
    created(){
      this.getUserRoles()
    },
    methods: {
        addRole() {
            axios.post(addUserRole, userRole).then((res) => {
                toastr.success('User Role Created Successfully.', 'Success Alert', {timeOut: 5000});
                userRole.role_name = ''
                $('#addRoleModal').modal('hide')
                this.getUserRoles()
            }).catch((err) => {
                console.log(err)
            })
        },
        getUserRoles() {
            axios.get(getUserRoles).then((res) => {
                this.allUserRoles = res.data
            })
        }
    }

});
