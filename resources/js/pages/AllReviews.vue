<template>
    <div class="container bg-light my-5">
        <h1 class="text-pop-up-top eb_title text-center">Recensioni</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-drop-2-center my-5 py-3" v-for="(rev, index) in userReview" :key="index">
                    <div class="row">
                        <div class="col-sm-12 col-lg-5">
                            <div class="card-body d-flex flex-column justify-content-around align-items-center">
                                <h4 class="card-title text-center textBlue py-1">{{rev.name}} {{rev.surname}}</h4>
                                <div class="text-center py-1">
                                    <a class="star" v-for="index in 5" :key="index" href ="" :style="rev.vote >= index? 'color: rgb(252, 153, 6);':''" ><i class="fa-solid fa-star"></i></a>
                                </div>
                                <div class="image-box py-1 d-flex justify-content-center align-items-center">
                                    <a href="#" class="mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simmons"><img :src="`https://bootdey.com/img/Content/avatar/avatar${index + 1}.png`" class="rounded-circle" width="70" alt="user"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-7 border-left">
                            <div class="card-body">
                                <p class="textGray">{{rev.review_text}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-auto text-center pt-4">
            <router-link :to="{name: 'single-profile'}" class="btn"><i class="fa-solid fa-arrow-left"></i> Torna al Profilo</router-link>
        </div>
    </div>
</template>

<script>

export default {
  components: {  },
    name: 'AllReviews',
    data(){
        return{
            profile: [],
            reviews: [],
            user_id: '',
            userReview: []
        }
    },
    mounted(){
        this.getSingleProfile();
        this.getReviews();
    },
    methods: {
        getSingleProfile() {
            let slug = this.$route.params.slug;
            console.log(slug);
            axios.get("/api/users/" + slug)
                .then(response => {
                this.profile = response.data.resolve;
                this.user_id = response.data.resolve.id;
                console.log(this.profile);
            })
                .catch(error => {
                this.$router.push({ name: "not-found" });
            });
        },
        getReviews(){
            axios.get('/api/reviews/')
            .then((response) =>{
                this.reviews = response.data.results;
                console.log(this.reviews);
                this.reviews.filter((review) =>{
                    if(review.user_id === this.user_id){
                        return this.userReview.push(review);
                    }
                    console.log(this.userReview);
                })
            })  
        },
    },   
}
</script>

<style lang="scss" scoped>
    .btn{
        background-color: #0A4067;
        color: whitesmoke;
        &:hover{
            background-color: whitesmoke;
            color: #0A4067;
            outline: 2px solid #0A4067;
        }
    }
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
        margin-top:20px;
        .star{
            color:#0A4067;
        }
    }

    .eb_title{
        font-size: 4rem;
        margin-top: 150px;
        color: #0A4067;
    }
    .textGray{
        color:#5f6c7b;
        font-size: 1.5rem;
    }
    .textBlue{
        color: #0A4067;
    }

    // ANIMAZIONI SHADOW
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

    .shadow-drop-2-center {
        -webkit-animation: shadow-drop-2-center 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                animation: shadow-drop-2-center 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }
    @-webkit-keyframes shadow-drop-2-center {
        0% {
        -webkit-transform: translateZ(0);
                transform: translateZ(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }
        100% {
        -webkit-transform: translateZ(50px);
                transform: translateZ(50px);
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
        }
    }
    @keyframes shadow-drop-2-center {
        0% {
        -webkit-transform: translateZ(0);
                transform: translateZ(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }
        100% {
        -webkit-transform: translateZ(50px);
                transform: translateZ(50px);
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
        }
    }

    // MEDIA QUERY

    @media screen and (max-width:425px) {
        .eb_title{
            font-size: 2.5rem;
        }
    }
</style>