<template>
    <div>

        <form @submit.prevent="saveCityInformation">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">City Name</label>
                <div class="col-sm-6">
                    <input v-model="form.city_name" type="text" :class="{ 'is-invalid': form.errors.has('city_name') }"
                           class="form-control" placeholder="City Name">
                </div>
                <has-error :form="form" field="city_name"></has-error>

            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">About City</label>
                <div class="col-sm-9">
                    <ckeditor v-model="form.city_about" :editor="editor"></ckeditor>
                </div>
                <has-error :form="form" field="city_about"></has-error>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">No. of dwellers</label>
                <div class="col-sm-6">
                    <input v-model="form.no_of_dwellers" type="number" class="form-control"
                           :class="{ 'is-invalid': form.errors.has('no_of_dwellers') }"
                           placeholder="No. of dwellers">
                </div>
                <has-error :form="form" field="no_of_dwellers"></has-error>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-6">
                    <input v-model="form.location" type="text" class="form-control" placeholder="Location"
                           :class="{ 'is-invalid': form.errors.has('location') }">
                </div>
                <has-error :form="form" field="location"></has-error>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Weather</label>
                <div class="col-sm-6">
                    <input v-model="form.weather" type="number" class="form-control" placeholder="Weather"
                           :class="{ 'is-invalid': form.errors.has('weather') }">
                </div>
                <has-error :form="form" field="weather"></has-error>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-6">
                    <select v-model="form.country_id"
                            :class="{ 'is-invalid': form.errors.has('country_id') }"
                            class="form-control select2" style="width: 100%;">
                        <option value="" disabled>--select--</option>
                        <option :value="country.id" v-for="(country, i) in countries" :key="country.id">
                            {{country.country_name}}
                        </option>

                    </select>
                    {{form.country_id}}
                </div>
                <has-error :form="form" field="country_id"></has-error>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>

                <div class="col-sm-9">
                    <button @click.prevent="cancelApplication" class="btn btn-danger fa-pull-right" id="cancel">Cancel
                    </button>
                    <button  class="btn btn-info fa-pull-right" id="save">Save</button>

                </div>

            </div>
        </form>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">SL#</th>
                <th scope="col">Name</th>
                <th scope="col">No. of dwellers</th>
                <th scope="col">Country</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(city,i) in cities">
                <th scope="row">{{++i}}</th>
                <td>{{city.city_name}}</td>
                <td>{{city.no_of_dwellers}}</td>
                <td v-if="city.country">{{city.country.country_name}}</td>
            </tr>
            </tbody>
        </table>


    </div>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import Vue from 'vue'
    import {Form, HasError, AlertError} from 'vform'

    Vue.component(HasError.name, HasError)
    Vue.component(AlertError.name, AlertError)
    export default {
        name: "City",
        data() {
            return {
                editor: ClassicEditor,
                form: new Form({
                    city_name: '',
                    city_about: '',
                    no_of_dwellers: '',
                    location: '',
                    weather: '',
                    country_id: '',
                })
            }
        },
        methods: {
            cancelApplication() {
                this.$router.push('/')
            },
            saveCityInformation() {
                this.form.post('/save/city').then(function (res) {
                    alert('Success')
                }).catch(function (err) {
                    alert('Error')
                })
            }
        },
        mounted() {
            this.$store.dispatch('getCountries')
            this.$store.dispatch('getCities')
        },
        computed: {
            countries() {
                return this.$store.getters.getCountryName
            },
            cities() {
                return this.$store.getters.getCityInfo
            }
        }
    }
</script>

<style scoped>

</style>