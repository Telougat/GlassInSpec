<template>
    <div class="p-8 bg-green-600 rounded-lg">
        <form id="facture">

            <div class="flex justify-center">
                <h3 class="text-3xl font-bold">Facture</h3>
            </div>

            <hr class="my-8 border-2"/>

            <div class="flex justify-between"> <!-- Responsable (Complété automatiquement) -->
                <p class="font-bold">Responsable : </p>
                <p class="font-bold text-red-800">ResponsableViaPHP</p>
            </div>

            <div class="flex justify-between my-8">
                <p class="font-bold">Nom du salarié : </p>
                <input placeholder="Ex: Armano Romani" name="salaried" required class="px-2 rounded-lg" type="text"/>
            </div>

            <div class="flex justify-between">
                <p class="font-bold">Type : </p>

                <div class="flex justify-between w-1/3">

                    <div>
                        <input id="verre" type="radio" name="verre"/>
                        <label for="verre">Verre</label>
                    </div>

                    <div>
                        <input id="sable" type="radio" name="sable" checked>
                        <label for="sable">Sable</label>
                    </div>

                </div>

            </div>

            <div class="flex justify-between my-8">
                <p class="font-bold">Nombre : </p>
                <input required class="px-2 rounded-lg" name="number" value="0" type="number"/>
            </div>

            <div class="flex justify-between">
                <p class="font-bold">Montant : </p>
                <input required class="px-2 rounded-lg" name="amount" value="0" type="number"/>
            </div>

            <div class="flex justify-end mt-8">
                <input class="p-2 cursor-pointer rounded-lg hover:bg-red-500 font-bold" type="submit" value="Envoyer">
            </div>

        </form>
    </div>
</template>

<script>
    export default {
        name: "formfacture",
        data: function() {
            return {
                form: Object
            }
        },
        mounted() {
            this.form = document.getElementById("facture");
            this.form.addEventListener('submit', this.handleForm);
        },
        methods: {
            handleForm(event)
            {
                console.log('oklm');

                console.log(this.form);

                event.preventDefault()
            }
        }
    }
</script>
