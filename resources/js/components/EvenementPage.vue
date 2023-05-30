<template>
    <div class="topFrame"></div>
    <div>
        <h1>Evenements</h1>
    </div>
    <div class="search-box">
        <select id="styleMusique" v-model="filterStyle">
            <option value="">Style de musique</option>
            <option value="electro">Éléctro</option>
            <option value="rap">Rap</option>
            <option value="pop">Pop</option>
            <option value="metal">Métal</option>
            <option value="rock">Rock</option>
        </select>
        <select id="prix" v-model="filterPrix">
            <option value="">Prix</option>
        </select>
        <select id="ville" v-model="filterVille">
            <option value="">Ville / Location</option>
        </select>
    </div>
    <div class="event-list">
        <event v-for="(event, i) in evenement"></event>
    </div>
</template>
<script>
export default {
    name: "EvenementPage",
    data: function () {
        return {
            evenements: [],
        };
    },
    methods: {
        selectionnerUser(val) {
            console.log(val);
        },
    },
    computed: {},
};
</script>
