import Vue from 'vue'
import Router from 'vue-router'
import Country from '../components/front-end/Country'
import City from '../components/front-end/City'
import ViewCity from '../components/front-end/ViewCity'
import ViewCountry from '../components/front-end/ViewCountry'

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/country-entry',
            name: 'Country',
            component: Country
        },
        {
            path: '/city-entry',
            name: 'City',
            component: City
        },
        {
            path: '/',
            name: 'City',
            component: City
        },
        {
            path: '/view-cities',
            name: 'ViewCity',
            component: ViewCity
        },
        {
            path: '/view-countries',
            name: 'ViewCountry',
            component: ViewCountry
        },

    ],
    mode: 'hash'

});