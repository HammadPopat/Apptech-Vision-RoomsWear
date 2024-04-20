<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Portfolio Filter</title>
</head>

<body>
    <section class="portfolio" id="Portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Portfolio Filter</h1>
                </div>
            </div>
            <div class="row">
                <div class="filter-buttons">
                    <ul id="filter-btns">
                        <li class="active" data-target="all">ALL</li>
                        <li data-target="Branding">Bedding</li>
                        <li data-target="Photoshop">Sofa sets</li>
                        <li data-target="Fashion">Cupboards</li>
                        <li data-target="tables">Tables</li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-gallery">

                    <div class="item" data-id="Branding">
                        <div class="inner">
                            <img src="ext/img/deco1.jpg" alt="portfolio">
                            <center>
                                <h1>Bedding</h1>
                            </center>
                            <p>A set of bedding generally consists of at least flat or fitted bed sheet that covers the
                                mattress; a flat top sheet; either a blanket, a quilt, or a duvet. Sometimes with a
                                duvet cover is to be used in addition to or instead of – the top sheet; and a number of
                                pillows with pillowcases, also referred to as pillow shams.</p>

                        </div>
                    </div>

                    <div class="item" data-id="Photoshop">
                        <div class="inner">
                            <img src="ext/img/sofachair1.jpg" width="200px" height="200px" alt="portfolio">
                            <h1>Sofas</h1>
                            <p>A sofa is a piece of furniture that a few people can comfortably sit on together. On a
                                rainy weekend, you and your friends might pile on the sofa to watch scary movies and eat
                                popcorn. A sofa is similar to a couch — officially, it needs to seat at least three or
                                more people to qualify as a sofa.</p>
                        </div>
                    </div>

                    <div class="item" data-id="Fashion">
                        <div class="inner">
                            <img src="ext/img/sofachair2.jpg" alt="portfolio">
                            <h1>Sofa</h1>
                            <p>A sofa is a long, comfortable seat with a back and usually with arms, which two or three people can sit on.</p>

                        </div>
                    </div>

                    <div class="item" data-id="tables">
                        <div class="inner">
                            <img src="ext/img/table1.jpg" alt="portfolio">
                            <h1>coffee Table</h1>
                            <p>A table is an item of furniture with a raised flat top and is supported most commonly by 1 or 4 legs .</p>

                        </div>
                    </div>

                    <div class="item" data-id="Branding">
                        <div class="inner">
                            <img src="ext/img/deco10.jpg" alt="portfolio">

                        </div>
                    </div>

                    <div class="item" data-id="Photoshop">
                        <div class="inner">
                            <img src="ext/img/sofa1.jpg" alt="portfolio">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <script src="script.js"></script> -->
    <script>// gallery item filter

        const filterButtons = document.querySelector("#filter-btns").children;
        const items = document.querySelector(".portfolio-gallery").children;

        for (let i = 0; i < filterButtons.length; i++) {
            filterButtons[i].addEventListener("click", function () {
                for (let j = 0; j < filterButtons.length; j++) {
                    filterButtons[j].classList.remove("active")
                }
                this.classList.add("active");
                const target = this.getAttribute("data-target")

                for (let k = 0; k < items.length; k++) {
                    items[k].style.display = "none";
                    if (target == items[k].getAttribute("data-id")) {
                        items[k].style.display = "block";
                    }
                    if (target == "all") {
                        items[k].style.display = "block";
                    }
                }

            })
        }</script>

</body>

</html>