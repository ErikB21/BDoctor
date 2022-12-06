<template>
  <div class="main_color container-fluid px-0">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
    name: 'MainComponent'
}
</script>

<style scoped lang="scss">
  .main_color{
    background-color: whitesmoke;
    height: 100%;
  }
</style>