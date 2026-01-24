<?php
date_default_timezone_set('Asia/Manila');

/* ---------- FLIGHT DATA (because we are disciplined angelites who use arrays when they realize that's an actual thing we can do.)---------- */

$domesticFlights = [
    [
        "flightNo" => "PR 201",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "CEB",
        "city" => "Cebu",
        "timezone" => "Asia/Manila",
        "image" => "https://cdn.earthroulette.com/ER/bg/Moalboal2C_Cebu-bg.jpg",
        "departure" => "2026-02-01 08:00",
        "duration" => 90
    ],
    [
        "flightNo" => "PR 305",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "DVO",
        "city" => "Davao",
        "timezone" => "Asia/Manila",
        "image" => "https://gov-web-sing.s3.ap-southeast-1.amazonaws.com/uploads/2019/06/1280px-Davao_City_skyline_01.jpg",
        "departure" => "2026-02-01 09:30",
        "duration" => 120
    ],
    [
        "flightNo" => "PR 410",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "PPS",
        "city" => "Palawan",
        "timezone" => "Asia/Manila",
        "image" => "https://cdn.earthroulette.com/ER/bg/Puerto_Princesa-bg.jpg",
        "departure" => "2026-02-01 11:00",
        "duration" => 85
    ],
    [
        "flightNo" => "PR 522",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "ILO",
        "city" => "Iloilo",
        "timezone" => "Asia/Manila",
        "image" => "https://scarletscribs.wordpress.com/wp-content/uploads/2025/05/250515-iloilo-city-proper-aklan-western-visayas-philippines.jpg",
        "departure" => "2026-02-01 13:00",
        "duration" => 70
    ],
    [
        "flightNo" => "PR 633",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "TAG",
        "city" => "Bohol",
        "timezone" => "Asia/Manila",
        "image" => "https://cdn.earthroulette.com/ER/bg/Alona_Beach-bg.jpg",
        "departure" => "2026-02-01 15:00",
        "duration" => 95
    ],
];

$internationalFlights = [
    [
        "flightNo" => "PR 101",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "NRT",
        "city" => "Tokyo",
        "timezone" => "Asia/Tokyo",
        "image" => "https://res.cloudinary.com/aenetworks/image/upload/c_fill,w_1200,h_630,g_auto/dpr_auto/f_auto/q_auto:eco/v1/gettyimages-1390815938",
        /* ---- i want to fly into that mountain idk it feels so "fly-into-able" ---- */
        "departure" => "2026-02-02 06:00",
        "duration" => 270
    ],
    [
        "flightNo" => "PR 115",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "SIN",
        "city" => "Singapore",
        "timezone" => "Asia/Singapore",
        "image" => "https://i.natgeofe.com/k/95d61645-a0c7-470f-b198-74a399dd5dfb/singapore-city.jpg",
        "departure" => "2026-02-02 08:00",
        "duration" => 235
    ],
    [
        "flightNo" => "PR 207",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "LHR",
        "city" => "London",
        "timezone" => "Europe/London",
        "image" => "https://cdn.mos.cms.futurecdn.net/fYxc6sKJNxyiYxRatdapDB-1920-80.jpg",
        "departure" => "2026-02-02 10:00",
        "duration" => 900
    ],
    [
        "flightNo" => "PR 318",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "KBP",
        "city" => "Chernobyl Exclusion Zone",
        "timezone" => "Europe/Kyiv",
        "image" => "https://images4.alphacoders.com/178/178134.jpg",
        /* ---- i want to go here atleast once in my life idk ---- */
        "departure" => "2026-02-03 01:00",
        "duration" => 780
    ],
    [
        "flightNo" => "PR 444",
        "airline" => "Philippine Airlines",
        "from" => "MNL",
        "to" => "ICN",
        "city" => "Seoul",
        "timezone" => "Asia/Seoul",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Seoul_%28175734251%29.jpeg/1280px-Seoul_%28175734251%29.jpeg",
        "departure" => "2026-02-03 05:00",
        "duration" => 260
    ],
];

/* ---------- FUNCTION (i got these from a youtube video please don't obliterate me :c )---------- */

function renderFlight($flight) {
    $dep = new DateTime($flight["departure"], new DateTimeZone("Asia/Manila"));
    $arr = clone $dep;
    $arr->add(new DateInterval("PT{$flight["duration"]}M"));
    $arr->setTimezone(new DateTimeZone($flight["timezone"]));

    $duration = $dep->diff($arr);
    ?>

    <div class="card">
        <img src="<?= $flight["image"] ?>" alt="<?= $flight["city"] ?>">
        <div class="card-body">
            <span class="badge">On Time</span>
            <h3><?= $flight["city"] ?></h3>
            <p><?= $flight["airline"] ?> • <?= $flight["flightNo"] ?></p>
            <p><strong><?= $flight["from"] ?></strong> → <strong><?= $flight["to"] ?></strong></p>
            <p>Departs: <?= $dep->format("M d, g:i A") ?> (Asia/Manila)</p>
            <p>Arrives: <?= $arr->format("M d, g:i A") ?> (<?= $flight["timezone"] ?>)</p>
            <p>Duration: <?= $duration->h ?>h <?= $duration->i ?>m</p>
        </div>
    </div>

<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>The Flying Bisaya</title>
<!-- i alone am the bisaya one -->
<link rel="stylesheet" href="css/styles.css">
</head>

<body>

<header>
    <h1>The Flying Bisaya</h1>
</header>

<main>
    <section>
        <h2>Domestic Flights</h2>
        <div class="grid">
            <?php foreach ($domesticFlights as $f) renderFlight($f); ?>
        </div>
    </section>

    <section>
        <h2>International Flights</h2>
        <div class="grid">
            <?php foreach ($internationalFlights as $f) renderFlight($f); ?>
        </div>
    </section>

    <section class="timezones">
        <h2>Other Timezones</h2>
        <p><?= (new DateTime("now", new DateTimeZone("Pacific/Guam")))->format("g:i A") ?> — Guam</p>
        <p><?= (new DateTime("now", new DateTimeZone("Indian/Antananarivo")))->format("g:i A") ?> — Madagascar</p>
        <p><?= (new DateTime("now", new DateTimeZone("Atlantic/Reykjavik")))->format("g:i A") ?> — Iceland</p>
    </section>
</main>

<footer>
    &copy; <?= date("Y") ?> Renzo D. Nengasca | WD-201
</footer>

</body>
</html>
