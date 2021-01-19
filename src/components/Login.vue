<template>
    <form action="login" class="login">
        <table>
            <tr><td>E-Mail*: </td><td><input type="text" placeholder="E-Mail" name="email"></td></tr><br>
            <tr><td>Passwort*: </td><td><input type="text" placeholder="Passwort" name="psw"></td></tr><br>
        </table>
        <button type="submit">Login</button>
    </form>
</template>

<script>
export default {
  
}
</script>

<style>
    td {
        text-align: left;
    }
</style>