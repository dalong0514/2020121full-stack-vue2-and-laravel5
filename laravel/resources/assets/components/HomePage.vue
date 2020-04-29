<template>
    <div class="home-container">
        <listing-summary-group 
        v-for="(group, country) in listing_groups"
        :key="country"
        :listings="group"
        :country="country"
        class="listing-summary-group">
        </listing-summary-group>
    </div>
</template>

<script>
    import { groupByCountry } from '../js/helpers';
    import ListingSummaryGroup from './ListingSummaryGroup.vue';

    export default {
        computed: {
            listing_groups() {
                return groupByCountry(this.$store.state.listing_summaries);
            }
        },
        components: {
            ListingSummaryGroup,
        },
    }
</script>

<style>
    .listing-summary-group {
        padding-bottom: 20px;
    }

    .listing-summaries {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        overflow: hidden;
    }
    .listing-summaries > .listing-summary {
        margin-right: 15px;
    }
    .listing-summaries > .listing-summary:last-child {
        margin-right: 0;
    }
</style>