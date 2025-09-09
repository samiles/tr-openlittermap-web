<template name="littercoin-owed">
	<div v-show="littercoinowed">
		<h1 class="title is-2 has-text-centered"><b>{{ this.profile1 }}</b>{{ this.littercoinowed }}{{ $t('littercoin') }}</h1>
        <p class="has-text-centered">{{ this.profile2 }} <u><a href="/settings/littercoin">{{ $t('littercoin_1') }}{{ this.profile3 }}</a></u> {{ this.profile4 }}.</p>
        <br>
	</div>
</template>

<script>
	export default {
		props: [
		  'littercoinowed',
		  'profile1',
		  'profile2',
		  'profile3',
		  'profile4'
		]
	}
</script>