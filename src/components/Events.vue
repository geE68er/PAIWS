<template>
  <v-card
    class="mx-auto"
    max-width="60%"
  >
    <v-container 
    fluid
    v-for="event in events"
    :key="event.title"
    :cols="event.flex">
      <v-row dense>
        <v-col>
          <v-card>
            <v-img
              :src="event.src"
              class="white--text align-end"
              gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
              height="200px"
            >
              <v-card-title v-text="event.title"></v-card-title>
            </v-img>

            <v-card-actions>
              <v-spacer></v-spacer>

              <v-btn icon>
                <v-icon>mdi-heart</v-icon>
              </v-btn>

              <v-btn icon>
                <v-icon>mdi-bookmark</v-icon>
              </v-btn>

              <v-btn icon>
                <v-icon>mdi-share-variant</v-icon>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-card>
</template>

<script>
  export default {
    data: () => ({
      events: [
        { title: 'Rudern', src: '', flex: 0 },
        { title: 'Bierkrug-Stemmen', src: '', flex: 0 },
        ],
    }),
  }
</script>