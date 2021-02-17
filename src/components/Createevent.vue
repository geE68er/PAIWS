<template>
  <b-row>
    <b-col cols="12">
      <h2>
        Event hinzufügen
      </h2>
      <b-jumbotron>
        <b-form @submit="onSubmit">
          <b-form-group id="titleGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Titel einfügen">
            <b-form-input id="title" v-model.trim="event.title"></b-form-input>
          </b-form-group>
          <b-form-group id="categoryGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Kategorie einfügen">
            <b-form-input id="category" v-model.trim="event.category"></b-form-input>
          </b-form-group>
          <b-form-group id="descGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Beschreibung einfügen">
              <b-form-textarea id="description"
                         v-model="event.description"
                         :rows="2"
                         :max-rows="6">{{event.description}}</b-form-textarea>
          </b-form-group>
          <b-form-group id="dateGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Datum einfügen">
            <v-date-picker v-model="date"></v-date-picker>
          </b-form-group>
          <b-form-group id="participantsGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Teilnehmerzahl einfügen">
              <b-form-input id="category" v-model.trim="event.participants"></b-form-input>
          </b-form-group>
          <b-form-group id="authorGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Name des Erstellers">
            <b-form-input id="author" v-model.trim="event.author"></b-form-input>
          </b-form-group>
          <b-button type="submit" variant="primary">Speichern</b-button>
        </b-form>
      </b-jumbotron>
    </b-col>
  </b-row>
</template>

<script>

import firebase from '../Firebase'
import router from '../router'

export default {
  name: 'CreateEvent',
  data () {
    return {
      ref: firebase.firestore().collection('events'),
      date: new Date().toISOString().substr(0, 10),
      event: {},
    }
  },
  watch: {
    date: function onDateChanged(val, oldVal) {
      if (val == oldVal) return
      this.event.date = this.formatDate(val)
    }
  },
  methods: {
    onSubmit (evt) {
      evt.preventDefault()

      this.ref.add(this.event).then(() => {
        this.event.title = ''
        this.event.category = ''
        this.event.description = ''
        this.event.date = ''
        this.event.participants = ''
        this.event.author = ''
        router.push({
          name: 'Events'
        })
      })
      .catch((error) => {
        alert("Error adding document: ", error);
      });
    },

    formatDate (date) {
      if (!date) return null
      const [year, month, day] = date.split('-')
      return `${day}.${month}.${year}`
    }
  }
}
</script>

<style>
  .jumbotron {
    padding: 2rem;
  }
</style>
