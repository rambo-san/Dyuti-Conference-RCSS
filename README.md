1. 	cp .env.example .env

	composer install
2. 	To Set DB Credentials, Mail Credentials
		php artisan set:credentials

        php artisan key:generate

3. 	To create Database
		php artisan migrate --seed

4. 	To add permission table data
		php artisan db:seed --class=PermissionsSeeder    	
	
5. 	php artisan storage:link

6. 	Command to Reset Password
		php artisan reset:password username password
	
		Replace username with your username
		Replace password with your new password
		
. 	Command to Clear Cache
		php artisan clear:all