<template>
  <form action="../event_insert.php" method="post" id="form" @submit="validateForm()">
    <table>
      <tr>
        <td><v-icon>mdi-account</v-icon></td>
        <td><input type="text" name="ename" placeholder="Eventname"></td>
      </tr>
      <tr>
        <td><v-icon>mdi-map-marker</v-icon></td>
        <td><input type="text" name="loc" placeholder="Ort"></td>
      </tr>
      <tr>
        <td><v-icon>mdi-lead-pencil</v-icon></td>
        <td><input type="text" name="des" placeholder="Beschreibung"></td>
      </tr>
      <tr>
        <td><v-icon>mdi-account-multiple</v-icon></td>
        <td><input type="text" name="memberC" placeholder="Max. Teilnehmer"></td>
      </tr>
      <tr>
        <td><input type="submit" value="Erstellen"/></td>
        <td></td>
      </tr>
    </table>
  </form>
</template>

<script>
export default {
  methods: {
    validateForm:function() {
      //create an empty string for the possible error message
    let errorMessage = '';

    //checks if "vorname" is empty
    let ename = document.getElementsByName("ename")[0].value;

    if (ename == '') {
        errorMessage += 'Eventname fehlt. \n';
    }

    //checks if "name" is empty
    let loc = document.getElementsByName("loc")[0].value;

    if (loc == '') {
        errorMessage += 'Ort fehlt. \n';
    }
    
    //checks if "email" is empty
    let des = document.getElementsByName("des")[0].value;
    
    if (des == ''){
        errorMessage += 'Beschreibung fehlt. \n';
    }

    //checks if "kurs" is empty
    let memberC = document.getElementsByName("memberC")[0].value;

    if (memberC == 0) {
        errorMessage += 'Max. Teilnehmer fehlt. \n';
    }

    //if the error message is not empty, show error message and return false to stop the validation
    if (errorMessage !== '') {
        alert('Folgende Fehler sind aufgetreten: \n' + errorMessage);
        return false;
    }
    //if the error message is empty, show which data is transmitted and finish validation
    else {
        return true;
    }
  }
}
}
</script>

<style>
  input[type="submit"] {
    color: white;
    background-color: red;
    font-family: "Roboto", sans-serif;
    padding: 5px 20px 5px 20px;
  }
</style>