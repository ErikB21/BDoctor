<template>
    <section class="eb_mb">

        <div class="parallax"></div>

        <section class="container-fluid px-0 mx-0 py-0">
            <div class="row mx-0" style="width:100%;">
                <div class="col-12 d-flex col-md-3 px-0 mx-o flex-wrap flex-md-nowrap flex-xl-wrap">
                    <div class="col-12 col-xl-6 eb_bg logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd2.svg" alt="bd2">
                    </div>
                    <div class="col-12 col-xl-6 bg-info logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd1.svg" alt="bd1">
                    </div>
                    <div class="col-12 col-xl-6 bg-info logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd4.svg" alt="bd4">
                    </div>
                    <div class="col-12 col-xl-6 eb_bg logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd3.svg" alt="bd3">
                    </div>
                </div>



                <div class="square-center logo-width px-0 py-5 py-xl-0 col-12 col-xl-6 redx">
                    <h2 class="font-weight-bold">Partnership</h2>
                </div>

                <div class="col-12 d-flex col-md-3 px-0 mx-o flex-wrap flex-md-nowrap flex-xl-wrap">
                    <div class="col-12 col-xl-6 bg-info logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd7.svg" alt="bd7">
                    </div>
                    <div class="col-12 col-xl-6 eb_bg logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd6.svg" alt="bd6">
                    </div>
                    <div class="col-12 col-xl-6 eb_bg logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd5.svg" alt="bd5">
                    </div>
                    <div class="col-12 col-xl-6 bg-info logo-width justify-content-center align-items-center d-flex">
                        <img src="/images/svg/bd8.svg" alt="bd8">
                    </div>
                </div>
            </div>
        </section>
    </section>
</template>

<script>
export default {
    name: 'ParallaxComponent'
}
</script>

<style scoped lang="scss">

    .eb_mb{
        margin-bottom: 150px;
        .parallax {
            background-image: url('/images/graphics/partner-doctor.png');
            min-height: 30rem; 
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .logo-width{
            outline: 2px solid #094067;
            img{
                width: 150px;
                height: 150px;
            }
        }
        .square-center{
            background-color: #094067;
            display: flex;
            justify-content: center;
            align-items: center;
            h2{
                font-size: 4rem;
                color: whitesmoke;
            }
        }
        .eb_bg{
            background-color: #fff;
        }
    }

    @media screen and (max-width:425px) {
        .square-center h2{
            font-size: 3rem !important;
        }
    }
    


</style>