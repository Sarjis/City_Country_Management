<template>
    <div>
        <form @submit.prevent="wrong" >
            <div class="row">
                <div class="col-sm-10">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group row">

                                    <label><input type="radio" value="city_name" v-model="valueOne" name="optradio">City</label>


                                </div>
                                <span>Picked {{valueOne}}</span>
                            </td>
                            <td>
                                <input v-model="cityName" class="form-control" type="text" placeholder="City">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group row">

                                    <label><input value="country_id" v-model="valueOne" type="radio" name="optradio"
                                                  checked>Country</label>


                                </div>
                            </td>

                            <td>
                                <select v-model="country_id" class="form-control">
                                    <option selected disabled>--select--</option>
                                    <option :value="country.id" v-for="country in countries">
                                        {{country.country_name}}
                                    </option>

                                </select>
                                {{country_id}}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-group row">
                                    <div class="radio">
                                        <label><input type="hidden" name="optradio"></label>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <button v-if="valueOne.length>5" @click.prevent="searchByCityOrCountry"  class="btn btn-info fa-pull-right"
                                        id="save">
                                    Search
                                </button>
                                <button v-else hidden class="btn btn-info fa-pull-right"
                                        id="save2">
                                    Search
                                </button>
                            </td>

                        </tr>
                    </table>


                </div>
            </div>
        </form>

        <table class="table table-bordered table-hover table-responsive">
            <thead class="thead-dark">
            <tr>
                <th scope="col">SL#</th>
                <th scope="col">City Name</th>
                <th scope="col">About</th>
                <th scope="col">No of Dwellers</th>
                <th scope="col">Location</th>
                <th scope="col">Weather</th>
                <th scope="col">Country</th>
                <th scope="col">Country About</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(city,i) in cities">
                <th scope="row">{{++i}}</th>
                <td>{{city.city_name}}</td>
                <td>{{city.city_about | shortLength(20, '...')}}</td>
                <td>{{city.no_of_dwellers}}</td>
                <td>{{city.location}}</td>
                <td>{{city.weather}}</td>
                <td v-if="city.country">{{city.country.country_name}}</td>
                <td v-if="city.country">{{city.country.country_about | shortLength(20, '...')}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "ViewCity",
        data() {
            return {
                cityName: '',
                country_id: 0,
                valueOne: ''
            }
        },
        computed: {
            cities() {
                return this.$store.getters.getCityInfo
            },

            countries() {
                return this.$store.getters.getCountryName
            },

        },
        mounted() {
            this.$store.dispatch('getCities')
            this.$store.dispatch('getCountries')
        },
        methods: {

            searchByCityOrCountry() {
                if (this.valueOne !== 'country_id') {
                    this.$store.dispatch('searchByCityName', this.cityName)

                } else if (this.valueOne !== 'city_name') {
                    this.$store.dispatch('searchByCountryId', this.country_id)
                } else {
                    this.$store.dispatch('getCities')
                }
            },
            wrong(){
                alert('wrong')
            }
        }
    }
</script>

<style scoped>
    .mySelect {
        margin: 2px;
    }
</style>