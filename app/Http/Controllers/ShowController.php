<?php

namespace App\Http\Controllers;

use PHPHtmlParser\Dom;

class ShowController extends Controller
{
    public function index($id)
    {

    	$dom = new Dom;
		$dom->loadFromUrl('http://overcast.fm/itunes' . $id);
		
		$objects = $dom->find('.extendedepisodecell');

		$eps = [];

		foreach ($objects as $episode) {
			$eps[] = [
				'slug' => $episode->getTag()->getAttribute('href')['value'],
				'title' => $episode->find('.title')[0]->text
			];
		}

		return collect($eps);
    }
}
