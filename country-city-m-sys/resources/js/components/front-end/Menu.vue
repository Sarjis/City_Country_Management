<template>
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-black bg-black">
                <div class="agileits-navi_search">
                    <form action="#" method="post">
                        <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                            <option value="">All Categories</option>
                            <option value="Televisions">Televisions</option>
                            <option value="Headphones">Headphones</option>
                            <option value="Computers">Computers</option>
                            <option value="Appliances">Appliances</option>
                            <option value="Mobiles">Mobiles</option>
                            <option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
                            <option value="iPad & Tablets">iPad & Tablets</option>
                            <option value="Cameras & Camcorders">Cameras & Camcorders</option>
                            <option value="Home Audio & Theater">Home Audio & Theater</option>
                        </select>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">
                        <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                            <router-link class="nav-link" :to="{path:'/'}">Home
                                <span class="sr-only">(current)</span>
                            </router-link>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Country
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <router-link :to="{path:'/country-entry'}">Country Entry</router-link>
                                                </li>
                                                <li>
                                                    <router-link :to="{path:'/view-countries'}">View Countries</router-link>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                City
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <router-link :to="{path:'/city-entry'}">City Entry</router-link>
                                                </li>
                                                <li>
                                                    <router-link :to="{path:'/view-cities'}">View Cities</router-link>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Menu"
    }
</script>

<style scoped>

</style>