<template>
  <v-container class="grey lighten-5">
    <v-row no-gutters>
      <v-col
        cols="4"
        sm="9"
        md="2"
      
      >
        <v-card
          class="pa-0"
          outlined
          tile
  
        >
          <v-img
      src="https://randomuser.me/api/portraits/women/39.jpg"
      
      dark
      
    >
      <v-row>
        <v-card-title>
          
          <v-spacer></v-spacer>

          <v-btn
            dark
            icon
            class="mr-4"
          
          >
            <v-icon>mdi-image</v-icon>
          </v-btn>

        </v-card-title>

        <v-spacer></v-spacer>

        <v-card-title>
          <div>
            Marina Vladimirova Putin
          </div>
        </v-card-title>
      </v-row>
    </v-img>

        </v-card>
      </v-col>
      <v-col
        cols="2"
        md="10"
      >
      
        <v-card
          class="fill-height"
          outlined
          tile
        >
          <v-list dense>
            <v-subheader>MEINE VERANSTALTUNGEN</v-subheader>
              <v-list-item-group
                v-model="selectedItem"
                color="primary"
              >
              <v-list-item
                  v-for="(item, i) in items"
                  :key="i"
                >
                  <v-list-item-content>
                    <v-list-item-title v-text="item.text"></v-list-item-title>
                  </v-list-item-content>

                  <v-list-item-content>
                    <v-list-item-title v-text="item.date"></v-list-item-title>
                  </v-list-item-content>

                  <v-list-item-content>
                    <v-list-item-title>
                      <v-btn><v-icon dark red rounded>mdi-delete</v-icon></v-btn>
                    </v-list-item-title>
                  </v-list-item-content> 


                </v-list-item>
              </v-list-item-group>
            </v-list>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
  export default {
    data: () => {
      return {
        user: [],
        selectedItem: 1,
        items: [
          { text: 'Fussball Turnier', date: '24.01.2021' },
          { text: 'Lerngruppe', date: '26.01.2021' },
          { text: 'Schachklub', date: '29.01.2021'},
        ],
      }
    },

    beforeCreate() {
      fetch("../extremuser.php")
      .then(response => response.json())
      .then(data => {
        this.user = data
        console.log(data)
      })

  }
  }
</script>