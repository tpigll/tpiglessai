<template>
  <v-app id="inspire">
    <v-navigation-drawer 
      v-model="drawer"
      app
      clipped
      style="background: #212121"
    >
    <img
    class="mt-0"
              src="./logo4.png"
              width="220"
      height="220"
            >
      <v-spacer />
      <v-list dense class="mt-0">
        <router-link
          v-ripple
          to="/tableau"
        >
        <v-list-item link>
          <v-list-item-action  >
            <v-icon color="white">mdi-view-dashboard</v-icon> 
          </v-list-item-action>
          <v-list-item-content  >
            <v-list-item-title  class="ml-4">
              <h3 >Acceuil</h3>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        </router-link>
        <v-list-item link>
          <v-list-item-action>
            <v-icon color="white">mdi-account-circle</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title class="ml-4">
              <h3 >Mon profil</h3>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link>
          <v-list-item-action>
            <v-icon color="white">mdi-animation</v-icon> 
          </v-list-item-action>
          <v-list-item-content >
            <v-list-item-title class="ml-4">
             <h3> Mes projets</h3>
              </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
 <v-list-item link>
          <v-list-item-action>
            <v-icon color="white">mdi-arrow-right</v-icon> 
          </v-list-item-action>
          <v-list-item-content >
            <v-list-item-title style="text-color: #fff3e0;" class="ml-4">  
              <h3 > Déconnecter</h3>
             
              </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
     
    </v-navigation-drawer>

    <v-app-bar 
      app
      clipped-left
      style="background:#212121"
  >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" color="white" />
      <v-toolbar-title style="color: white;">e-Scolarité</v-toolbar-title>
       <v-spacer />
      <v-btn icon>
        <v-icon color="white">mdi-help-circle</v-icon>
      </v-btn>
      <v-btn icon >
        <v-icon color="white">mdi-bell</v-icon>
      </v-btn>
      <v-btn icon>
      <v-icon  color="white">mdi-account-circle</v-icon>
       </v-btn>
    </v-app-bar>
<!-- ecrire ici -->
    <v-spacer></v-spacer>   
      <template>
      <v-layout
      justify-center
   
    >   
 
       <v-card
     color="#eceff1"
    class=" ml-6 "
    width="700"
    max-height="420"
   
   
  >
   <v-card-title class="headline" style="background: #212121;">
               <h6>Fonctionnalités</h6> 
                </v-card-title>
    <v-list shaped  style="background: #eceff1">
      
     
      <v-list-item-group v-model="item" color="green">
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
         router to="item.route"
        >
          <v-list-item-icon>
            <v-icon v-text="item.icon" router to="item.route" ></v-icon>
          </v-list-item-icon>
          <v-list-item-content >
            <v-list-item-title v-text="item.text" router to="item.route" ></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-item-group>
    </v-list>
  </v-card>
  
   
      </v-layout>
  </template>
   

    
  </v-app>
</template>








<script>

  export default {
 
    props: {
      source: String,
    },
    data: () => ({
       
      drawer: null,
      item: 1,
      items: [
        { text: 'Déposer planning prof', icon: 'mdi-arrow-down-bold',route: '/Acceuil' },
        { text: 'Déposer planning étudiant', icon: 'mdi-arrow-down-bold-outline', route: '/Tableau'},
        { text: 'Fonctionnalité 3', icon: 'mdi-flag' },
         { text: 'Consulter profil', icon: ' mdi-account' },
         { text: 'Fonctionnalité 4', icon: 'mdi-flag' },
         { text: 'Fonctionnalité 5', icon: 'mdi-flag' },
       
      ],
      link: [
      {
        to: '/acceuil',
        
        text: 'Dashboard'
      },
      ],
    }),
    created () {
      this.$vuetify.theme.dark = false
    },
  }
</script>

<style>
p {
  font-size: 20px;
  color:#4B515D;
  font-family:"Arial";
  
}
h3{
    color: white;
}
h6{
    font-size: 25px;
    
    color:white;
}
 
</style>