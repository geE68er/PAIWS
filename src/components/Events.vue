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
  
<v-flex v-for="event in events" :key="event.ID">
  <v-card
    class="mx-auto"
    width="500"
    outlined
    elevation="5"
  >
    <v-list-item three-line>
      <v-list-item-content>
        <div class="overline mb-4">
          {{event.category}}
        </div>
        <v-list-item-title class="headline mb-1">
         {{event.title}}
        </v-list-item-title>
        <v-list-item-subtitle>{{event.description}}</v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        tile
        size="80"
      >
        <v-img
        :src=event.picture
        ></v-img>
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

      <v-btn icon>
        <v-icon>mdi-thumb-up</v-icon>
      </v-btn>

      <v-btn icon>
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
      <div v-show="event.show">
        <v-divider></v-divider>

        <v-card-text>
          {{prettyDate(event.date)}}
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
  name: 'EventContainer',
  props: ['events'],
  data: () => ({
    dummyEvents: [
      {
        "ID" : 1,
        "category": "Sport",
        "title" : "Rudern",
        "description" : "Rudern macht Spaß!!!",
        "date": "Wed, 03 Feb 2021 14:00:00 GMT",
        "picture": "https://media0.faz.net/ppmedia/aktuell/sport/3604811189/1.6876982/default-retina/einsamer-einer-ruderer-oliver.jpg",
        show: false
      },
      {
        "ID": 2,
        "category": "Sport",
        "title" : "Zumba",
        "description" : "Zumba ist total im Trend. le fin",
        "date": "Fri, 05 Feb 2021 12:00:00 GMT",
        "picture": "https://www.zumba.com/img/blt/about/about-video-xsmall.jpg",
        show: false
      },
      {
        "ID" : 3,
        "category": "Spiel und Spaß",
        "title" : "Monopoly Spieleabend",
        "description" : "Bringt die vollen Geldbörsen mit!",
        "date": "Fri, 12 Feb 2021 20:00:00 GMT",
        "picture": "https://images-na.ssl-images-amazon.com/images/I/41U5-lzc33L._AC_SX466_.jpg",
        show: false
      },
      {
        "ID" : 4,
        "category": "Essen und Trinken",
        "title" : "Asiatisches Kochen",
        "description" : "Wir machen Sushi",
        "date": "Fri, 19 Feb 2021 20:00:00 GMT",
        "picture": "https://static.zentrum-der-gesundheit.de/img/0baedee5b5ff8a545a5ebe089ce4a7a9",
        show: false
      },
      {
        "ID" : 5,
        "category": "Essen und Trinken",
        "title" : "Asiatisches Kochen",
        "description" : "Wir machen Sushi",
        "date": "Fri, 19 Feb 2021 20:00:00 GMT",
        "picture": "https://static.zentrum-der-gesundheit.de/img/0baedee5b5ff8a545a5ebe089ce4a7a9",
        show: false
      },
      {
        "ID" : 6,
        "category": "Essen und Trinken",
        "title" : "Asiatisches Kochen",
        "description" : "Wir machen Sushi",
        "date": "Fri, 19 Feb 2021 20:00:00 GMT",
        "picture": "https://static.zentrum-der-gesundheit.de/img/0baedee5b5ff8a545a5ebe089ce4a7a9",
        show: false
      },
    ],
    monthNames: ["Januar", "Februar", "März", "April", "Mai", "Juni",
     "Juli", "August", "September", "Oktober", "November", "Dezember"
    ]
  }),
  mounted () {
    this.events = this.dummyEvents
  },
  methods: {
    prettyDate(dateUTC) {
      let date = new Date(dateUTC)
      let result = this.twoDigit(date.getDate()) + ". " + this.monthNames[date.getMonth()] + " " + date.getFullYear()
      result += " " + this.twoDigit(date.getHours()) + ":" + this.twoDigit(date.getMinutes()) + " Uhr"
      return result
    },
    
    twoDigit(num) {
      let result = num < 10 ? "0" : ""
      return result + num
    }
  }
};
</script>
