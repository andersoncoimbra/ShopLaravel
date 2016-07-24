<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://2.bp.blogspot.com/_jT2FZTUm0is/TLO70Eg5u0I/AAAAAAAAAKk/uwI9DGduZTI/s1600/COMO_T~1.JPG',
            'title' => 'Como Treinar seu Dragão',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.georgerrmartin.com/wp-content/uploads/2012/08/feastforcrows.jpg',
            'title' => 'Game of Thrones',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter Camara secreta',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://scienceblogs.com.br/socialmente/files/2012/01/a-origem-inception1.jpg',
            'title' => 'a Origem',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://images1.folha.com.br/livraria/images/9/7/1147744-250x250.png',
            'title' => 'Um Sonho de Liberdade',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://blogdoheu.files.wordpress.com/2012/07/batman-o-cavaleiro-das-trevas-ressurge.jpg',
            'title' => 'Batman o Cavalheiro das Trevas',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://4.bp.blogspot.com/-a5vuvuTUvQ4/US9zt9Ob5KI/AAAAAAAAEUg/SKUPyVoa-bY/s1600/A+Espera+de+um+Milagre.jpg',
            'title' => 'A espera de um milagre',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://toutelaculture.com/wp-content/uploads/2008/12/prison-break.jpg',
            'title' => 'Prision Breack',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://2.bp.blogspot.com/_2-Jw9Sl1rwE/TITySh0xkBI/AAAAAAAAAbE/AqIxNePLWWk/s1600/gladiador%5B1%5D.jpg',
            'title' => 'Gladiador',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://2.bp.blogspot.com/-5ipecEAokdc/T9JMM9kjnfI/AAAAAAAAIDQ/eUAr94Sj8KA/s1600/projetox.jpg',
            'title' => 'Projeto X',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'http://1.bp.blogspot.com/-9pws5rtMJ6A/UaJ7bCNVCjI/AAAAAAAACTQ/rA1x5EL39m8/s1600/ilha.jpg',
            'title' => 'A Ilha',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://perlbal.hi-pi.com/blog-images/518696/gd/1259614035/Capa-de-Filme-EFEITO-BORBOLETA.jpg',
            'title' => 'Efeito Borbuleta',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.watchmencomicmovie.com/posters/watchmen-theatrical-poster-big.jpg',
            'title' => 'Watchmen',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://image.tmdb.org/t/p/w396/is8hc5rJJVvcGmSeztqM1BCefBA.jpg',
            'title' => 'Star Trek - Além da escuridão',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'https://www.anica.com.br/files/2013/01/django-livre-cartaz-nacional.jpg',
            'title' => 'Django Livre',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'http://www.clickgratis.com.br/_upload/movies/2013/03/29/dentro-da-casa.jpg',
            'title' => 'Dentro de Casa',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();




        $product = new \App\Product([
            'imagePath' => 'http://2001video.empresarial.ws/blog/wp-content/uploads/2013/06/002.jpg',
            'title' => 'As vantagens de ser Invisivel',
            'description' => 'Super cool - at test as a child',
            'price' => 10
        ]);
        $product->save();

    }
}
