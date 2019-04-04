<template>
<div id="MessageDroite">
<Messages :i="i" :msg="mesg"/> {{ msg[i].message }}
</div>
</template>

<script>
import Messages from './Messages.vue';

export default {
  name: 'MessageDroite',
  components: {
    Messages,
  },
  props:["msg"],
  data() {
     return {
         i: 0,
         msg: "",
     }
  },
  methods: {
      i() {
          this.i++;
      },
  },
};
</script>

<style scoped>
#MessageDroite {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>