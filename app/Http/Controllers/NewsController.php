<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Traits\NewsTrait; // Import the NewsTrait

class NewsController extends Controller
{
    use NewsTrait; // Use the NewsTrait in this controller

    public function index()
    {
        // Call the trait's listIndex method to fetch news list
        $newsList = $this->listIndex(10); // Pass the desired total to display
        return $newsList; //view('news', ['newsList' => $newsList]);
    }

    public function show($id)
    {
        // Call the trait's show method to display a single news item
        $news = $this->showNews($id); // Pass the ID of the news item to display
        return $news; //view('news_item', ['news' => $news]);
    }
}
