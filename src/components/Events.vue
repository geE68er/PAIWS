<template>
  <div>
    <img class="event-pic" src="https://www.messe-berlin.de/media/mb/mb_media/guest_events/wir_lieben_events02_XXXLMobile43.jpg">
    <div class="event-element" v-for="event in events" :key="event.ID">
      <table>
        <tr><b>{{ event.title }} </b></tr>
        <tr>
          <td> Datum: {{ prettyDate(event.date) }} </td>
        </tr>
        <tr>
          <td> {{ event.description }} </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<style>
  .event-element {
    padding: 1em;
  }
  .event-pic {
    width: 42%;
  }
</style>

<script>
export default {
  name: 'EventContainer',
  props: ['events'],
  data: () => ({
    dummyEvents: [
      {
        "ID" : 1,
        "title" : "Rudern",
        "description" : "Rudern macht Spaß!!!",
        "date": "Wed, 03 Feb 2021 14:00:00 GMT"
      },
      {
        "ID": 2,
        "title" : "Zumba",
        "description" : "Zumba ist total im Trend. le fin",
        "date": "Fri, 05 Feb 2021 12:00:00 GMT"
      }
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
