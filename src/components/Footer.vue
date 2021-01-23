<template>
  <v-footer
    color="primary lighten-1"
    padless
    height="55"
  >
    <v-row
      justify="center"
      no-gutters
    >
      <v-btn
        color="white"
        text
        rounded
        class="my-2"
        to="/about"
      >
        Über uns
      </v-btn>
      <v-btn
        color="white"
        text
        rounded
        class="my-2"
        to="/impressum"
      >
       Impressum
      </v-btn>
      <v-btn
        color="white"
        text
        rounded
        class="my-2"
        to="/contact"
      >
        Kontakt
      </v-btn>
      
    </v-row>
  </v-footer>
</template>

<script>
  export default {
    data: () => ({
      links: [
        'Über uns',
        'Impressum',
        'Kontakt',
      ],
    }),
  }
</script>

<style>
  
</style>