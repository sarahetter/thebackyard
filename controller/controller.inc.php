<?php
/**
 * Created by PhpStorm.
 * User: sarahetter
 * Date: 15-08-17
 * Time: 9:16 PM
 */

class Controller {

	public function pageWithSections() {
		$result = '';

		global $post;
		$id         = $post->ID;

		if (have_rows('page_section', $id)) {
			while (have_rows('page_section',$id)) {
				the_row();

				$image          = get_sub_field('image',$id);
				$rightContent   = get_sub_field('right_content',$id);
				$email          = get_sub_field('email',$id);
				$facebook       = get_sub_field('facebook_url',$id);
				$twitter        = get_sub_field('twitter_url',$id);
				$instagram      = get_sub_field('intagram_url',$id);
				$logo           = get_sub_field('logo',$id);

				$imageMarkup = '';
				if ($image) {
					$imageMarkup = "<img src='{$image["sizes"]["tall-images"]}' alt='{$image["alt"]}' class='side-image'>";
				}
				$emailMarkup = '';
				if ($email) {
					$emailMarkup = "<li><a href='mailto:{$email}' class='email'></a></li>";
				}
				$facebookMarkup = '';
				if ($facebook) {
					$facebookMarkup = "<li><a href='{$facebook}' class='facebook' target='_blank'></a></li>";
				}
				$twitterMarkup = '';
				if ($twitter) {
					$twitterMarkup = "<li><a href='{$twitter}' class='twitter' target='_blank'></a></li>";
				}
				$instagramMarkup = '';
				if ($instagram) {
					$instagramMarkup = "<li><a href='{$instagram}' class='instagram' target='_blank'></a></li>";
				}
				$logoMarkup = '';
				if ($logo) {
					$logoMarkup = "<img src='{$logo["url"]}' alt='{$logo["alt"]}'>";
				}

				$result .= "
					{$imageMarkup}
					<div class='side-content'>
						{$logoMarkup}
						{$rightContent}
						<ul class='contact-points'>
						{$emailMarkup}
						{$facebookMarkup}
						{$twitterMarkup}
						{$instagramMarkup}
						</ul>
					</div>
				";
			}
		}



		return $result;
	}

	public function galleryPage() {
		$result = '';

		global $post;
		$id         = $post->ID;

		$images = get_field('images');

		if ($images) {
			foreach ($images as $image) {
				$url = $image['url'];
				$result .= "<div class='slide' style='background-image: url({$url})'></div>";
			}
		}

		return $result;
	}
}