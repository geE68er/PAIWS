<template>
  <v-content>
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title>Event erstellen</v-card-title>
        <v-card-text>
          <v-text-field label="Name" prepend-icon="mdi-account-circle"/>
          <v-text-field label="E-Mail" prepend-icon="mdi-email-multiple"/>
          <v-text-field label="Straße, Nummer" prepend-icon="mdi-map-marker"/>
          <v-text-field label="Stadt" prepend-icon="mdi-city"/>
          <v-text-field 
          label="Passwort" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"/>
          <v-text-field 
          label="Passwort bestätigen" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"/>
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="red"><router-link to="/" tag="span">Erstellen</router-link></v-btn>
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