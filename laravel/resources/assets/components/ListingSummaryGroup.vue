<template>
    <div class="listing-summary-group">
        <h1>Places in {{ country }}</h1>
        <div class="listing-summaries">
            <listing-summary 
            v-for="listing in listings"
            :key="listing.id"
            :listing="listing"></listing-summary>
        </div>
    </div>
</template>

<script>
import ListingSummary from './ListingSummary.vue';
export default {
    props: ['country', 'listings'],
    component: {
        ListingSummary,
    },
}
</script>