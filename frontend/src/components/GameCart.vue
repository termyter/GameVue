<template>

    <div>
        <li class="game">
            <ul class="games-grid">
                <h1>{{title}}</h1>
                <p>{{description}}</p>
                <p>{{price}}</p>
            </ul>
        </li>
    </div>
</template>

<script>
export default {
    name: "Game",
    props:{
        title: String,
        description: String,
        price: String
    }
}
</script>

<style scoped>

</style>
