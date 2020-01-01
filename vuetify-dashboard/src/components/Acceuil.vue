
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
            <v-icon color="white" >mdi-view-dashboard</v-icon> 
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
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" color="white"/>
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

<template color="#f1f8e9">
             
<v-card
 height="100"
 width="450"
    class="mx-auto mt-8"
            color="#f5f5f5 " 
            
            dark
 >
 <v-row align="center">
<v-col class="display-3" cols="10">
            
<v-card-text>
           <p>Etudiant(e) : Yanes Zakia</p>
              
                 <p>Groupe : 01</p>     
</v-card-text>
 </v-col>
<v-col cols="2">
  
      <v-icon  x-large color="#4B515D" class="mb-8">mdi-account-circle</v-icon>
     
     </v-col>
      </v-row>
            
          </v-card>
        <v-layout
      justify-center
     
      
    >   
     
       <v-card
       color="#f1f8e9"
    class=" ml-6 mt-12"
    width="900"
    max-height="200"
   
 
  >
  
            <v-card-title class="headline" style="background: #212121;">
               <h6>Bulletin de notes</h6> 
                </v-card-title>
  
  <v-data-table 
  color="#f1f8e9"
    :headers="headers"
    :items="desserts"
    :items-per-page="5"
    class="elevation-1"
    
  ></v-data-table>
  
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
    data () {
        
      return {
          drawer: null,
        headers: [
          {
            text: 'Module',
            align: 'left',
            sortable: true,
            value: 'name',
          },
          { text: 'Interrogation', value: 'int' },
          { text: 'CI', value: 'ci' },
          { text: 'CF', value: 'cf' },
          { text: 'Moyenne', value: 'moy' },
          { text: 'Remarque', value: 'rem' },
        ],
        desserts: [
          {
            name: 'Analyse numérique',
            int: 15,
            ci: 16.0,
            cf: 12,
            moy: 14.0,
            rem: 'Bien',
          },
           {
            name: 'RO',
            int: 13,
            ci: 16.0,
            cf: 18,
            moy: 15.0,
            rem: 'Tres Bien',
          },
           {
            name: 'IGL',
            int: 17,
            ci: 11.0,
            cf: 12,
            moy: 13.0,
            rem: 'Bien',
          },
          {
            name: 'SYC1',
            int: 17,
            ci: 17.0,
            cf: 18,
            moy: 17.60,
            rem: 'Excellent',
          },
          
          {
            name: 'Moyenne Génerale',

            moy: 13.60,
            rem: 'Bien',
          },
          
        ],
        
      }

    },
    drawer: null,
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