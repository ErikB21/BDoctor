<template>
  <div>
    <div class="eb_jumbotron px-0 container-fluid position-fixed" style="top: 65px; width: 100%; left: 0; z-index: 102;">
      <img src="/images/graphics/wave.svg" alt="">
    </div>

    <div class="eb_jumbo container-fluid px-0"></div>
    <div class="container-fluid px-0">
      <div class="eb_height">
        <div class="container shadow-drop-2-center home_jumbo px-0 m-auto">
          <div class="row eb_space">
            <div class="col-12 col-lg-5 flex-lg-column justify-content-center eb_border">
              <div class="eb_img">
                <img class="img-fluid" src="/images/graphics/illustrazione-vaccinazione.png" alt="">
              </div>

              <div class="d-flex mb-4 justify-content-center bg-dark align-items-center">
                <h1 class="site_logo text-light">BDoctors!*!</h1>
              </div>

              <h2 class="text-center">Trova i migliori specialisti della tua città!</h2>
            </div>
              <div class="d-none d-lg-flex eb_dott">

            </div>
              <div class="col-12 d-lg-flex col-lg-5 pb-0 pt-3">
                    <div class="slogan d-flex flex-column justify-content-between">
                        <h2 class="h1 eb_fs text-center pl-2 text-lg-left">Sei stufo di fare la fila?</h2>
                        <p class="text-center pl-2 text-lg-left">Affidati a <b>Bdoctors</b>, i migliori specialisti della tua città!</p>
                        <p class="text-square bg-light mx-2">« Il medico dovrebbe essere opaco per i suoi pazienti e, al pari di uno specchio, mostrare loro null'altro che ciò che viene mostrato a lui »</p>
                        <p class="pl-2 h5">Dr. Girolamo Visconti</p>
                        <div class="img-wrap">
                          <img src="/images/graphics/DottorVisconti.png" alt="">
                        </div>
                    </div>
              </div>
              </div>
            </div>
      </div>

      <JumboComponent/>



      <div class="ourDoctors text-center">
        <h1 class="text-pop-up-top font-weight-bold">Scegli il tuo prossimo Specialista!</h1>

        <div class="container m-auto col-8">
          <div class="row justify-content-center align-items-center">



            <div class="col-12 col-md-6 col-lg-4">
              <div class="filters mb-5 mr-2 d-flex flex-column">
                <h3 class="pb-3">Media Voto</h3>
                <div class="votes d-md-block">
                  <input class="d-none" type="range" v-model="mediaVoto" min="1" max="5" name="mediaVoto" id="mediaVoto">
                  <button class="btn ml-md-2 mb-2 mb-md-0 mr-md-2" @click="aMethod(0)" :style="mediaVoto == 0? 'background-color:#ef4565':''">Disabilita Filtro</button>
                  <div class="d-md-inline">
                    <a @click.prevent class="star" v-for="index in 5" :key="index" @click="aMethod(index)" href ="" :style="mediaVoto >= index? 'color: rgb(252, 153, 6);':''" ><i class="fa-solid fa-star"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="filters mb-5">
                <h3 class="pb-3">Numero Recensioni</h3>
                <div class="num-recensioni d-flex flex-column">
                  <input type="range" v-model="reviewsCheck" min="0" max="10" name="reviewsRange" id="reviewsRange">
                  <span>{{reviewsCheck}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 d-flex flex-column justify-content-center">
          <h3 class="d-block pb-3">Specializzazioni</h3>
          <div class="filters_2 d-flex pb-5 m-auto align-self-center">
            <select v-model="selectSpecialization">
              <option value="Tutti i Medici">Tutti i Medici</option>
              <option v-for="(specialization , index) in specializations" :key="index" :value="specialization.id">{{specialization.name}}</option>
            </select>
            <button class="btn" @click.prevent="getData()">Cerca</button>
          </div>
        </div>



        <div v-if="profiles.length > 0" class="container-fluid pb-5">
          <div class="d-flex my_cards flex-wrap position-relative">
            <div v-for="(profile, index) in profiles" :key="index" class="card shadow-drop-2-center pb-2" :class="profile.sponsorships.length > 0 ? 'sponsored_body':''">
              <div class="eb_img">
                <img class="card-img-top" :src=" profile.profile_pic == null || profile.profile_pic == false ? '/images/avatar.png' : 'storage/'+ profile.profile_pic" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="sponsored" v-if="profile.sponsorships.length > 0">
                  <i class="fa-solid fa-star"></i>
                </div>
                <div v-else></div>
                <h3 class="card-title eb_color" :class="profile.sponsorships.length > 0 ? 'sponsored_name':''" >Dr. {{profile.name}} <br> {{profile.surname}}</h3>
                <p class="card-text eb_size text-secondary">{{profile.specializations[0].name}}</p>
                <router-link :class="profile.sponsorships.length > 0 ? 'btn sponsored_btn':'btn'" :to="{name:'single-profile', params:{slug:profile.slug}} ">Profilo</router-link>
              </div>
            </div>
          </div>
        </div>
        <div v-else class="square container shadow-drop-2-center m-auto p-5">
          <h2>Spiacenti, la ricerca da lei effettuata non ha prodotto alcun risultato. Cambia il filtro di ricerca!</h2>
        </div>

      </div>
    </div>
    <ParallaxComponent/>
    <CardHomeComponent/>
  </div>



</template>

<script>
import axios from 'axios';
import CardHomeComponent from '../components/CardHomeComponent.vue';
import JumboComponent from '../components/JumboComponent.vue';
import ParallaxComponent from '../components/ParallaxComponent.vue';

export default {
  components: { JumboComponent, CardHomeComponent, ParallaxComponent },
  name: 'MyHome',
  data(){
    return {
      profiles: [], // chiamata api
      specializations: [],
      selectSpecialization: 'Tutti i Medici', // filtro specializzazioni
      reviewsCheck: 0, //filtra numero recensioni
      mediaVoto: 0, // filtra mediaVoti ( stelline )
    }
  },



  mounted(){
    this.getData()
    this.getSpecializations()

  },



  methods: {

    aMethod(n){
    return this.mediaVoto = n;
    },

    getSpecializations(){
      axios.get('/api/specializations/')
      .then((response) =>{
      this.specializations = response.data.results
      })
    },

    getData(){
      axios.get('api/users',{
        params:{
          specializationName: this.selectSpecialization,
          avgVote: this.mediaVoto,
          reviewsNumber: this.reviewsCheck
        }
      })
      .then( resolve => {
        this.profiles = resolve.data.results;
      })
    }

  },
}
</script>


<style lang="scss" scoped>
  .text-pop-up-top {
    -webkit-animation: text-pop-up-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: text-pop-up-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
  }

  @-webkit-keyframes text-pop-up-top {
      0% {
          -webkit-transform: translateY(0);
                  transform: translateY(0);
          -webkit-transform-origin: 50% 50%;
                  transform-origin: 50% 50%;
          text-shadow: none;
      }
      100% {
          -webkit-transform: translateY(-50px);
                  transform: translateY(-50px);
          -webkit-transform-origin: 50% 50%;
                  transform-origin: 50% 50%;
          text-shadow: 0 1px 0 #cccccc, 0 2px 0 #cccccc, 0 3px 0 #cccccc, 0 4px 0 #cccccc, 0 5px 0 #cccccc, 0 6px 0 #cccccc, 0 7px 0 #cccccc, 0 8px 0 #cccccc, 0 9px 0 #cccccc, 0 50px 30px rgba(0, 0, 0, 0.3);
      }
      }
      @keyframes text-pop-up-top {
      0% {
          -webkit-transform: translateY(0);
                  transform: translateY(0);
          -webkit-transform-origin: 50% 50%;
                  transform-origin: 50% 50%;
          text-shadow: none;
      }
      100% {
          -webkit-transform: translateY(-50px);
                  transform: translateY(-50px);
          -webkit-transform-origin: 50% 50%;
                  transform-origin: 50% 50%;
          text-shadow: 0 1px 0 #cccccc, 0 2px 0 #cccccc, 0 3px 0 #cccccc, 0 4px 0 #cccccc, 0 5px 0 #cccccc, 0 6px 0 #cccccc, 0 7px 0 #cccccc, 0 8px 0 #cccccc, 0 9px 0 #cccccc, 0 50px 30px rgba(0, 0, 0, 0.3);
      }
  }

  @media screen and (max-width:420px) {
    .eb_jumbotron{
        max-width: 100%;
        img{
            width: 100%;
        }
    }
  }

  @media screen and (max-width:625px) {

    .eb_height{
      padding-bottom: 0;
      .home_jumbo{
        width: 100% !important;
        border-radius: 0;
        .eb_space{
          margin: 0 !important;
        }
      }
    }
    .ourDoctors{
      h1{
        font-size: 2.5rem;
      }
      .filters_2{
        width: 80%;
      }

    }
  }

  .sponsored_body {

    background-color: #4287b7;
    color:white;

    .sponsored {
      // background-color: white;
      // padding: 3px;
      // border-radius: 10px;
        color:#ddc350;
        position: absolute;
        top: 10px;
        right: 20px;
        i {
          font-size: 20px;
        }
        }

        .sponsored_btn {
          background-color:white !important;
          color: #0A4067 !important;

        &:hover {
          background-color: #0A4067 !important;
          color: white !important;

        }
    }

    .sponsored_name{
      color: white !important;
    }

  }



</style>





