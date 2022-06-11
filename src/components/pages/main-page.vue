<template>
  <layout :class="$style.root">
    <div :class="$style.body">Content</div>
  </layout>
</template>

<script>
import Layout from '@/blocks/layout.vue';

export default {
  components: {
    Layout,
  },
};
</script>


<style module>
  %base {
    font: 500 16px/20px Arial;
    color: #000;
  }
  .root {
    @extend %base;
  }

  .head {
    @extend %base;
    color: #ff0000;
  }
</style>
