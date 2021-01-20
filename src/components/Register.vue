<template>
  <form action="register" class="register">
    <table>
      <tr>
        <td>Vorname*:</td>
        <td><input type="text" placeholder="Vorname" name="prename" /></td>
      </tr>
      <br />
      <tr>
        <td>Nachname*:</td>
        <td><input type="text" placeholder="Nachname" name="lastname" /></td>
      </tr>
      <br />
      <tr>
        <td>E-Mail*:</td>
        <td><input type="text" placeholder="E-Mail" name="email" /></td>
      </tr>
      <br />
      <tr>
        <td>Passwort*:</td>
        <td><input type="password" placeholder="Passwort" name="psw" /></td>
      </tr>
      <br />
      <tr>
        <td>Passwort bestätigen*:</td>
        <td><input type="password" placeholder="Passwort" name="psw" /></td>
      </tr>
      <br />
    </table>

    <button type="submit">Registrieren</button>
  </form>
</template>

<script>
export default {};
</script>

<style>
td {
  text-align: left;
}
</style>
