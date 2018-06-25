<!DOCTYPE html>
<?php include_once("pages/01-parts/01-html_after_doctype.inc"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Wave - Hawaii</title>
    <?php include_once("pages/01-parts/02-html_head_after_title.inc"); ?>
</head>

<body id="Hawaii">

<?php include_once("pages/01-parts/03-header.inc"); ?>

<div class="hero-title">
    <h3>Welcome to </h3>
    <h1> Hawaii </h1>
</div>

<div class="uk-container uk-container-medium uk-align-center">


    <div class="uk-grid-small uk-grid-match" uk-grid>

        <div class="uk-width-1-1">
            <div class="hero-image uk-card uk-card-default uk-card-body">
                <div class="ism-slider" data-play_type="loop" data-interval="5000" data-image_fx="zoompan"
                     id="my-slider">
                    <ol>
                        <li>
                            <img src="pages/places/hawaii/slides/slide01-<?= $size ?>.jpg" alt="Hawaii Photo 1">
                        </li>
                        <li>
                            <img src="pages/places/hawaii/slides/slide02-<?= $size ?>.jpg" alt="Hawaii Photo 2">
                        </li>
                        <li>
                            <img src="pages/places/hawaii/slides/slide03-<?= $size ?>.jpg" alt="Hawaii Photo 3">
                        </li>
                        <li>
                            <img src="pages/places/hawaii/slides/slide04-<?= $size ?>.jpg" alt="Hawaii Photo 4">
                        </li>
                        <li>
                            <img src="pages/places/hawaii/slides/slide05-<?= $size ?>.jpg" alt="Hawaii Photo 5">
                        </li>
                        <li>
                            <img src="pages/places/hawaii/slides/slide06-<?= $size ?>.jpg" alt="Hawaii Photo 6">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="uk-grid-small uk-grid-match" uk-grid>
        <div class="uk-width-1-1@s uk-width-1-2@m col2">
            <div class="my-article uk-article">
                <h3 class="uk-article-title">Pearl Harbor</h3>
                <!-- This demonstrates the use of Picturefill.min.js -->
                <picture>
                    <!--[if IE 9]>
                    <video style="display: none;"><![endif]-->
                    <source srcset="pages/places/hawaii/img/pearlharbor-tablet.jpg"
                            media="(min-width: 480px) and (max-width: 767px)">
                    <source srcset="pages/places/hawaii/img/pearlharbor-mobile.jpg" media="(max-width: 479px)">
                    <!--[if IE 9]></video><![endif]-->
                    <img src="pages/places/hawaii/img/pearlharbor-desktop.jpg" alt="Pearl Harbor">
                </picture>
                <p>
                    Pearl Harbor, is the center of the tourist attraction on the Big Island of Oahu, Hawaii. Some
                    important memorial sites can be traveled by bus. It is recommended to get your tour tickets
                    early online. But tickets are also available on-site at the USS Arizona Memorial, which is the focal
                    point of the historic event in WWII. It is an excellent time to pay tribute tho those who served and
                    sacrificed their lives to defend the country. Just around the corner is the Bowfin Submarine Museum
                    and Park. I was privileged to visit Pearl Harbor in 2015; it is like Deja Vu in the 1940's. The
                    submarine is well preserved. You can imagine how it is to be a Navy crew during those times. You will
                    be provided with a recorded audio that narrates about the parts of the submarine. Near the area the
                    torpedoes are well
                </p>
                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m col2">
            <div class="my-article uk-article">
                <h3 class="uk-article-title">Grand Wailea Hotel</h3>
                <img src="pages/places/hawaii/img/hawaii05.jpg" class="img-half-width"
                     alt="Grand Wailea Hotel">
                <p>
                    The Grand Wailea Hotel, let your family experience fun, adventure, excitement and beautiful
                    memories.  It is elegant luxury hotel and resorts in the heart of the city. With amazing landscape and
                    exquisite garden that was trim with an artist's hand. There are pools all over its vicinity.
                    There find hotels in the ground floor and some are accessible and distributed across levels. It houses
                    variety of restaurants for people from different cultures, or those who just want to experience exotic dishes.
                    The rooms are spacious with 40 inch UltraHD TV. Other amenities includes hot and cold shower,
                    free high-speed wifi, safety deposit box, microwave, refrigerator, quality sofas, pillows, and
                    linens. The clean and freshness in the environment
                </p>
                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>
            </div>
        </div>
    </div>

    <div class="uk-grid-small uk-grid-match" uk-grid>

        <!-- <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@m uk-child-width-1-4@l" uk-grid> -->
        <div class="uk-width-1-1@s uk-width-1-2@m uk-width-1-4@l col4">
            <div class="my-article uk-article">


                <h3 class="uk-article-title">Hula Dance</h3>
                <img src="pages/places/hawaii/img/hawaii01.jpg" class="img-half-width" alt="Hawaii">
                <p>
                    Hula a Hawaiian traditional dance it is said that it's a ritual to please the gods, a mystique
                    to the people an ancient tribe. A luau is another festive to watch the hula and study about
                    Hawaiian and Polynesian culture. Hula is a culture and taught by a Kumu hula in a halau school. Hula
                    preserves the songs and tradition of the people. Authentic hula can be seen during festivals
                    such as
                </p>

                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>

            </div>
        </div>

        <div class="uk-width-1-1@s uk-width-1-2@m uk-width-1-4@l col4">
            <div class="my-article uk-article">
                <h3 class="uk-article-title">Iolani Palace</h3>
                <img src="pages/places/hawaii/img/hawaii02.jpg" class="img-full-width" alt="The Food">
                <p>
                    When you visit Hawaii, you wouldn't want to miss seeing the beautiful Iolani Royal Palace. It
                    was the Residence to the two last Kamehameha Monarchs. King Kalakaua constructed it in 1882, and the
                    last is Queen Liliuokalani, which is his sister. The monarchy ended in the late 1800's. The
                    architecture is stunning every part of the building is a well crafted with an
                </p>
                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>
            </div>
        </div>

        <div class="uk-width-1-1@s uk-width-1-2@m uk-width-1-4@l col4">
            <div class="my-article uk-article">
                <h3 class="uk-article-title">Waikiki Beach</h3>

                <img src="pages/places/hawaii/img/hawaii03.jpg" class="img-full-width" alt="Featured Chef">
                <p>
                    Waikiki Beach is one of the best in the world, with magnificent shoreline and landscape, the
                    view is breath-taking. Your Waikiki experience is not complete, without doing surfing. There are
                    surfboards for rent around the area. You can find distinct restaurants, from Japanese, Korean to the
                    European style, and food from different cultures. There are also tattoo shops that are

                </p>
                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>
            </div>
        </div>

        <div class="uk-width-1-1@s uk-width-1-2@m uk-width-1-4@l col4">
            <div class="my-article uk-article">

                <h3 class="uk-article-title">Surfing</h3>

                <img src="pages/places/hawaii/img/hawaii06.jpg" class="img-full-width" alt="Featured Chef">
                <p>
                    The famous tropical activity "surfing" is not an ancient Hawaiin tradition. It was integrated into the
                    culture in the 1800s and considered as an art. The locals called it sliding with the waves, It was then
                    introduced to Australia in 1915 by The Hawaiian Duke Kahanamoku. He demonstrated the art on
                    Manly Beach, Australia. Many Americans from the mainland visit
                </p>
                <p>
                    <a href="#" class="uk-button uk-button-primary">Read more >></a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- end of container Wrapper -->

<?php include_once("pages/01-parts/04-footer.inc"); ?>
</body>
</html>