<template>
  <LayOut />
</template>

<script>
  import LayOut from '@/components/layout/LayOut.vue';

  export default {
    components: {
      LayOut
    },
    mounted() {
      this.$store.commit('updateCartLocalStorage')
    }
  }
</script>

<style>
  nav a {
    font-weight: bold;
  }

  nav a.router-link-exact-active {
    color: #42b983;
  }
</style>
