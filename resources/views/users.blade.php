<h1>Login</h1>
<from action="users" method="POST">
@csrf
<input type="text" name="username" placeholder="enter" /><br><br>
<input type="password" name="userpassword" placeholder="enter password" /><br><br>
<button type="submit" >Login</button>
</form>