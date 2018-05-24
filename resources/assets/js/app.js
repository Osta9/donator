/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    data() {
        return {
            donatorFields: [
                {
                    key: 'first_name',
                    label: 'Ime',
                    sortable: true
                },
                {
                    key: 'last_name',
                    label: 'Prezime',
                    sortable: true
                },
                {
                    key: 'address',
                    label: 'Adresa',
                    sortable: false
                },
                {
                    key: 'phone',
                    label: 'Telefon',
                    class: 'text-center',
                    sortable: false
                },
                {
                    key: 'birth_date',
                    label: 'Datum rođenja',
                    class: 'text-center',
                    sortable: false,
                    formatter: 'dateFormat'
                }
            ],
            eventFields: [
                {
                    key: 'city',
                    label: 'Grad',
                    sortable: true
                },
                {
                    key: 'address',
                    label: 'Adresa',
                    sortable: false
                },
                {
                    key: 'info',
                    sortable: false
                },
                {
                    key: 'date',
                    label: 'Datum',
                    class: 'text-center',
                    sortable: true,
                    formatter: 'dateFormat'
                },
            ],
            eventsPage: 1,
            donatorsPage: 1,
            perPage: 10
        }
    },
    methods: {
        logout: function () {
            axios.post('/logout').
            then(response => {
                location.reload()
            }).
            catch(function (error) {
                console.log("An error ocurred -> " + error);
            });
        },
        dateFormat (value) {
            let date = new Date(value);
            return date.toLocaleDateString();
        },
        eventClick(record) {
            window.location = "/events/" + record.id;
        },
        donatorClick(record) {
            window.location = "/donators/" + record.id;
        },
        deleteModel(route, id) {
            axios.delete('/' + route + '/' +  id).
            then(response => {
                window.location = "/" + route + "/"
            }).
            catch(function (error) {
                console.log("An error ocurred -> " + error);
            });
        }
    }
});
