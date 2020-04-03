<template>
    <div class="flex text-center mt-4">
        <p class="w-1/3">{{ user }}</p>
        <p class="w-1/3 text-red-700 font-bold">{{ glass }}</p>
        <p class="w-1/3 text-yellow-500 font-bold">{{ sand }}</p>
    </div>
</template>

<script>
    export default {
        name: "stockparuser",
        props: {
            user: String,
            glass: String,
            sand: String
        }
    }
</script>
