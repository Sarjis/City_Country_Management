import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        country_name: [],
        city: []
    },
    getters: {
        getCountryName(state) {
            return state.country_name
        },
        getCityInfo(state) {
            return state.city
        },

    },

    mutations: {
        getCountries(state, payload) {
            return state.country_name = payload
        },
        getCities(state, payload) {
            return state.city = payload
        },
        search(state, payload){
            return state.country_name = payload
        },
        searchByCountryId(state, payload){
            return state.city = payload
        },
        searchByCityName(state, payload){
            return state.city = payload
        },
    },
    actions: {
        getCountries(context) {
            axios.get('/fetch/country').then(function (res) {
                console.log(res.data.countries)
                context.commit('getCountries', res.data.countries)

            }).catch(function (err) {
                alert('Not possible from actions in store')
            })
        },
        getCities(context) {
            axios.get('/fetch/city').then(function (res) {
                console.log(res.data.cities)
                context.commit('getCities', res.data.cities)
            }).catch(function (err) {
                alert('Not possible from actions in store')
            })
        },
        search(context, searchItem){
            axios.get('/search?s='+searchItem).then(function (res) {
                //console.log(res.data.countries)
                context.commit('search', res.data.countries)
            }).catch(function (err) {
                alert('Not possible from actions in store')
            })
        },
        searchByCountryId(context, searchItem) {
            axios.get('/search-city-id?id=' + searchItem).then(function (res) {
                console.log(res.data.cities)
                context.commit('searchByCountryId', res.data.cities)
            }).catch(function (err) {
                alert('Not possible from actions in store')
            })
        },
        searchByCityName(context, searchItem) {
            axios.get('/search-city?s=' + searchItem).then(function (res) {
                console.log(res.data.cities)
                context.commit('searchByCityName', res.data.cities)
            }).catch(function (err) {
                alert('Not possible from actions in store')
            })
        },
    }
});

export default store;