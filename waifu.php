<?php
$host = (isset($_SERVER['HTTPS']) ? "https":"https") . "://$_SERVER[HTTP_HOST]";
define('PATH_IMG', $host.'/api/waifu/pict/');
define('BASE_URL', $host.$_SERVER['REQUEST_URI']);

if(isset($_REQUEST['nama'])) {
	$nama = $_REQUEST['nama'];
} else {
	$nama = "ami";
}
$data = [
	[
		'img' => 'aqua.jpg',
		'desc' => 'waifu kamu adalah Aqua-sama.. si dewi sableng'
	],
	[
		'img' => 'askontlo.jpg',
		'desc' => 'waifu kamu adalah Astolfo. Yang sabar aja gan!'
	],
	[
		'img' => 'chitoge.png',
		'desc' => 'waifu kamu adalah Chitoge. Si the best girl! dibanding yang sirambut hitam'
	],
	[
		'img' => 'emilia.png',
		'desc' => 'waifu kamu adalah Emilia-tan. Ini dabest girl gan! dibanding sirambut biru'
	],
	[
		'img' => 'julie.jpg',
		'desc' => 'waifu kamu adalah Julie. ini mantap! bisa sekamar di asrama'
	],
	[
		'img' => 'kaori.jpg',
		'desc' => 'waifu kamu adalah Kaori. Yang sabar aja gan! waifumu dah wafat mz..'
	],
	[
		'img' => 'kotori.jpeg',
		'desc' => 'waifu kamu adalah Kotori-chan. waifumu idol mz..'
	],
	[
		'img' => 'kurumi.jpg',
		'desc' => 'waifu kamu adalah Kurumi. Wadoo kelar hidup lu bisa zafkiel juga'
	],
	[
		'img' => 'nico.jpg',
		'desc' => 'waifu kamu adalah Nico. yang sabar aja gan! waifumu tydac berisi mz..'
	],
	[
		'img' => 'onodera.jpg',
		'desc' => 'waifu kamu adalah Onodera. Yang sabar aja gan! Tetap siblonde selalu dihati'
	],
	[
		'img' => 'pico.jpg',
		'desc' => 'waifu kamu adalah Pico. Ini salah satu waifu terbaik yang ada di list waifu disini. kamu sangat beruntung mz..'
	],
	[
		'img' => 'rem.png',
		'desc' => 'waifu kamu adalah Rem. waifumu latjur mz..'
	],
	[
		'img' => 'asuna.png',
		'desc' => 'waifu kamu adalah Asuna. No comment.. pokoknya da best'
	],
	[
		'img' => 'kou.jpg',
		'desc' => 'waifu kamu adalah Kou. waifumu jago buat gem mz..'
	],
	[
		'img' => 'maki.png',
		'desc' => 'waifu kamu adalah Maki. waifumu idol tsundere mz..'
	],
	[
		'img' => 'saber.png',
		'desc' => 'waifu kamu adalah Saber. waifumu jago maen pedang mz..'
	],
	[
		'img' => 'sena.jpg',
		'desc' => 'waifu kamu adalah Sena. Wadoo.. no comment oppainya gan!'
	],
	[
		'img' => 'shinobu.jpeg',
		'desc' => 'waifu kamu adalah Shinobu. Dih.. tercyduck'
	],
	[
		'img' => 'tohka.jpg',
		'desc' => 'waifu kamu adalah Tohka. Polos bisa diena2 mz..'
	],
	[
		'img' => 'tomoe.jpg',
		'desc' => 'waifu kamu adalah Tachibana Tomoe. waifumu sadis mz.. milf rasa loli'
	],
	[
		'img' => 'totsuka.png',
		'desc' => 'waifu kamu adalah Totsuka. Memikat banyak hati pria'
	],
	[
		'img' => 'yoshiko.jpg',
		'desc' => 'waifu kamu adalah Yoshiko. Enak nih.. bisa kasih pisang tiap hari!'
	],
	[
		'img' => 'ueno.png',
		'desc' => 'waifu kamu adalah Ueno. Segeralah ganti waifumu..'
	],
	[
		'img' => 'katou.jpg',
		'desc' => 'waifu kamu adalah Katou Megumi. Da best girl!'
	]
];
$rand 	= array_rand($data,1);
$result = $data[$rand];
$pict 	= PATH_IMG . $result['img'];
$title 	= $nama . ' ' . $result['desc'];
$desc 	= '<strong>'.$nama . '</strong> ' . $result['desc'];
$data = json_encode([
  'crator' => "Ami",
  'result' => $title,   
  'image' => $pict
 ]);
echo $data;
?>
