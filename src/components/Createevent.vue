<template>
  <form action="../event_insert.php" method="post" id="form">
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
        <td><input type="submit" value="Erstellen" /></td>
        <td></td>
      </tr>
    </table>
  </form>
</template>

<script>
export default {
  
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