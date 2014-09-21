<?php

class Rating extends Eloquent {

	public static function getRating($type, $id)
	{
		$rating     = 0;
		$ratings    = Rating::where('item_id', $id)->where('item_type', $type)->get();
		$numRatings = sizeof($ratings);

		if ($numRatings) {
			for ($i = 0; $i < $numRatings; $i++) {
				$rating += $ratings[$i]['rating'];
			}

			$rating = $rating / $numRatings;
		}

		return array('rating' => $rating, 'numRatings' => $numRatings);
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

}
