<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  $table->string("title");
            $table->text("description");
            $table->string("thumb");
            $table->float("price");
            $table->string("series",50);
            $table->string("sale_date",10);
            $table->string("type",50);*/

        $comics = config("comicBooks");

        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $newComic->save();
        }
    }
}
