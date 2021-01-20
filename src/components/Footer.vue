<template>
  <v-footer
    color="primary lighten-1"
    padless
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
      <v-col
        class="primary lighten-2 py-4 text-center white--text"
        cols="12"
      >
        {{ new Date().getFullYear() }} — <strong>Goethe Social</strong>
      </v-col>
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
  .footer {
    margin-bottom: 0;
  }
</style>