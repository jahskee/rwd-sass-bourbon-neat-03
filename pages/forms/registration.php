<!DOCTYPE html>
<?php include_once("pages/01-parts/01-html_after_doctype.inc"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Wave - Registration</title>
    <?php include_once("pages/01-parts/02-html_head_after_title.inc"); ?>
</head>

<body id="Registration">

<?php include_once("pages/01-parts/03-header.inc"); ?>


<div class="reg-container uk-container uk-container-medium uk-align-center">

    <div class="reg-page uk-grid-small uk-grid-match" uk-grid>

        <div class="reg-form uk-width-2-3@m uk-width-1-1@s">
            <div>
                <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h4 class="section-title uk-text-center">Be a Member</h4>
                </div>

                <div class="data-security-policy uk-offcanvas-content">

                    <!-- The whole page content goes here -->

                    <a href="#offcanvas-usage" uk-toggle><span uk-icon="icon: lock"></span>Privacy (off-canvass)</a>

                    <div id="offcanvas-usage" uk-offcanvas>
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <h3>Privacy Statement</h3>

                            <p>We make sure to keep all your data private. Sensitive information is transmitted
                                thru a latest SSL encryption standards. Our system passed the PCI compliance.</p>

                        </div>
                    </div>

                </div>
                <form>
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend"></legend>

                        <div class="uk-margin first-field">
                            <input class="uk-input" type="text" placeholder="First Name">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Last Name">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Username">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" placeholder="Email">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="password" placeholder="Password">
                        </div>

                        <div class="uk-margin">
                            <label for="date-of-birth">Date of Birth</label>
                            <input class="uk-input" type="date" id="date-of-birth">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" placeholder="About Me"></textarea>
                        </div>
                        <div class="uk-margin">
                            <input type="checkbox" id="agree">

                            <label for="agree">Agree to Terms and Conditions</label>
                        </div>

                    </fieldset>

                    <div class="uk-button-group">
                        <button class="uk-button uk-button-primary">Submit</button>
                        <button class="uk-button uk-button-secondary">Reset</button>

                    </div>
                </form>


                <div class="testimonial uk-section uk-section-muted">
                    <div class="uk-container">

                        <h3>Comments Section:</h3>

                        <div class="uk-grid-match uk-child-width-1-3@m uk-child-width-1-1@s" uk-grid>
                            <div>
                                <article class="uk-comment">
                                    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                                        <!--
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar" src="asset/img/extras/jahskee.jpg" width="80" height="80" alt="">
                                        </div>
                                        -->
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">James Galacia,
                                                    Boston</a></h4>
                                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                <li><a href="#">12 days ago</a></li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </header>
                                    <div class="uk-comment-body">
                                        <p>"Quick to respond customer service for helping me resolve hotel booking
                                            issues."
                                        </p>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="uk-comment">
                                    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                                        <!--
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar" src="asset/img/extras/jahskee1.jpg" width="80" height="80" alt="">
                                        </div>
                                        -->
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">Nathan Brocks,
                                                    Miami</a></h4>
                                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                <li><a href="#">12 days ago</a></li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </header>
                                    <div class="uk-comment-body">
                                        <p>"As a member, I got better deals on booking my flight from New York to
                                            Miami."
                                        </p>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="uk-comment">
                                    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                                        <!--
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar" src="asset/img/extras/jahskee2.jpg" width="80" height="80" alt="">
                                        </div>
                                        -->
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">John Allen, New
                                                    York</a></h4>
                                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                <li><a href="#">12 days ago</a></li>
                                                <li><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </header>
                                    <div class="uk-comment-body">
                                        <p>"Traveling with United Airlines, I showed them my membership card,
                                            I was surprised with the 20% off."
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <ul class="uk-pagination" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>

                </div>

                <div class="cover-photo uk-cover-container uk-height-medium">
                    <img src="asset/img/cover/cover_photo.jpg" alt="" uk-cover>

                    <div class="uk-overlay uk-light uk-position-bottom">
                        <p>Discover new places with Travel Wave Membership Card.
                        <p>
                    </div>
                </div>
            </div>


        </div>


        <div class="reg-ads uk-width-1-3@m uk-width-1-1@s">
            <div class="uk-align-center">
                <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                  <h4 class="section-title uk-text-center">Member Benefits</h4>
                </div>
                <div class="member-benefits uk-grid-small " uk-grid>


                    <div class="uk-width-1-1">
                        <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <div class="uk-article uk-padding">
                                <span uk-icon="icon: cart"></span><span
                                        class="label">Discounts on Shopping Malls </span><br>
                                <a href="#" class="details">See details...</a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <div class="uk-article uk-padding">
                                <span uk-icon="icon: heart"></span><span
                                        class="label">Travel Insurance & Hospitalization</span><br>
                                <a href="#" class="details">See details...</a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <div class="uk-article uk-padding">
                                <span uk-icon="icon: star"></span><span
                                        class="label">Discounts on Featured Concierge</span><br>
                                <a href="#" class="details">See details...</a>
                            </div>
                        </div>
                    </div>


                    <div class="uk-width-1-1">
                        <div class="ceo-corner uk-card uk-card-default uk-card-body uk-card-hover">
                            <article>
                                <h3>Founder Blog</h3>
                                <img src="http://storage9.static.itmages.com/i/17/0411/h_1491887940_9828571_7677e91356.png"
                                     alt="CEO Photo">

                                <p> Dear Members, <br><br>

                                    I am proud to announce to you our best offers and discounts on major products to
                                    cater to your travel needs. We have partnered with various companies to provide you
                                    with the best deals and offers for our Travel Wave member. New and better deals on
                                    Air Fares, Hotels, Travel & Medical Insurance, Discounts on entertainments and much
                                    more. I would like to thank you for your continued support to this Program. We are
                                    always committed to providing you with the best deals.
                                </p>
                                <p><br>
                                    Sincerely Yours, <br><br>

                                    <strong>James Lange</strong> <br>
                                    CEO, Travel Wave
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-article uk-padding">
                            <a href="https://imgflip.com/i/1mze81"><img src="https://i.imgflip.com/1mze81.jpg"
                                                                        title="made at imgflip.com"
                                                                        alt="I love UIKiT 3.0"/></a>
                            <a class="uk-button uk-button-primary uk-align-center" href="#Registration" uk-scroll>Scroll
                                Up</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<?php include_once("pages/01-parts/04-footer.inc"); ?>
</body>
</html>