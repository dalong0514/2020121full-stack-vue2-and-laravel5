<template>
    <div id="footer">
        <div class="hr"></div>
        <div :class="containerClass">
            <p>
                <img src="/images/logo_grey.png" class="icon">
                <span>
                    <strong>Vuebnb</strong>. A full-stack Vue.js and Laravel demo app
                </span>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        containerClass() {
            // this.$route.name is either 'home' or 'listing'
            return `${this.$route.name}-container`;
        }
    },
}
</script>

<style>
    #footer .icon {
        height: 23px;
        display: inline-block;
        margin-bottom: -6px;
    }

    .hr {
        border-bottom: 1px solid #dbdbdb;
        margin: 3em 0;
    }

    #footer p {
        font-size: 15px;
        color: #767676 !important;
        display: flex;
    }

    #footer p img {
        padding-right: 6px;
    }
</style>