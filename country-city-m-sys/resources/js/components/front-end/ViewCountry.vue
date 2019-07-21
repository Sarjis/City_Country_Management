<template>
    <div>
        <form>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input @keyup="search" v-model="keyword" type="text" class="form-control"
                           placeholder="Place a Name">
                </div>
                <div class="col-sm-3">
                    <input @click="search" type="button" class="btn btn-success" value="Search">
                </div>
            </div>
        </form>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">SL#</th>
                <th scope="col">Name</th>
                <th scope="col">About</th>
                <th scope="col">No. of cities</th>
                <th scope="col">No. of dwellers</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="(country,i) in countries">
                <th scope="row">{{++i}}</th>
                <td>{{country.country_name}}</td>
                <td>{{country.country_about}}</td>
                <td v-if="country.cities.length>0">{{country.cities.length}}</td>
                <td v-else>No City</td>
                <td v-model="arr" @mouseover="total(country.cities)" @click="total(country.cities)">Show People</td>
                <td></td>
            </tr>
            </tbody>

        </table>
    </div>
</template>

<script>
    import Swal from 'sweetalert2'
    export default {
        name: "ViewCountry",
        data() {
            return {
                keyword: '',
                arr: []
            }
        },
        methods: {
            search() {
                this.$store.dispatch('search', this.keyword)
            },
            countryMethod() {
                this.$store.dispatch('getCountries')
            },
            total(cities) {
                var sum = 0;

                cities.forEach(function (city) {
                    sum += city.no_of_dwellers
                })
                // this.cities.forEach(city => {
                //  sum += city.no_of_dwellers
                // country.cities.forEach(function (p) {
                //     sum += p.no_of_dwellers
                // })
                //});
                // return sum
                //this.arr =sum
                let timerInterval
                Swal.fire({
                    title: 'Total People!',
                    html: sum,
                    timer: 500,

                })
                console.log(sum)
            }

        },
        mounted() {
            this.countryMethod()
        },
        computed: {
            countries() {
                return this.$store.getters.getCountryName
            },
            p() {
                return this.total
            }

        },

    }
</script>

<style scoped>

</style>