<template>
  <div class="container pt-5 px-5">
    <h1 class="mt-2 text-center text-md-left eb_title text-pop-up-top pt-5 textGray">Dottor. <span class="eb_color font-weight-bold">{{profile.name}} {{profile.surname}}</span></h1>
    <div class="row justify-content-around align-items-center">
      <div class="col-10 col-lg-5 eb_square">
          <img :src=" profile.profile_pic == false ? '/images/avatar.png' : '/storage/'+ profile.profile_pic" alt="" class="img-fluid">
      </div>
      <div class="flex-column col-10 col-lg-5">
          <div>
            <h2 class="mt-3 eb_color text-center text-md-left font-weight-bold">INFORMAZIONI</h2>
            <div class="container border-left border-primary my-5">
              <h5 class="font-weight-bold pl-2 pl-md-0 text-secondary">INDIRIZZO</h5>
              <span class="textGray pl-2 pl-md-0">{{profile.address}}</span>
              <h5 class="mt-2 pl-2 pl-md-0 font-weight-bold text-secondary">SPECIALIZZAZIONI</h5>
              <span  class="textGray pl-2 pl-md-0" v-for="(spec , index) in profile.specializations" :key = "index">{{spec.name}} </span>
              <h5 class="mt-2 pl-2 pl-md-0 font-weight-bold text-secondary">PRESTAZIONI OFFERTE</h5>
              <span class="textGray pl-2 pl-md-0">{{profile.services}}</span>
              <div v-if="profile.cv">
                <h5 class="mt-2 pl-2 pl-md-0 font-weight-bold text-secondary">CURRICULUM</h5>
                <a  class="btn" :href="profile.cv == false ? 'disabled': '/storage/' + profile.cv" download>Curriculum</a>
              </div>
              <div class="else"></div>
            </div>
          </div>
          <h2 class="mt-3 text-center text-md-left eb_color font-weight-bold">CONTATTAMI</h2>
          <div class="container my-5 border-left border-primary">
              <h5 class="pl-2 pl-md-0 mt-2 font-weight-bold text-secondary">E-MAIL</h5>
              <span class="pl-2 pl-md-0 textGray">{{profile.email}}</span>
              <h5 class="pl-2 pl-md-0 mt-2 font-weight-bold text-secondary">TELEFONO</h5>  
              <span class="pl-2 pl-md-0 textGray">{{profile.phone}}</span><br>
              <router-link :to="{name:'MessageForm'}" class="ml-2 ml-md-0 btn btn-group mt-2">Invia messaggio</router-link>
          </div>
          
      </div>
    </div>

    <ReviewComponent/>
    <div class="m-auto text-center">
        <router-link class="btn" :to="{name:'AllReviews'} ">Tutte le recensioni</router-link>
    </div>
    

    <div class="text-center">
      <form @submit.prevent='sendreview()'>
        <div class="d-flex flex-column pt-4">
          <h2 class="font-weight-bold eb_color h1 text-pop-up-top">RECENSISCI IL TUO DOTTORE</h2>
          <label for="name" class="text-secondary h5 text-left font-weight-bold">Nome</label>
          <input type="text" :class="errors.name?'is-invalid':''" class="p-2" v-model="name" name="name" id="name">
          <div v-for="(error, index) in errors.name" :key="index" class="invalid-feedback">
            {{error}}
          </div>

          <label class="mt-3 text-secondary h5 text-left font-weight-bold" for="surname">Cognome</label>
          <input type="text" :class="errors.surname?'is-invalid':''" class="p-2" v-model="surname" name="surname" id="surname">
          <div v-for="(error, index) in errors.surname" :key="index" class="invalid-feedback">
            {{error}}
          </div>

          <label class="mt-3 text-secondary h5 text-left font-weight-bold" for="Voto">Voto</label>
          <select :class="errors.vote?'is-invalid':''" class="border-0 p-2" v-model="vote" name="vote" id="vote">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div v-for="(error, index) in errors.vote" :key="index" class="invalid-feedback">
            {{error}}
          </div>

          <label class="mt-3 text-secondary h5 text-left font-weight-bold" for="review_text">Recensione</label>
          <textarea v-model="review_text" name="review_text" :class="errors.review_text?'is-invalid':''" class="px-2 pt-1"  id="review_text" rows="6"></textarea>
          <div v-for="(error, index) in errors.review_text" :key="index" class="invalid-feedback">
            {{error}}
          </div>

        </div>
          <button type="" :disabled="sending" class="btn mt-3 mb-5">Invia</button>
          <div v-if="status" class="alert alert-success ml-4 mb-4">
            <i class="fa-solid  fa-circle-check"></i> Grazie per aver recensito il tuo Dottore!
          </div>
      </form>
    </div>
    <div class="d-flex justify-content-center justify-content-md-end">
      <router-link :to="{name: 'MyHome'}" class="btn mb-3"><i class="fa-solid fa-arrow-left"></i> Torna alla Home</router-link>
    </div>
  </div>
  
</template>

<script>
import axios from 'axios';
import ReviewComponent from '../components/ReviewComponent.vue';
export default {
    name: "MyDoctors",
    data() {
        return {
            profile: [],
            name: null,
            surname: null,
            review_text: null,
            vote: null,
            idProfile: null,
            sending: false,
            errors: {},
            status: false
        };
    },
    mounted() {
        this.getSingleProfile();
    },
    methods: {
        sendreview() {
            this.sending = true;
            axios.post("/api/users/review/", {
                "name": this.name,
                "surname": this.surname,
                "review_text": this.review_text,
                "vote": this.vote,
                "user_id": this.idProfile
            }).then(param => {
                this.sending = false;
                this.status = param.data.status;
                if (this.status) {
                    this.errors = {};
                    this.name = "";
                    this.surname = "";
                    this.review_text = "";
                    this.vote = "";
                    this.idProfile = "";
                }
                else {
                    this.errors = param.data.errors;
                }
            });
        },
        getSingleProfile() {
            let slug = this.$route.params.slug;
            console.log(slug);
            axios.get("/api/users/" + slug)
                .then(response => {
                this.profile = response.data.resolve;
                this.idProfile = response.data.resolve.id;
                console.log(this.profile);
            })
                .catch(error => {
                this.$router.push({ name: "not-found" });
            });
        },
    },
    components: { ReviewComponent }
}
</script>

<style scoped lang="scss">
  
  .eb_title{
    font-size: 4.5rem;
  }
  .eb_color{
    color: #0A4067;
    margin-top: 150px;
  }

  .textGray{
    color:#5f6c7b;
  }
  input, textarea, select{
    border-radius: 10px;
    outline-color: #3da9fc;
    border: none;
  }
  
  .btn{
    background-color:#0A4067;
    color: whitesmoke;
  }

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

    @media screen and (max-width:425px) {
        .eb_title{
            font-size: 2.5rem;
        }
    }

</style>