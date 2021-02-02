<template>
  <v-content>
      <v-card max-width="700" max-height="1000" class="mx-auto mt-9">
        <v-card-title>Event erstellen</v-card-title>
        <v-card-text>
          <v-text-field required name="eventname" placeholder="Eventname" prepend-icon="mdi-account-circle"/>
          <v-text-field required name="place" placeholder="Ort" prepend-icon="mdi-map-marker"/>
          <v-text-field required name="description" placeholder="Beschreibung" prepend-icon="mdi-lead-pencil"/>
          <v-datetime-picker required name="time" v-model="formattedDatetime" date-format="dd.MM.yyyy" label="Datum und Uhrzeit">
                  <template slot="dateIcon">
                    <v-icon>mdi-calendar</v-icon>
                  </template>
                  <template slot="timeIcon">
                    <v-icon>mdi-clock-outline</v-icon>
                  </template>
                </v-datetime-picker>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <button class="submit" v-on:click="addEvent()"><router-link to="" tag="span">Erstellen</router-link></button>
        </v-card-actions>
      </v-card>
    </v-content>
</template>

<script>
export default {
  methods: {
    addEvent:function(){
      let e_name = document.getElementsByName("eventname")[0].value;
      alert(e_name);
    }
  }
}
</script>

<style>
  .submit {
    background-color: red;
  }
</style>