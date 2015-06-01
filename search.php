<html>
<body>
<?php

$id = "YOUR_ID_HERE";

$key = "YOUR_KEY_HERE";

$maxResults = 30;

$start = 0;


$ingredients = explode(" ", $_POST["ingredientsQuery"]);

$url = "http://api.yummly.com/v1/api/recipes?_app_id=" . $id . "&_app_key=" . $key;

foreach ($ingredients as $value){
	$url .= "&allowedIngredient[]=" . $value;
}
$url .= "&maxResult=" . (string)$maxResults . "&start=" . (string)$start;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$recipeJSON = curl_exec($ch); //Need to figure out how to parse this

echo $recipeJSON; //example of outplut



//these may be useful?. I don't know what I'm doing.
//$result = json_decode($recipeJSON, true);
//var_dump($result); 
?>
</body>
</html>
