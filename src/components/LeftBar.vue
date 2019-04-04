<template>
<div class="colonne1" id="LeftBar">
<Messages v-for="message in messages" :msg="message" @click="afficherMessage"/>
</div>
</template>

<script>
import Messages from './Messages.vue';
import axios from 'axios';

export default {
  name: 'LeftBar',
  components: {
    Messages,
  },
  props:["user"],
	data() {
			return {messages:[]}
	},
	watch: {
    user(user) {
			if (this.user!=="") {
					this.fetchMessages(user);
			}
		},
	},
	methods:{
		async fetchMessages(user) {
				const response = await axios.get(`http://127.0.0.1/vue-webmail/src/components/php/list.php?user=${user}`);
				this.messages = response.data;
		},
    afficherMessage(msg) {
      this.$emit("afficherMessage", msg);
    }
	},

};
</script>

<style scoped>
#LeftBar {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.colonne1 {
  width:25%;
  float:left;
  position: relative; 
}
</style>
