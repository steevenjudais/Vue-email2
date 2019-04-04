<template>
  <div id="Connect">
    <input type="text" v-model="user" placeholder="utilisateur">
    <button v-on:click="connexion">connexion</button>
  </div>
</template>

<script>
export default {
  name: 'Connect',
  components: {
	},
	methods:{
		connexion() {
        this.$emit("connect", this.user);
    }
	},
	data(){
		return{
			user:""
		};
	},
};
</script>

<style scoped>
#Connect {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
