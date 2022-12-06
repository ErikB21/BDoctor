<template>
    <section class="eb_jumbo container-fluid px-0">
        <div class="row mx-0 eb_flex align-items-center">
            <div class="col-12 col-md-5 pb-4 pb-md-0 eb_fl d-flex flex-column align-items-center align-items-md-start position-relative">
                <div class="title_shadow">
                    <h1 class="d-none d-md-block">BDoctors</h1>
                </div>
                <div class="title position-absolute">
                    <h2 class="text-light">BDoctors</h2>
                </div>
                <p class="mt-5 mb-0 text-light text-center text-md-left">I nostri dottori possono assistere in una vasta gamma di complicazioni mediche. Nella maggior parte dei casi, i nostri dottori possono consigliare direttamente il trattamento appropriato e, dove non possibile, possono indirizzarti allo specialista appropriato.</p>
                <div class="mt-5 btn"><span class="font-weight-bold">Tutti i Servizi</span></div>
            </div>


            <div class="col-12 col-md-6">
                <div v-for="(card, index) in cards" :key="index" class="eb_card d-flex flex-column pt-5 flex-md-row align-items-center align-items-md-start">
                    <div class="squares mr-md-3">
                        <div class="eb_square d-flex mb-4 mb-md-0 align-items-center justify-content-center">
                            <i class="fa-solid fa-2x" :class="card.icon"></i>
                        </div>
                    </div>
                    <div class="text d-flex flex-column">
                        <h3 class="text-light text-center text-md-left font-weight-bold">{{card.title}}</h3>
                        <p class="text-light text-center text-md-left">{{card.text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'JumboComponent',
    data(){
        return{
            cards:[
                {
                    title: 'Diagnosi',
                    icon: 'fa-stethoscope',
                    text: 'Il tuo medico di base ascolterà mentre descrivi il problema, eseguirà un esame ove richiesto, formulerà la diagnosi, fornirà consulenza medica e quindi elaborerà un piano d\'azione.'
                },
                {
                    title: 'Prescrizioni Private',
                    icon: 'fa-capsules',
                    text: 'BDoctor non fa pagare per la scrittura di prescrizioni. Tutti i nostri studi medici si trovano accanto a una farmacia. Non paghi la tassa NHS ma paghi invece il costo del farmaco specifico.'
                },
                {
                    title: 'Riferimenti e note di malattia',
                    icon: 'fa-suitcase-medical',
                    text: 'I medici di base di BDoctor sono nella posizione ideale per consigliarti su quale tipo di specialista vedere e per fare un rinvio a loro. Non ci sono costi per questo servizio.'
                },
            ]
        }
    }
}
</script>

<style scoped lang="scss">
    .eb_jumbo{
        background-image: url('/images/graphics/jumbotron_medical.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: overlay;
        background-color: rgba($color: #000000, $alpha: 0.7);
        margin-top: 7rem;
        padding: 5rem 0;
        
        .eb_flex{
            justify-content: space-evenly;
            padding: 4rem 0;
            .title_shadow h1{
                font-size: 5.5rem;
                color: rgba($color: #FFFFFF, $alpha: 0.1);
            }
            .title{
                top: 9%;
                left: 0%;
                z-index: 2;
                h2{
                    font-size: 5.5rem;
                }
            }
            
            p{
                font-size: 1.2rem;
                color: whitesmoke;
            }
            .btn{
                outline: 2px solid whitesmoke;
                color: whitesmoke;
                &:hover{
                    outline-color:black;
                    background-color: white;
                    color: black;
                }
            }
        }

        .eb_card{ 
            .eb_square{
                width: 70px;
                height: 70px;
                background-color: #C6EAEC;
            }
            p{
                font-size: 1.2rem;
            }
        }        
    }

    @media screen and (max-width:425px) {
        .eb_jumbo{
            margin-top: 0;
            padding-top: 0;
            .eb_flex{
                padding-top: 0;
            }
        }
    }


    @media screen and (max-width: 768px) {
        .title {
            position: static !important;
            text-align: center !important;
            h2{
                font-size: 2.8rem !important;
            }
        }
    }
</style>