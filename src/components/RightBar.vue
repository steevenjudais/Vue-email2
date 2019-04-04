<template>
<div class="colonne2" id="RightBar">
{{ msg.message }}
</div>
</template>

<script>
import Messages from './Messages.vue';
import axios from 'axios';

export default {
  name: 'RightBar',
  components: {
    Messages,
  },
  props:["msg"],
};
</script>

<style scoped>
#RightBar {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.colonne2 {
  width:74%;
  float:left;
  position: relative; 
}
</style>