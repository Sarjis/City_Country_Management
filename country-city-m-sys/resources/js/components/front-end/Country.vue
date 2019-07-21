<template>
    <div>
        <form @submit.prevent="saveCountryInfo">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country Name</label>
                <div class="col-sm-9">
                    <input v-model="form.country_name" :class="{ 'is-invalid': form.errors.has('country_name') }"
                           type="text" class="form-control" placeholder="Country Name">
                </div>
                <span><has-error :form="form" field="country_name"></has-error></span>


            </div>
            <has-error :form="form" field="country_name"></has-error>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">About</label>
                <div class="col-sm-9">
                    <ckeditor v-model="form.country_about" :editor="editor"
                              :class="{ 'is-invalid': form.errors.has('country_about') }"></ckeditor>
                </div>
                {{form.country_about}}
                <has-error :form="form" field="country_about"></has-error>

            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button :disabled="form.busy" type="submit" class="btn btn-info">Save</button>
                    <button @click.prevent="cancelProcedure" class="btn btn-danger" id="cancel">Cancel</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">SL#</th>
                <th scope="col">name</th>
                <th scope="col">ABout</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(country,i) in countries" v-if="i<5">
                <th scope="row">{{++i}}</th>
                <td>{{country.country_name}}</td>
                <td v-html="country.country_about"></td>
            </tr>
            </tbody>
        </table>


    </div>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import Vue from 'vue'
    import {Form, HasError, AlertError} from 'vform'
    import Swal from 'sweetalert2'

    Vue.component(HasError.name, HasError);
    Vue.component(AlertError.name, AlertError);
    export default {
        name: "Country",
        data() {
            return {
                editor: ClassicEditor,
                form: new Form({
                    country_name: '',
                    country_about: '',
                })
            }
        },
        methods: {
            saveCountryInfo() {
                let self = this;
                this.form.post('/country/save').then(function (res) {
                   // alert('Success')

                    Swal.fire({
                        title: 'Country name Saved Successfully!',
                        animation: false,
                        customClass: {
                            popup: 'animated tada'
                        }
                    })

                    self.$router.push('/country-entry')
                }).catch(function (err) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Please follow proper Naming Convention!',
                        type: 'error',
                        confirmButtonText: 'Cool'
                    });
                })
            },
            cancelProcedure() {
                this.$router.push('/country-entry')
            }
        },
        mounted() {
            this.$store.dispatch('getCountries')
        },
        computed: {
            countries() {
                return this.$store.getters.getCountryName
            }
        },
        // updated(){
        //     this.$store.dispatch('getCountries')
        // }

    }
</script>

<style scoped>

</style>