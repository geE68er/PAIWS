<template>
  <v-content>
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title>Anmelden</v-card-title>
        <v-card-text>
          <v-text-field label="E-Mail" prepend-icon="mdi-email-multiple"/>
          <v-text-field 
          label="Passwort" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"/>
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="info"><router-link to="" tag="span">Anmelden</router-link></v-btn>
          <v-spacer></v-spacer>
          <v-btn color="red"><router-link to="/register" tag="span">Registrieren</router-link></v-btn>
        </v-card-actions>
      </v-card>
    </v-content>
</template>

<script>
export default {
  methods: {
					allRecords: function(){
						axios.post('ajaxUser.php', {
						    request: 1
						})
						.then(function (response) {
							app.users = response.data;
						})
						.catch(function (error) {
						    console.log(error);
						});
						
					},
					addRecord: function(){

						if(this.username != '' && this.name != '' && this.email != ''){
							axios.post('ajaxUser.php', {
							    request: 2,
							    username: this.username,
							    name: this.name,
							    email: this.email
							})
							.then(function (response) {

								// Fetch records
							    app.allRecords();

							    // Empty values
							    app.username = '';
							    app.name = '';
							    app.email = '';

							    alert(response.data);
							})
							.catch(function (error) {
							    console.log(error);
							});
						}else{
							alert('Fill all fields.');
						}
									
					},
					updateRecord: function(index,id){

						// Read value from Textbox
						var name = this.users[index].name;
						var email = this.users[index].email;

						if(name !='' && email !=''){
							axios.post('ajaxUser.php', {
							    request: 3,
							    id: id,
							    name: name,
							    email: email
							})
							.then(function (response) {
								alert(response.data);
							})
							.catch(function (error) {
							    console.log(error);
							});
						}
					},
					deleteRecord: function(index,id){
						
						axios.post('ajaxUser.php', {
						    request: 4,
						    id: id
						})
						.then(function (response) {

							// Remove index from users
						    app.users.splice(index, 1);
						    alert(response.data);
						})
						.catch(function (error) {
						    console.log(error);
						});
						  
					},
  data()
  {
    return{
      showPassword:false
    }
  }
}}
</script>
