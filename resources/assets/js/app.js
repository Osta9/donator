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
                },
                {
                    key: 'blood_type',
                    label: 'Krvna grupa',
                    class: 'text-center flex-center',
                    sortable: false
                },
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
            arrivalFields: [
                {
                    key: 'donator.first_name',
                    label: 'Ime',
                    sortable: true
                },
                {
                    key: 'donator.last_name',
                    label: 'Prezime',
                    sortable: true
                },
                {
                    key: 'date',
                    label: 'Datum',
                    class: 'text-center',
                    formatter: 'dateFormat',
                    sortable: false
                },
                {
                    key: 'hemoglobin',
                    label: 'Hemoglobin',
                    class: 'text-center',
                    sortable: false
                },
                {
                    key: 'blood_sys',
                    label: 'Sistolički tlak',
                    class: 'text-center',
                    sortable: false
                },
                {
                    key: 'blood_dia',
                    label: 'Dijastolički tlak',
                    class: 'text-center',
                    sortable: false
                },
                {
                    key: 'accepted',
                    label: 'Prihvacen',
                    class: 'text-center',
                    sortable: false
                }
            ],
            employeeFields: [
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
                    key: 'title',
                    label: 'Titula',
                    sortable: false
                }
            ],
            doseFields: [
                {
                    key: 'processed',
                    label: 'Obrađena',
                    class: 'text-center',
                    sortable: true
                },
                {
                    key: 'arrival.date',
                    label: 'Datum',
                    class: 'text-center',
                    sortable: false
                },
                {
                    key: 'blood_type',
                    label: 'Krvna grupa',
                    class: 'flex-center text-center',
                    sortable: true
                }
            ],
            eventsPage: 1,
            arrivalsPage: 1,
            donatorsPage: 1,
            employeesPage: 1,
            dosesPage: 1,
            perPage: 10,
            filter: ''
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
        arrivalClick(record) {
            window.location = "/arrivals/" + record.id;
        },
        employeeClick(record) {
            window.location = "/employees/" + record.id;
        },
        doseClick(record) {
            window.location = "/doses/" + record.id;
        },
        deleteModel(route, id) {
            axios.delete('/' + route + '/' +  id).
            then(response => {
                window.location = "/" + route + "/"
            }).
            catch(function (error) {
                console.log("An error ocurred -> " + error);
            });
        },
        filterDonators: function (items) {
            return items.filter(item => {
                return item.first_name.toLowerCase().includes(this.filter.toLowerCase()) ||
                    item.last_name.toLowerCase().includes(this.filter.toLowerCase())
            });
        },
        filterEmployees: function (items) {
            return items.filter(item => {
                return item.first_name.toLowerCase().includes(this.filter.toLowerCase()) ||
                    item.last_name.toLowerCase().includes(this.filter.toLowerCase())
            });
        },
        filterArrivals: function (items) {
            return items.filter(item => {
                return item.donator.first_name.toLowerCase().includes(this.filter.toLowerCase()) ||
                    item.donator.last_name.toLowerCase().includes(this.filter.toLowerCase())
            });
        },
    }
});
