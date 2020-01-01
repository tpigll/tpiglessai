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
        <v-list-item href="./Acceuil">
          <v-list-item-action href="./Acceuil">
            <v-icon color="white">mdi-view-dashboard</v-icon> 
          </v-list-item-action>
          <v-list-item-content >
            <v-list-item-title  class="ml-4">
              <h3 >Acceuil</h3>
             
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
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
      <v-icon color="white">mdi-account-circle</v-icon>
       </v-btn>
    </v-app-bar>
<!-- ecrire ici -->
     
      <template>
      <v-layout
      justify-center
   
    >   
 
       <v-card
     color="#eceff1 "
    class=" ml-6 mt-12"
    width="700"
    max-height="450"
   
   
  >
   <v-card-title class="headline" style="background: #212121;">
               <h6>Ajouter un planning</h6> 
                </v-card-title>
   
<v-card-text>
<v-container>
<v-row>
   <v-col cols="11" class="ml-8">
 <v-text-field label="Groupe*" required></v-text-field>
 </v-col>
 <v-col cols="11" class="ml-8">
 <v-text-field label="Section*" required></v-text-field>
 </v-col>
 <v-col cols="11.5">
  <v-file-input multiple label="File input"></v-file-input>
 </v-col>
  </v-row>
</v-container>

</v-card-text>
<v-card-actions>
        <v-spacer></v-spacer>
          
         <v-btn  color="#212121">
          <h3>submit</h3> 
           </v-btn> 
        </v-card-actions>



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
        { text: 'Déposer planning prof', icon: 'mdi-arrow-down-bold' },
        { text: 'Déposer planning étudiant', icon: 'mdi-arrow-down-bold-outline' },
        { text: 'Fonctionnalité 3', icon: 'mdi-flag' },
         { text: 'Consulter profil', icon: ' mdi-account' },
         { text: 'Fonctionnalité 4', icon: 'mdi-flag' },
         { text: 'Fonctionnalité 5', icon: 'mdi-flag' },
       
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