<?php

/*
Plugin Name: ob-textonly-social-bookmarker
Plugin URI: http://www.oraclebrains.com/wordpress/plugin/ob_social_button
Description: Add social book mark text links at the bottom of each post: bookmarks options includes del.icio.us, reddit, slashdot it, digg, facebook, technorati, google, stumble, windows live, tailrank, bloglines, furl, netscape, yahoo, blinklist
Version: 2.0
Author: Rajender Singh
Author URI: http://www.oraclebrains.com/


Copyright 2007  Rajender Singh  (email : rajs@oraclebrains.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

function obtextonlysocialbookmarkerLinks()
{
	
	$link = urlencode(get_permalink());
	$title = urlencode(the_title('', '', false));

	$social_sites = array(
		'delicious' => array(
			'title' => 'Save to del.icio.us'
			, 'link' => 'http://del.icio.us/post?url='.$link.'&amp;title='.$title.''
			, 'img' => '"http://del.icio.us/favicon.ico" width="16" height="16" alt="del.icio.us"'
			, 'js' =>  ''
			, 'alt' =>  'del.icio.us'
		)
		,'reddit' => array(
			'title' => 'Save to Reddit'
			, 'link' => 'http://reddit.com/submit?url='.$link.'&amp;title='.$title.''
			, 'img' => '"http://reddit.com/favicon.ico" width="16" height="16" alt="Reddit"'
			, 'js' =>  ''
			, 'alt' =>  'Reddit'
		)
		,'slashdot' => array(
			'title' => 'Slashdot It!'
			, 'link' => 'http://slashdot.org/bookmark.pl?url='.$link.'&amp;title='.$title.''
			, 'img' => '"http://slashdot.org/favicon.ico" width="16" height="16" alt="Slashdot"'
			, 'js' =>  ''
			, 'alt' =>  'Slashdot'
		)
		,'digg' => array(
			'title' => 'Digg This Post!'
			, 'link' => 'http://digg.com/submit?phase=2&amp;url='.$link.'&amp;title='.$title.''
			, 'img' => '"http://digg.com/favicon.ico" width="16" height="16" alt="Digg"'
			, 'js' =>  ''
			, 'alt' =>  'Digg'
		)
		,'facebook' => array(
			'title' => 'Share on Facebook!'
			, 'link' => 'http://www.facebook.com/share.php?u='.$link.'"'
			, 'img' => '"http://www.facebook.com/favicon.ico" width="16" height="16" alt="Facebook"'
			, 'js' =>  ''
			, 'alt' =>  'Facebook'
		)
		,'technorati' => array(
			'title' => 'Add to my Technorati Favorites!'
			, 'link' => 'http://technorati.com/faves?add='.$link.''
			, 'img' => '"http://technorati.com/favicon.ico" width="16" height="16" alt="Technorati"'
			, 'js' =>  ''
			, 'alt' =>  'Technorati'
		)
		,'google' => array(
			'title' => 'Add to my Google Bookmarks!'
			, 'link' => 'http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk='.$link.'&amp;title='.$title.''
			, 'img' => '"http://www.google.com/favicon.ico" width="16" height="16" alt="Google"'
			, 'js' =>  ''
			, 'alt' =>  'Google'
		)
		,'stumbleupon' => array(
			'title' => 'Stumble it!'
			, 'link' => 'http://www.stumbleupon.com/submit?url='.$link.'&amp;title='.$title.''
			, 'img' => '"http://www.stumbleupon.com/favicon.ico" width="16" height="16" alt="StumbleUpon"'
			, 'js' =>  ''
			, 'alt' =>  'StumbleUpon'
		)

		,'windows_live' => array(
			'title' => 'Add to Windows Live!'
			, 'link' => 'https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&url='.$link.'&title='.$title.'&top=1'
			, 'img' => '"http://favorites.live.com/favicon.ico" width="16" height="16" alt="Windows Live"'
			, 'js' =>  ''
			, 'alt' =>  'Window Live'
		)
		,'tailrank' => array(
			'title' => 'Add to Tailrank!'
			, 'link' => 'http://tailrank.com/share/?link_href='.$link.'&title='.$title
			, 'img' => '"http://www.oraclebrains.com/download/obsocialbookmarker/images/tailrank.png" width="16" height="16" alt="Tailrank"'
			, 'js' =>  ''
			, 'alt' =>  'Tailrank'
		)

		,'furl' => array(
			'title' => 'Add to Furl'
			, 'link' => 'http://furl.net/storeIt.jsp?u='.$link.'&t='.$title
			, 'img' => '"http://furl.net/i/lil_furl_butt.gif" width="16" height="16" alt="Furl"'
			, 'js' =>  ''
			, 'alt' =>  'Furl'
		)

		,'netscape' => array(
			'title' => 'Add to Netscape'
			, 'link' => ' http://www.netscape.com/submit/?U='.$link.'&T='.$title
			, 'img' => '"http://www.netscape.com/favicon.ico" width="16" height="16" alt="Netscape"'
			, 'js' =>  ''
			, 'alt' =>  'Netscape'
		)
		,'yahoo' => array(
			'title' => 'Add to Yahoo!'
			, 'link' => 'http://myweb2.search.yahoo.com/myresults/bookmarklet?u='.$link.'&t='.$title
			, 'img' => '"http://myweb2.search.yahoo.com/favicon.ico" width="16" height="16" alt="Yahoo"'
			, 'js' =>  ''
			, 'alt' =>  'Yahoo'
		)
		,'blinklist' => array(
			'title' => 'Add to BlinkList!'
			, 'link' => 'http://blinklist.com/index.php?Action=Blink/addblink.php&Url='.$link.'&Title='.$title
			, 'img' => '"http://blinklist.com/favicon.ico" width="16" height="16" alt="BlinkList"'
			, 'js' =>  ''
			, 'alt' =>  'BlinkList'
		)

	);
	$bookmarker = array();
	foreach ($social_sites as $key => $data) {
		$bookmarker[$key] = '<a href="'.$data['link'].'" target="_blank"'.' title="'.$data['title'].'"'.'> '.$data['alt'].'</a>';
	}

	return '<b>Book Mark it-></b><span>'
		. implode(" | ", $bookmarker)
		. "</span>";
}

function obtextonlysocialbookmarker($content)
{
	return "$content\n".obtextonlysocialbookmarkerLinks();
}

if (function_exists('add_action')) {
	add_action('the_content', 'obtextonlysocialbookmarker');
}

?>
