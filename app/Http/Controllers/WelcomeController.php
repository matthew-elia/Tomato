<?php namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

use DB;
use App\Movie as Movie;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		DB::table('movies')->truncate();
		$data;
		$subData;
		$rt_id = [];

		$client = new Client();
		$crawler = new Crawler();

		$nodeValues = [];
		$subNodeValues = [];

			$crawler = $client->request('GET', 'https://www.rottentomatoes.com/');
			
				$nodeValues = $crawler->filter('#Top-Box-Office > tr')->each(function ($node, $i) {

						if($i <=4){

							$data = $node->html();
							$rt_id[$i] = $node->attr('data-movie-id');
							
							$subClient = new Client();
							$subCrawler = new Crawler();
							
							$subCrawler = $subClient->request('GET', 'https://www.rottentomatoes.com/m/'.$rt_id[$i].'');

							$subNodeValues = $subCrawler->each(function ($subNode, $j) {
									$subData = $subNode->filter('#jsonLdSchema')->text();
									$subData = json_decode($subData);
									$rating = $subData->aggregateRating->ratingValue;
									$imgNode = $subNode->filter('#poster_link')->html();
									
									DB::insert('insert into movies (title,description,rating,poster_img_url,page_url) values (?,?,?,?,?)',[$subData->name, $subData->description, floatval($rating/100), trim($imgNode), $subData->url]);
							});

						}


					});

			$movies = Movie::all();
			// dd($movies);
			return view('welcome')->with('movies', $movies);

		}

	}