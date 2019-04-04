<template>
 <div style="border-style: inset;" id="SendMssage">
      Destinataire :
      <input>
      Message
      <input>
      <button>Envoyer</button>
    </div>
</template>

<script>

export default {
  name: 'SendMessage',
};
</script>

<style scoped>
#SendMessage {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>