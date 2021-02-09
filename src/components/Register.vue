<template>
  <v-content>
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title>Registrieren</v-card-title>
        <v-card-text>
          <v-text-field name="fname" label="Vorname" prepend-icon="mdi-account"/>
          <v-text-field name="nname" label="Nachname" prepend-icon="mdi-account"/>
          <v-text-field name="adr" label="Adresse" prepend-icon="mdi-map-marker"/>
          <v-text-field name="mail" label="E-Mail" prepend-icon="mdi-email-multiple"/>
          <v-text-field 
          name="password"
          label="Passwort" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"/>
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions>
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
}
</script>
