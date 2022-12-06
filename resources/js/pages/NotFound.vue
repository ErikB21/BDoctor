<template>
    <main>
        <h1>4<span><i class="fa-solid fa-ghost"></i></span>4</h1>
        <h2>Error: 404 page not found</h2>
        <p>Sorry, the page you're looking for cannot be accessed</p>
    </main>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>

<style lang="scss" scoped>

    $bg: #48525f;
    $ghost: #0A4067;
    $heading: #e7ebf2;

    main {
        align-items: center;
        display: flex;
        flex-direction: column;
        height: calc(100vh - 263px);
        justify-content: center;
        text-align: center;
    }

    h1 {
        color: lightgreen;
        font-size: 12.5rem;
        letter-spacing: .10em;
        margin: .025em 0;
        text-shadow: .05em .05em 0 rgba(0,0,0,.25);
        white-space: nowrap;
    
        @media(max-width: 30rem) {
            font-size: 8.5rem;
        }
        
        & > span {
            animation: spooky 2s alternate infinite linear;
            color: $ghost;
            display: inline-block;
        }
    }

    h2 {
        color: lightslategray;
        margin-bottom: .40em;
        font-size: 2rem;
    }

    p {
        color: gray;
        margin-top: 0;
    }

    @keyframes spooky {
        from {
            transform: translatey(.15em) scaley(.95);
        }
        
        to {
            transform: translatey(-.15em);
        }
    }
</style>