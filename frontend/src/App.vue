<template>
    <div id="app">
      <div>
        <div class="header" >
          <div class="top-header" >
            <div class="container">
              <div class="top-head" >
                <ul class="header-in">
                  <li ><a href="#" >  Help</a></li>
                  <li><a href="contact.html">   Contact Us</a></li>
                  <li ><a href="#" >   How To Use</a></li>
                </ul>

                <div class="search">
                  <form>
                    <input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
                    <input type="submit" value="" >
                  </form>
                </div>

                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!---->

          <div class="header-top">
            <div class="container">
              <div class="head-top">
                <div class="logo">
                  <h1><a href="index.html"><span>G</span>ames <span>C</span>enter</a></h1>
                </div>
                <div class="top-nav">
                  <span class="menu"><img src="images/menu.png" alt=""> </span>

                  <ul>
                    <li><router-link class="color5"  to="/">Главная</router-link></li>
                    <li><router-link class="color5"  to="/games">Игры</router-link></li>
                    <li><router-link class="color5"  to="/reviews">Обзоры</router-link></li>
                    <li><router-link class="color4"  to="/404">Новости</router-link></li>
                    <li><router-link class="color5"  to="/blog">Blog</router-link></li>
                    <li><router-link class="color6"  to="/contact">Контакты</router-link></li>
                    <div class="clearfix"> </div>
                  </ul>
                </div>

                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <router-view/>
  </div>

</template>

<script>
export default {
  name: 'App',
  data() {
    return {
    }
  },
  components: {
    name:404
    //ToDoList,AddToDo
  },
  methods:{

  }
}
</script>



<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
