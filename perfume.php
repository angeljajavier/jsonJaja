<?php

$perfumes = array(
    array(
        "perfum" => "welcomee.png",
        "name" => "Daisy Marc Jacobs",
        "brand" => "Marc Jacobs",
        "notes" => "violet leaf, violet, gardenia, white musk.",
        "fragranceconc" => "15% to 20%",
        "size" => "100 ml",
        "image" => "https://i.pinimg.com/564x/66/cd/6f/66cd6ff30ceb7e6d874f048151ca266e.jpg"
    ),
    array(
        "name" => "Ariana Grande Cloud",
        "brand" => "LUYVS",
        "notes" => "whipped cream, vanilla, and cashmere",
        "fragranceconc" => "15% to 20%",
        "size" => "100 ml",
        "image" => "https://i.pinimg.com/564x/93/12/26/9312264790627c928d817ac4ff70306c.jpg"
    ),
    array(
        "name" => "Chanel N°5",
        "brand" => "Chanel",
        "notes" => "aldehydes, ylang-ylang, neroli, bergamot, lemon.",
        "fragranceconc" => "15% to 20%",
        "size" => "100 ml",
        "image" => "https://i.pinimg.com/736x/0b/41/5b/0b415ba489bb7e2d1335fc0dcd056b2f.jpg"
    ),
    array(
        "name" => "Coco Mademoiselle",
        "brand" => "Chanel",
        "notes" => "mandarin orange, mimosa, opoponax, vanilla.",
        "fragranceconc" => "15% to 20%",
        "size" => "100 ml",
        "image" => "https://i.pinimg.com/564x/8b/0e/f0/8b0ef0bd31e09b2a5628d29f8a493e0d.jpg"
    ),
    array(
        "name" => "Musk 12",
        "brand" => "Kayali",
        "notes" => "lotus flower, freesia, and sheer jasmine.",
        "fragranceconc" => "15% to 20%",
        "size" => "100 ml",
        "image" => "https://i.pinimg.com/564x/49/da/55/49da556a2bdf93cd4392998cb619e1e0.jpg"
    ),
);

header("Content-Type: application/json");
echo json_encode(array("perfumes" => $perfumes));

?>