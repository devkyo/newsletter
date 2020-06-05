/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('users-component', require('./components/UserComponent.vue').default);
// Vue.component('templates-component', require('./components/TemplateComponent.vue').default);
Vue.component('avatar-component', require('./components/AvatarComponent.vue').default);
Vue.component('password-component', require('./components/PasswordComponent.vue').default);
Vue.component('loading-component', require('./components/LoadingComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

const app = new Vue({

    el: '#app',
});



$('#userdelete').on('shown.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var user_id = button.data('userid')
    var modal = $(this)
    modal.find('.modal-body #user_id').val(user_id)
})

$('#mailingdelete').on('shown.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var mailing_id = button.data('mailingid')
    var modal = $(this)
    modal.find('.modal-body #mailing_id').val(mailing_id)
})

$(function(){
	// $('#form-bloque-botones .col-sm-10').append('<button type="button" id="mailing_preview" class="btn-info btn"><i class="fa fa-eye"></i>  Previsualizar</button>');

	$('#form-mailing').on('click', '#mailing_preview', function(ev){
        console.log('btn preview')
		ev.preventDefault();
		var data = $('#form-mailing').serialize();
		var url = '/preview?'+data;
		var win = window.open(url, '_blank');
  	win.focus();
	});
});