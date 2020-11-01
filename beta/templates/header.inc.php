        <?php if(!is_checked_in()): ?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="login.php" method="post">
			<table class="login" role="presentation">
				<tbody>
					<tr>
						<td>							
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
								<input class="form-control" placeholder="E-Mail" name="email" type="email" required>								
							</div>
						</td>
						<td><input class="form-control" placeholder="Passwort" name="passwort" type="password" value="" required></td>
            <td><button type="submit" class="btn btn-success">Login</button></td>
            <td><button href="register.html" >Registrieren</button></td>
					</tr>
					<tr>
						<td><label style="margin-bottom: 0px; font-weight: normal;"><input type="checkbox" name="angemeldet_bleiben" value="remember-me" title="Angemeldet bleiben"  checked="checked" style="margin: 0; vertical-align: middle;" /> <small>Angemeldet bleiben</small></label></td>
						<td><small><a href="passwortvergessen.php">Passwort vergessen</a></small></td>
						<td></td>
					</tr>					
				</tbody>
			</table>		
          
            
          </form>         
        </div><!--/.navbar-collapse -->
        <?php else: ?>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">     
         	<li><a href="internal.php">Interner Bereich</a></li>       
            <li><a href="settings.php">Einstellungen</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>   
        </div><!--/.navbar-collapse -->
        <?php endif; ?>
      </div>