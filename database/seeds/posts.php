<?php

use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Defining Models',
            'body' => 'To get started, let\'s create an Eloquent model. Models typically live in the app directory, but you are free to place them anywhere that can be auto-loaded according to your composer.json file. All Eloquent models extend Illuminate\Database\Eloquent\Model class.

The easiest way to create a model instance is using the make:model Artisan command:

php artisan make:model User
If you would like to generate a database migration when you generate the model, you may use the  --migration or -m option:

php artisan make:model User --migration

php artisan make:model User -m

',
            'slug' => str_slug('Defining Models', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Eloquent Model Conventions',
            'body' => 'Now, let\'s look at an example Flight model, which we will use to retrieve and store information from our  flights database table:

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
}
',
            'slug' => str_slug('Eloquent Model Conventions', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Table Names',
            'body' => 'Note that we did not tell Eloquent which table to use for our Flight model. By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the Flight model stores records in the flights table. You may specify a custom table by defining a table property on your model:

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = \'my_flights\';
}
',
            'slug' => str_slug('Table Names', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Primary Keys',
            'body' => 'Eloquent will also assume that each table has a primary key column named id. You may define a  $primaryKey property to override this convention.

In addition, Eloquent assumes that the primary key is an incrementing integer value, which means that by default the primary key will be cast to an int automatically. If you wish to use a non-incrementing or a non-numeric primary key you must set the public $incrementing property on your model to false.

',
            'slug' => str_slug('Primary Keys', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Timestamps',
            'body' => 'By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the $timestamps property on your model to  false:

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
If you need to customize the format of your timestamps, set the $dateFormat property on your model. This property determines how date attributes are stored in the database, as well as their format when the model is serialized to an array or JSON:

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The storage format of the model\'s date columns.
     *
     * @var string
     */
    protected $dateFormat = \'U\';
}
',
            'slug' => str_slug('Timestamps', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Database Connection',
            'body' => 'By default, all Eloquent models will use the default database connection configured for your application. If you would like to specify a different connection for the model, use the $connection property:

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = \'connection-name\';
}

',
            'slug' => str_slug('Database Connection', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Retrieving Models',
            'body' => 'Once you have created a model and its associated database table, you are ready to start retrieving data from your database. Think of each Eloquent model as a powerful query builder allowing you to fluently query the database table associated with the model. For example:

<?php

use App\Flight;

$flights = App\Flight::all();

foreach ($flights as $flight) {
    echo $flight->name;
}
',
            'slug' => str_slug('Retrieving Models', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Adding Additional Constraints',
            'body' => 'The Eloquent all method will return all of the results in the model\'s table. Since each Eloquent model serves as a query builder, you may also add constraints to queries, and then use the get method to retrieve the results:

$flights = App\Flight::where(\'active\', 1)
               ->orderBy(\'name\', \'desc\')
               ->take(10)
               ->get();
Since Eloquent models are query builders, you should review all of the methods available on the query builder. You may use any of these methods in your Eloquent queries.

',
            'slug' => str_slug('Adding Additional Constraints', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'title' => 'Collections',
            'body' => 'For Eloquent methods like all and get which retrieve multiple results, an instance of  Illuminate\Database\Eloquent\Collection will be returned. The Collection class provides a variety of helpful methods for working with your Eloquent results:

$flights = $flights->reject(function ($flight) {
    return $flight->cancelled;
});
Of course, you may also simply loop over the collection like an array:

foreach ($flights as $flight) {
    echo $flight->name;
}

',
            'slug' => str_slug('Collections', '-'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
