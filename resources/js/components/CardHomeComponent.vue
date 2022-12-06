<template>
    <section class="container-fluid mt-5 eb_padd border-0">
        <div class="title text-center">
            <h2 class="text-dark font-weight-bold text-pop-up-top">Perchè BDoctors?</h2>
        </div>
        <div class="row justify-content-between">
            <div v-for="(card,index) in cards" :key="index" class="col-12 col-md-6 col-lg-3 text-center">
                <i class="fa-solid pb-4" :class="card.icon"></i>
                <h2 class="font-weight-bold pb-3">{{card.title}}</h2>
                <p class="text-secondary">{{card.text}}</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name:'CardHomeComponent',
    data(){
        return{
            cards:[
                {
                    icon: 'fa-user-md',
                    title: 'Ottimi dottori',
                    text: 'Tutti i nostri medici privati ​​sono membri esperti. Monitoriamo costantemente il feedback dei pazienti e le note di consultazione per garantire i più elevati standard di cura.',
                },
                {
                    icon: 'fa-scale-balanced',
                    title: 'Convenienza',
                    text: 'Offriamo appuntamenti medici in giornata e last minute. Con un servizio veloce e impeccabile, BDoctors è il tuo medico di base ovunque tu sia. Il nostro obiettivo è farti sentire meglio nel modo più rapido e indolore possibile. Prenota un appuntamento medico online in pochi secondi e inizia subito a sentirti meglio.',
                },
                {
                    icon: 'fa-sliders',
                    title: 'Controllo',
                    text: 'Riceverai note complete dopo l\'appuntamento con il medico. Sei libero di portarli dal tuo medico di famiglia o da qualsiasi altro operatore sanitario.',
                },
                {
                    icon: 'fa-tag',
                    title: 'Rapporto qualità-prezzo',
                    text: 'I prezzi partono da 20€ per una consulenza di 30 minuti. Non ci sono costi per la scrittura di prescrizioni o note di malattia. I nostri prezzi di test e scansione sono tra i più bassi disponibili.',
                }
            ]
        }
    }
}
</script>

<style scoped lang="scss">
    .eb_padd{
        padding-bottom: 120px;
        .title{
            padding-bottom: 100px;
            h2{
                font-size: 5.5rem;
                color: #094067;
            }
        }
    }

    i{
        font-size: 4rem;
        color: #094067;
    }
    p{
        font-size: 1.2rem;
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



    @media  screen and (max-width: 449px) {
        .title{
            h2{
                font-size: 2.5rem;
            }
        }
    }

</style>