<template>
    <div class="p-8 bg-green-600 rounded-lg">

        <h2 class="text-center mb-4 text-2xl font-bold">Stock</h2>

        <div class="flex text-center">
            <p class="w-1/3 font-bold">Responsable</p>
            <p class="w-1/3 font-bold">Verre</p>
            <p class="w-1/3 font-bold">Sable</p>
        </div>

        <stockparuser user="Test" glass="18" sand="10"></stockparuser>

        <div class="mt-8 text-center">
            <h3 class="font-bold text-2xl">Général</h3>

            <div class="flex justify-center mt-4">
                <p class="text-xl mr-4">Verre : <span class="text-red-700 font-bold">100</span></p>
                <p class="text-xl">Sable : <span class="text-yellow-500 font-bold">100</span></p>
            </div>

        </div>

    </div>
</template>

<script>

    import stockparuser from "./stockparuser";

    export default {
        name: "stock",
        components: {
            stockparuser
        }
    }
</script>
