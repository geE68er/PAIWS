<template>
  <v-content>
    <v-card width="500" class="mx-auto mt-9">
      <v-card-title>Anmelden</v-card-title>
      <v-card-text>
        <v-text-field label="E-Mail" prepend-icon="mdi-email-multiple"/>
        <v-text-field 
        label="Passwort" 
        :type="showPassword ? 'text' : 'password'"
        prepend-icon="mdi-lock"
        :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
        @click:append="showPassword = !showPassword"/>
      </v-card-text>

      <v-divider></v-divider>
      <v-card-actions>
        <v-btn color="info"><router-link to="" tag="span">Anmelden</router-link></v-btn>
        <v-spacer></v-spacer>
        <v-btn color="red"><router-link to="/register" tag="span">Registrieren</router-link></v-btn>
      </v-card-actions>
    </v-card>
  </v-content>
</template>

<script>
export default {
  
  data()
  {
    return{
      showPassword:false
    }
  }
}}
</script>
