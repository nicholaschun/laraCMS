/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {addUserRole, baseUrl, deleteUserRoles, getUserRoles, updateUserRoles} from "./urls";


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
            allUserRoles:[],
            editRoles:{id:'',role_name:''},
            deleteRoles:{id:''},
            userPermissions:[],
            userPermission:{name:''}
        }
    },
    created(){
      this.getUserRoles()
      this.getUserPermissions()
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
        },
        editUserRoles(role) {
            this.editRoles.id = role.id
            this.editRoles.role_name = role.name
        },
        updateUserRoles(id) {
            axios.post(updateUserRoles + '/' + id, this.editRoles).then((res) => {
                toastr.success('User Role updated Successfully.', 'Success Alert', {timeOut: 5000});
                this.editRoles.role_name = ''
                this.editRoles.id = ''
                $('#addRoleModal').modal('hide')
                this.getUserRoles()
            }).catch((err) => {
                console.log(err)
            })
        },
        confirmDeleteRoles(id){
            this.deleteRoles.id = id
            $("#confirmDeleteModal").modal('show')
        },
        deleteUserRole(){
            axios.post(deleteUserRoles , this.deleteRoles).then((res) => {
                toastr.success('User Role deleted Successfully.', 'Success Alert', {timeOut: 5000});
                this.deleteRoles.id = ''
                $('#confirmDeleteModal').modal('hide')
                this.getUserRoles()
            }).catch((err) => {
                console.log(err)
            })
        },
        getUserPermissions() {
            axios.get(getPermissions).then((res) => {
                this.userPermissions = res.data
            })
        },
        addUserPermission() {
            axios.post(addUserPermission, this.userPermission).then((res) => {
                toastr.success('User Permission Created Successfully.', 'Success Alert', {timeOut: 5000});
                this.userPermission.name = ''
                $('#addPermissionModal').modal('hide')
                this.getUserPermissions()
            }).catch((err) => {
                console.log(err)
            })
        }
    }

});
