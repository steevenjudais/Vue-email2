<template>
<div id="TopBar">
<Connect @connect="changeUser"/>
<SendMessage/>
</div>
</template>

<script>
import Connect from './Connect.vue';
import SendMessage from './SendMessage.vue';

export default {
  name: 'TopBar',
  components: {
    Connect,
    SendMessage,
  },
  methods:{
      changeUser(user)
      {
        this.$emit("changeUser", user)
      }
    }
};
</script>

<style scoped>
#TopBar {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
