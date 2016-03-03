
						-------------Удаляем index.php
						
	1) Изменим файл /config/web.php следующим образом:
	
	'components' => [
	//...
	  'urlManager' => [
			  'showScriptName' => false,
			  'enablePrettyUrl' => true
					  ],    
	//...
	'request' => [
	
	2)и создаем .htaccess c таким содержание 
	
	RewriteEngine on
 
	# If a directory or a file exists, use it directly
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	# Otherwise forward it to index.php
	RewriteRule . index.php