							<?php
								$login_cookie = $_COOKIE['login'];
								if(isset($login_cookie))
								{
									echo"Bem-Vindo, $login_cookie <br>";
									
									echo"Essas informa��es <font color='red'>PODEM</font> ser acessadas por voc�";
								}
								else
								{
									echo"Bem-Vindo, convidado <br>";
									
									echo"Essas informa��es <font color='red'>N�O PODEM</font> ser acessadas por voc�";
									
									echo"<br><a href='login.html'>Fa�a Login</a> Para ler o conte�do";
								}
							?>