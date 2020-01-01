<template>
<div >
   <v-app light >
    <v-content >
       <section>
        <div class=" mask  rgba-black-light">
        <v-parallax src="./igl3.jpg"
     
         height="700">
         
          <v-layout
            column
            align-center
            justify-center
           mb-8
          >
            
            <h2  >eScolarité</h2>      
 
   <div justify-center>
    <h6 class="mb-6 ml-10">__________________________________________________________________________________________________________________________________________________</h6>
     <h4 class="white-text my-4">Outil de scolarité ciblant les étudiants, enseignants et l'administration</h4>        
 </div>
 
  <template>
  <div class="text-center">
    <v-dialog
      v-model="dialog"
      width="500"
    >
      <template v-slot:activator="{ on }">
        <v-btn
         
             class="mt-12" 
             tile  outlined color="#ffffff"  
              x-large
          v-on="on"
        >
       
          Connexion
        </v-btn>
      </template>
      <template>
      
       
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="25"
            sm="15"
            md="10"
          >
            <v-card class="elevation-12">
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Connexion </v-toolbar-title>
                <v-spacer />
                
              </v-toolbar>
              <v-card-text>
                <v-form>
                 <v-text-field
                  v-model="email"
                  :rules="emailRules"
                  label="E-mail"
                   required
    ></v-text-field>
                  <v-text-field
                    id="password"
                    label="Mot de passe"
                    name="password"
                    
                    type="password"
                  />
                  <v-select
                   v-model="select"
                   :items="items"
                     :rules="[v => !!v || 'Item is required']"
                    label="choisi"
                    required
                   ></v-select>

                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer />
                <v-btn color="primary">Login</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
       
      
      </template>
    </v-dialog>
  </div>
</template>
          </v-layout>
        </v-parallax>
        </div>
      </section>

      <section>
        <v-layout
          column
          wrap
          class="my-12"
          align-center
        >
          <v-flex xs12 sm4 class="my-4">
            <div class="text-center">
               <h3 class="mb-2">A Propos</h3>
              <span class="subheading">
                <p>Un outil web permettant de relier les enseignanats, les étudiants et l'administration de l'ESI   </p>
                <p> Cet outil se présente comme un outil de communication entre les étudiants et les enseignants  </p>
              </span>
            </div>
          </v-flex>
          <v-flex xs12 sm4 class="my-4">
            <div class="text-center">
              <h3  class="mb-5 mt-5">Aide</h3>
              <span class="subheading">
                <p>Bienvenu cher utilisateur</p>
               <p>eScolarite est une application web qui facilite l'organisation, le partage et la communication entre les étudiants </p> 
               <p>  les enseignants  et l'administration </p>
              </span>
            </div>
          </v-flex>
          <v-flex xs12>
            <v-container grid-list-xl>
              <v-layout row wrap align-center>
                <v-flex xs12 md4>
                  <v-card flat class="transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class=" text--lighten-2" style="color:#F29703;">mdi-animation</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-center">planning</div>
                    </v-card-title>
                    <v-card-text>
                      Cet outil permet de définir le planning à respecter 
                      tout au long du projet
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md4>
                  <v-card flat class="transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class=" text--lighten-2" style="color:#F29703;">mdi-apps</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline">livrables</div>
                    </v-card-title>
                    <v-card-text>
                     Cet outil permet aux encadrants de consulter les livrables déposés par les étudiants et les corriger 
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md4>
                  <v-card flat class="transparent">
                    <v-card-text class="text-center">
                      <v-icon x-large class="text--lighten-2" style="color:#F29703;">mdi-bell</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-center">Réunion</div>
                    </v-card-title>
                    <v-card-text>
                      Cet outil permet de programmer et consulter l'agenda des Réunions
                    </v-card-text>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-container>
          </v-flex>
        </v-layout>
      </section>

      
      <section>
        <v-footer color=#014955>
        <v-container grid-list-xl>
          <v-layout row wrap justify-center class="my-12">
            <v-flex xs12 sm4>
              <v-card flat class="transparent">
                <v-card-title primary-title class="layout justify-center">
                  <div class="text-uppercase font-weight-bold">PRESENTATON</div>
                </v-card-title>
                <v-card-text>
                  L'École nationale supérieure d'informatique (ESI), ancinnement Institut national de formation en informatique (INI).est un établissement d'enseignement supérieur algérien formant des ingénieurs d’État en informatique. Elle est située à Oued Smar, à environ 15 km du centre-ville de la capitale Alger, en Algérie
                </v-card-text>
              </v-card>
            </v-flex>
            <v-flex xs12 sm4 offset-sm1>
              <v-card flat class="transparent">
                <v-card-title primary-title class="layout justify-center">
                  <div class="text-uppercase font-weight-bold">CONTACT</div>
                </v-card-title>
                
                <v-list class="transparent">
                  <v-list-item>
                    <v-list-item-action>
                      <v-icon class="blue--text text--lighten-2">mdi-phone</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                      <v-list-item-title>00 213 23 93 91 32</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-action>
                      <v-icon class="blue--text text--lighten-2">mdi-map-marker</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                      <v-list-item-title>BP 68M OUED SMAR 16309</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-action>
                      <v-icon class="blue--text text--lighten-2">mdi-email</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                      <v-list-item-title>www.esi.dz</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
        </v-footer>
      </section>

      <v-footer color=#013B46>
        <v-layout row wrap align-center>
          <v-flex xs12>
            <div class= "footer-copyright text-center">
              ESI © 2019-2020    
              
            </div>
          </v-flex>
        </v-layout>
      </v-footer>
       
    </v-content>

  </v-app>

 </div>
 
 
 </template>
 <script>
  export default {
    data: () => ({
      items: ['Administrateur ', 'Enseignant ', 'Etudiant'],
    }), 
  }
</script>

<style>
h2 {
  font-size:7vw;
  color: white;
  font-weight: bold;
  
}
h4{
 font-size:25px;
  color: white; 
  font-weight: inherit;
}
h3{
  font-size:2.25vw; 
 color: black;  
  font-weight: bold;
}

</style>