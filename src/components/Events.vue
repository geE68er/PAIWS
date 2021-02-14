<template>
<div>
  <v-col class="text-right">
  <v-spacer></v-spacer>
  <v-btn 
  fab
  elevation="5"
  color="red"
  x-large
  ><router-link to="/Createevent" tag="span"><v-icon>mdi-plus</v-icon></router-link>
  </v-btn>
  </v-col>
<v-layout wrap>
  
<v-flex v-for="event in events" :key="event.eventid">
  <v-card
    class="mx-auto"
    width="500"
    outlined
    elevation="5"
  >
    <v-list-item three-line>
      <v-list-item-content>
        <div class="overline mb-4">
          {{event.eventloc}}
        </div>
        <v-list-item-title class="headline mb-1">
         {{event.eventname}}
        </v-list-item-title>
        <v-list-item-subtitle>{{event.eventdte}}</v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        tile
        size="80"
      >
        
      </v-list-item-avatar>
    </v-list-item>

    <v-card-actions>
      <v-btn
        icon 
        @click="event.show = !event.show"
      >
        <v-icon>{{ event.show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
      <v-spacer></v-spacer>

      <v-btn icon v-bind:disabled="hasVoted" >       
        <v-icon>mdi-thumb-up {{event.eventrtng}}</v-icon>
      </v-btn>

      <v-btn icon v-bind:disabled="hasVoted" >       
        <v-icon>mdi-thumb-down</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-bookmark</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-share-variant</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div>
        <v-divider></v-divider>

        <v-card-text>
          Max. Teilnehmer: {{event.eventcp}} <br><br>
          {{event.eventabt}}
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card>
</v-flex>
</v-layout>
</div>
</template>

<script>
export default {
  data() {
    return {
      events: []
    }
  },

  beforeCreate() {
    fetch("../extremevent.php")
    .then(response => response.json())
    .then(data => {
      this.events = data
      console.log(data)
    })

  }
};
</script>
