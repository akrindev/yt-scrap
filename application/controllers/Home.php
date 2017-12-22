<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	private $key = 'YT-API-KEY';
	
	function __construct()
	{
		parent::__construct();
		
		//$this->_tarik();
	}
	
	public function index()
	{

		$this->output->set_template('rin_yellow');
		
		 $a = [
			'virgoun', 
			'linkin-park', 
			'ebiet-g-ade',
			'Nella-kharisma',
			'despacito',
			'avanged-sevenfold',
			'nightcore',
			'jkt48',
			'anime-sad-bgm',
		];

	    $qu = $a[rand(0, count($a)-1)];
        $qqu = $a[rand(0, count($a)-1)];
        
		$token = '';
		
		$curl = $this->grab('https://www.googleapis.com/youtube/v3/search?key='.$this->key.'&part=snippet&order=relevance&maxResults=15&q='.$qu.'&pageToken='.$token.'&type=video');
		
		$curll = $this->grab('https://www.googleapis.com/youtube/v3/search?key='.$this->key.'&part=snippet&order=relevance&maxResults=8&q='.$qqu.'&pageToken='.$token.'&type=video');
		
		$data['json'] = json_decode($curl);
		$data['jsonn'] = json_decode($curll);
		
		$this->output->set_title('Freedom music download | mp3.akrindev.me');

		$this->output->cache(120);
		$this->load->view('home',$data);

}

	function single($v,$title = 'save-me-senpai')
	{
		$this->output->set_template('rin_yellow');
	
		
		$curl = $this->grab('https://www.googleapis.com/youtube/v3/videos?key='.$this->key.'&part=snippet,contentDetails,statistics,topicDetails&id='.$v.'');
		
		$related = $this->grab('https://www.googleapis.com/youtube/v3/search?key='.$this->key.'&part=snippet&maxResults=10&relatedToVideoId='.$v.'&type=video');
		
		$a = $this->cokot('https://youtubemp3api.com/@grab?vidID='.$v.'&format=mp3&streams=mp3&api=button');
		
		$data['html'] = $this->simple_html_dom->load($a);
		$data['json'] = json_decode($curl);
		$data['related'] = json_decode($related);
		
		foreach($data['json']->items as $tp)
		{
			$wektu = str_replace('PT','',$tp->contentDetails->duration);
			$wektu = str_replace('H',':',$wektu);
			$wektu = str_replace('M',':',$wektu);
			$wektu = str_replace('S','',$wektu);
			
			$judul = $tp->snippet->title;
			
		}
		
		
		$this->output->set_title('Download ['.$wektu.'] '.$judul.' | mp3.akrindev.me');

		$this->output->cache(480);
		$this->load->view('single',$data);
	}
	
	function search()
	{
		$this->output->set_template('rin_yellow');
		
		 $a = [
			'virgoun', 
			'linkin park', 
			'ebiet g ade',
			'Nella kharisma',
			'despacito',
			'avanged sevenfold',
			'nightcore',
			'jkt48',
			'anime sad bgm',
		];

	    $qu = url_title($a[mt_rand(0, count($a) - 1)]);
		$q = $_GET['q'];
		
    	
    	if(!$q)
    	{
    		redirect('/');
    	}
    
		$token = '';
		
		$curl = $this->grab('https://www.googleapis.com/youtube/v3/search?key='.$this->key.'&part=snippet&order=relevance&maxResults=10&q='.$qu.'&pageToken='.$token.'&type=video');
		
		$cari = $this->grab('https://www.googleapis.com/youtube/v3/search?key='.$this->key.'&part=snippet&order=relevance&maxResults=15&q='.url_title($q).'&pageToken='.$token.'&type=video');
		
		$data['json'] = json_decode($curl);
		$data['cari'] = json_decode($cari);
		$data['q'] = $q;
		
		$this->output->set_title(''.$q.' download | mp3.akrindev.me');

		 $this->output->cache(1300);
		$this->load->view('cari',$data);
	}
	
	
	
function grab($url){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$uaa = 'Mozilla/5.0 (Linux; U; Android 4.2.2; en-US; Lenovo A369i Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.4.1.565 U3/0.8.0 Mobile Safari/534.30';
    curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");

    return curl_exec($ch);
}

function cokot($url){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$uaa = $_SERVER['HTTP_USER_AGENT'];
    curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");

curl_setopt($ch, CURLOPT_REFERER, ' https://youtubemp3api.com/');

    return curl_exec($ch);
}
function potong($date)
{
	$rin = str_replace('T',' ',$date);
	$rin = str_replace('.000Z','',$rin);
	return $rin;
}

}
