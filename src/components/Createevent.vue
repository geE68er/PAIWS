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
            <b-form-input id="title" v-model.trim="board.title"></b-form-input>
          </b-form-group>
          <b-form-group id="categoryGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Kategorie einfügen">
            <b-form-input id="category" v-model.trim="board.category"></b-form-input>
          </b-form-group>
          <b-form-group id="descGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Beschreibung einfügen">
              <b-form-textarea id="description"
                         v-model="board.description"
                         :rows="2"
                         :max-rows="6">{{board.description}}</b-form-textarea>
          </b-form-group>
          <b-form-group id="authorGroup"
                    horizontal
                    :label-cols="4"
                    breakpoint="md"
                    label="Name des Erstellers">
            <b-form-input id="author" v-model.trim="board.author"></b-form-input>
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
  name: 'Createevent',
  data () {
    return {
      ref: firebase.firestore().collection('boards'),
      board: {}
    }
  },
  methods: {
    onSubmit (evt) {
      evt.preventDefault()

      this.ref.add(this.board).then(() => {
        this.board.title = ''
        this.board.category = ''
        this.board.description = ''
        this.board.author = ''
        router.push({
          name: 'Events'
        })
      })
      .catch((error) => {
        alert("Error adding document: ", error);
      });
    }
  }
}
</script>

<style>
  .jumbotron {
    padding: 2rem;
  }
</style>