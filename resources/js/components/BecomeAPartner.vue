<template>
    <div>
        <h1 style="font-size: 2rem;">{{ $t('become_a_littercoin_merchant') }}</h1>

        <div class="benefits-container p-10-mob">
            <div class="benefit">
                <h2>{{ $t('new_loyal_customers') }}</h2>
                <p>{{ $t('by_partnering_with') }}</p>
            </div>
            <div class="benefit">
                <h2>{{ $t('zero_waste_sales') }}</h2>
                <p>{{ $t('accepting_littercoin_can') }}</p>
            </div>
            <div class="benefit">
                <h2>{{ $t('positive_brand_image') }}</h2>
                <p>{{ $t('partnering_with_littercoin') }}</p>
            </div>
        </div>
        <div class="cta-container">
            <p class="mb1">{{ $t('apply_to_become') }}</p>
        </div>
        <div>
            <button @click="becomeAPartner" class="button is-large is-warning" style="border: 1px solid black;">{{ $t('text_0') }}<span style="margin: 0 .75em; font-weight: 600;">{{ $t('apply') }}</span>{{ $t('text_1') }}</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "BecomeAPartner",
    methods: {
        /**
         * Become a partner
         */
        becomeAPartner ()
        {
            this.$router.push({ path: '/littercoin/merchants' });
        },
    }
}
</script>

<style scoped>
    h1 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
        margin-top: 1.5em;
    }

    .benefits-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 3rem;
    }

    .benefit {
        background-color: #28a745;
        color: #fff;
        max-width: 300px;
        margin: 0 1rem;
        text-align: center;
        padding: 1rem;
        border: 2px solid #28a745;
        border-radius: 0.25rem;
        transition: all 0.3s ease-in-out;
        min-height: 12em;
    }

    .benefit:hover {
        background-color: darkgreen;
        color: #fff;
    }

    .benefit h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .benefit p {
        font-size: 1.1rem;
    }

    .cta-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .cta {
        background-color: #28a745;
        color: #fff;
        padding: 1rem;
        border-radius: 0.25rem;
        font-size: 1.2rem;
        text-align: center;
        transition: all 0.3s ease-in-out;
        border: 2px solid #28a745;
    }

    .cta:hover {
        background-color: darkgreen;
        color: #fff;
        border: 2px solid darkgreen;
        cursor: pointer;
    }
</style>
