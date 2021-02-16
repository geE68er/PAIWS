<template>
  <b-row>
    <b-col cols="12">
      <h2>
        Events
        <b-link v-if="$auth.isAuthenticated" href="#/createevent">(Event hinzufügen)</b-link>
      </h2>
      <b-table striped hover :items="events" :fields="fields">
        <template v-slot:cell(actions)="data">
          <b-button v-if="$auth.isAuthenticated" @click.stop="details(data.item)" variant="primary">Details</b-button>
        </template>
      </b-table>
    </b-col>
  </b-row>
</template>

<script>

import firebase from '../Firebase'
import router from '../router'

export default {
  name: 'Events',
  data () {
    return {
      fields: [
        { key: 'title', label: 'Titel', sortable: true, 'class': 'text-left' },
        { key: 'category', label: 'Kategorie', sortable: true, 'class': 'text-left' },
        { key: 'actions', label: 'Action', 'class': 'text-center' }
      ],
      events: [],
      errors: [],
      ref: firebase.firestore().collection('events'),
    }
  },
  created () {
    this.ref.onSnapshot((querySnapshot) => {
      this.events = [];
      querySnapshot.forEach((doc) => {
        this.events.push({
          key: doc.id,
          title: doc.data().title,
          category: doc.data().category
        });
      });
    });
  },
  methods: {
    details (event) {
      router.push({ name: 'ShowEvent', params: { id: event.key }})
    }
  }
}
</script>

<style>
  .table {
    width: 96%;
    margin: 0 auto;
  }
</style>