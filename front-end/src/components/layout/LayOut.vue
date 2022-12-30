<template>
    <div>
        <!-- <div class="min-h-full"> -->
        <NavigationBar />
        <TheHeader />
        <TheBody />
        <!-- </div> -->
    </div>
</template>

<script>
    import NavigationBar from '@/components/layout/NavigationBar.vue'
    import TheHeader from '@/components/layout/TheHeader.vue'
    import TheBody from '@/components/layout/TheBody.vue'

    export default {
        name: "LayOut",
        components: {
            NavigationBar,
            TheHeader,
            TheBody
        }
    }
</script>

<style>

</style>
