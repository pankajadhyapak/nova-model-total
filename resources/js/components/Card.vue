<template>
    <card class="card relative metric px-6 py-4 relative card-panel">
        <div class="flex mb-4">
            <h3 class="mr-3 text-base text-80 font-bold">
                {{ card.display_name }}
            </h3>
        </div>
        <p class="flex items-center text-4xl mb-4">
            {{ card.total.toLocaleString() }}
        </p>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },
}
</script>
