
1.To install the package, run " composer require iox/locationist "

2.To get lattitude and logitude use "Location::get_latt_long()" in your controller;

3."get_latt_long()" method returns users lattitude and longitude.

4.to find users into map using those lattitude and longitude use "Location::get_location()".This method takes lattitude and longitude as parameter.And returns a url of google map with desired location.

5.type "use Iox\Locationist\Location" to import the class in your desire controller.


###additional ###

if laravel can't find the class then add "Iox\Locationist\LocationServiceProvider" into "provider" array in "config/app.php" directory .
