<template>
    <div class="navbar px-3 navbar-expand-md">

        
        <div class="img-wrapper">
            <img class="logo-img" src="/images/Bdoctors Logo 1000.png" alt="">
        </div>
        <span class="ml-3 font-weight-bold logo-title">BDoctors</span>
        <ul class="navbar-nav mr-auto">
             
        </ul>
 
        <div class="navbar navbar-expand-md shadow-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-bars text-secondary"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" v-for="(link , index) in menu" :key="index">
                        <router-link class="nav-link btn eb_bg text-secondary" :to="{name: link.routeLink}">{{link.name}}</router-link>
                    </li>
                    <li class="nav-item active d-flex">
                        <a href="http://127.0.0.1:8000/login" class="nav-link btn eb_bg text-secondary mx-1">{{'Login'}}</a>
                        <a href="http://127.0.0.1:8000/register" class="nav-link btn eb_bg text-secondary mx-1">{{'Register'}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </template>
 
 <script>
 export default {
     name: 'HeaderComponent',
     data(){
         return {
             menu: [
                 {
                     name: 'Home',
                     routeLink: 'MyHome'
                 },
                 
             ]
         }
     }
 }
 </script>
 
 <style scoped lang="scss">
    .navbar{
        background-color:#094067;
        box-shadow: none !important;
        z-index: 999;
        i{
            font-size: 1.4rem;
        }
    }

    .img-wrapper {

        height: 43px;

        .logo-img {

            height: 100%;
            object-fit: cover;
        }

        
    }

    .logo-title {
            
            color: #ef4565;
            font-size: 30px;
        }

 </style>
 