<template>
  <b-row>
    <b-col cols="12">
      <h2>
        Veranstaltung bearbeiten
      </h2>
      <b-jumbotron>
        <template slot="header">
          {{event.title}}
        </template>
        <template slot="lead">
          Kategorie: {{event.category}}<br>
          Beschreibung: {{event.description}}<br>
          Datum: {{event.date}}<br>
          Teilnehmerzahl: {{event.participants}}<br>
          Ersteller: {{event.author}}<br>
        </template>
        <hr class="my-4">
        <b-btn class="edit-btn" variant="success" @click.stop="editevent(key)">Ändern</b-btn>
        <b-btn variant="danger" @click.stop="deleteevent(key)">Löschen</b-btn>
      </b-jumbotron>
    </b-col>
  </b-row>
</template>

<script>

import firebase from '../Firebase'
import router from '../router'

export default {
  name: 'ShowEvent',
  data () {
    return {
      key: '',
      event: {}
    }
  },
  created () {
    const ref = firebase.firestore().collection('events').doc(this.$route.params.id);
    ref.get().then((doc) => {
      if (doc.exists) {
        this.key = doc.id;
        this.event = doc.data();
      } else {
        alert("No such document!");
      }
    });
  },
  methods: {
    editevent (id) {
      router.push({
        name: 'EditEvent',
        params: { id: id }
      })
    },
    deleteevent (id) {
      firebase.firestore().collection('events').doc(id).delete().then(() => {
        router.push({
          name: 'Events'
        })
      }).catch((error) => {
        alert("Error removing document: ", error);
      });
    }
  }
}
</script>

<style>
  .jumbotron {
    padding: 2rem;
  }
  .edit-btn {
    margin-right: 20px;
    width: 70px;
  }
</style>
