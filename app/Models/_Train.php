<?php

// namespace App\Models;

class Postg
{
    private static $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhia Fahriyatul Wafa",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium excepturi sit dignissimos fuga, praesentium quis sed quibusdam ipsum minus aspernatur neque veniam numquam cumque autem maxime rerum perferendis quod tempora sapiente cupiditate facere maiores temporibus. Laudantium fugiat excepturi modi, amet, rem nemo natus ad doloribus commodi quae aliquam eligendi repellendus ab consectetur debitis ipsa minima minus? Natus omnis fugit, earum repellat et assumenda. Aspernatur adipisci totam ea ut consequuntur laudantium nostrum non unde quos, inventore perferendis architecto laborum reprehenderit rem.",
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dzafira Azfa",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt delectus sunt quos voluptate laboriosam labore in error nisi sed dolore. Doloremque culpa possimus, fugit commodi cum repellendus optio iste laudantium sit mollitia, pariatur consequuntur eligendi distinctio exercitationem minima, enim eveniet!",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
    // public static function find($slug)
    // {
    //     $posts = static::$blog_posts;
    //     $post = [];
    //     foreach($posts as $p) {
    //         if($p["slug"] === $slug) {
    //         $post = $p;
    //         }
    //     }
    //     return $post;
    // }

}
