<template>
<div id="Messages">
<button v-on:click="afficheMess">Id : {{ msg.id }} Expediteur : {{ msg.expediteur }} Date : {{ msg.date }}</button>
</div>
</template>

<script>
import MessageDroite from './MessageDroite.vue';

export default {
  name: 'Messages',
  props:["msg"],
  methods:{
		afficheMess() {
            this.$emit("click", this.msg);
        }
  },
  data(){
		return{
			user:"",
		};
	},
};


</script>

<style scoped>
#Messages {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>