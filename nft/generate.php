<?php
error_reporting(0);


$nfts = [];

for ($i = 1; $i <= 200; $i++) {
	$nft = [
		"name" => "Mosaic X buildspace #" . $i,
		"description" => "Mosaic alpha drop celebrating buildpspace n&w s4 week 2",
//		"image" => "https://buildspace.mosaic.fun/nft/drop/buildspaces4w2_" . $i . ".png"
	];
	$nfts[] = $nft;
	$sourceFilePath = 'buildspaces4w2_.png';  // Replace with the actual source file path
	$destinationFilePath = 'drop/buildspaces4w2_' . $i . '.png';  // Replace with the desired destination file path

	if (copy($sourceFilePath, $destinationFilePath)) {
		$newName = 'new_image_renamed.png';  // Replace with the desired new name
		$newFilePath = 'path/to/destination/' . $newName;

		if (rename($destinationFilePath, $newFilePath)) {
			echo "File copied and renamed successfully.";
		} else {
			echo "File renaming failed.";
		}
	} else {
		echo "File copying failed.";
	}
}

$json = json_encode($nfts, JSON_PRETTY_PRINT);

file_put_contents('drop/nfts.json', $json);

echo "JSON file generated successfully.";