<template>
  <div id="app">
    <p>Connecter en tant que : {{ user }}</p>
    <TopBar @changeUser="changeUser"/>

    <div id="LeftBar">
     <LeftBar :user="user" @afficherMessage="changerMessage"/>
    </div>
    <div id="RightBar">
     <RightBar :msg="msg"/>
    </div>
  </div>
</template>

<script>
import TopBar from './components/TopBar.vue';
import LeftBar from './components/LeftBar.vue';
import RightBar from './components/RightBar.vue';

export default {
  name: 'app',
  components: {
    TopBar,
    LeftBar,
    RightBar,
  },
  data(){
      return {
        user:"",
        msg: {},
      }
    },
    methods:{
      changeUser(user)
      {
        this.user=user
      },
      changerMessage(msg) {
        this.msg = msg;
        console.log(this.msg);
      }
    },
};

</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.colonne1 {
  width:25%;
  float:left;
  position: relative; 
}
.colonne2 {
  width:74%;
  float:left;
  position: relative; 
}
</style>
