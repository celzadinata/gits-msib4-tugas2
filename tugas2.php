<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tugas2.css">
    <title>Personal Web</title>
    <script type="text/javascript">
        function darkMode() {
            var toggle = document.getElementById('toggle');
            var button = document.getElementById('button');
            var darkmode = document.getElementById('dark-mode');
            var body = document.getElementById('container');
            if (toggle.innerText == "Off") {
                toggle.innerText = "On";
                toggle.style.color = "lime";
                button.classList.remove("default");
                button.classList.add("onactive");
                document.body.style.backgroundColor = "black";
                document.body.style.color = "white";
                body.style.backgroundColor = "black";
                body.style.color = "white";
                darkmode.style.backgroundColor = "lime";
            } else {
                toggle.innerText = "Off";
                toggle.style.color = "red";
                button.classList.remove("onactive");
                button.classList.add("default");
                document.body.style.backgroundColor = "white";
                document.body.style.color = "black";
                body.style.backgroundColor = "white";
                body.style.color = "black";
                darkmode.style.backgroundColor = "red";
            }
        }
    </script>
</head>

<body>
    <div class="flex-container-universal" id="container">
        <!-- Flex kiri Introduction -->
        <div class="flex-kiri">
            <img src="https://www.pngitem.com/pimgs/m/483-4836531_clown-meme-cursedimage-cursed-clownface-clowning-clown-at.png" alt="Tidak ada gambar" width="96%" style="margin: 2%; border: 2px solid rgb(102, 101, 101); border-radius: 10%;">

            <div class="introduction text-left">
                <pre><h2 >Celza Dinata <br><small>Indonesia</small></h2></pre>
                <p class="text-break">
                <p style="font-size: large;">Software Engineer</p>
                Hello World! <br>
                Nice to meet you, I am Celza a young and talented
                software engineer. I am still overcoming a hard long
                road to become an experienced developer but my
                skills are worthy to do your job. Undergraduate from
                U.P.I YAI University as a bachelor, I am ready to
                fulfill my duty as a change agent through digital products.<br><br>

                I have a good communication, can do a negotiation
                things, can work individually or together, excited about
                computer stuff, and gladly upgrade my skills wherever I work!
                </p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Tanda_Tangan_Mick_Schumacher.png" alt="tanda tangan" width="40%">
            </div>
            <br>
            <div class="sosmed-container text-left">
                <div class="sosmed-item"><a href="https://www.facebook.com/SynergyAcademies/"><img src="https://isafetymagazine.com/wp-content/uploads/2022/01/Facebook-icon-PNG.png" alt="facebook" width="60%" height="70%"></a></div>
                <div class="sosmed-item"><a href="https://www.instagram.com/"><img src="https://cdn.icon-icons.com/icons2/1211/PNG/512/1491579602-yumminkysocialmedia36_83067.png" alt="instagram" width="60%" height="70%"></a></div>
                <div class="sosmed-item"><a href="https://id.linkedin.com/"><img src="https://www.freepnglogos.com/uploads/linkedin-basic-round-social-logo-png-13.png" alt="Linked.ins" width="60%" height="70%"></a></div>
                <div class="sosmed-item"><a href="https://medium.com/"><img src="https://icon-library.com/images/medium-icon-png/medium-icon-png-20.jpg" alt="Medium" width="60%" height="70%"></a></div>
                <div class="sosmed-item"><a href="https://github.com/celzadinata"><img src="https://icones.pro/wp-content/uploads/2021/06/symbole-github-orange.png" alt="github" width="60%" height="70%"></a></div>
            </div>

            <text style="font-weight: bold;">Dark Mode</text>
            <div class="sosmed-container text-left">
                <div id="dark-mode">
                    <div class="default" id="button" onclick="darkMode()"><b>||</b></div>
                </div>
                <div id="toggle" style="margin-left: 2px; color: red;">Off</div>
            </div>
        </div>

        <!-- Flex kanan spesifikasi saya -->
        <div class="flex-kanan">
            <br>
            <!--skillz -->
            <div class="skillz-container text-left">
                <div class="skillz-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Skillz</p>
                    <p style="font-size: medium; font-weight: bold;">Front End Programming</p>
                    Friendly with responsive code using HTML 5,
                    bootstrap, Angular 2, Hugo, Laravel Blade
                    Template, etc
                    </p>
                </div>
                <div class="skillz-item">
                    <p class="text-break">
                    <p><br></p>
                    <p style="font-size: medium; font-weight: bold;">Back End Programming</p>
                    Grow and thrive using PHP (Native, Laravel, CI),
                    Java, NodeJS (Express, Hapi), etc.
                    </p>
                </div>
                <div class="skillz-item">
                    <p class="text-break">
                    <p style="font-size: medium; font-weight: bold;">Project Management</p>
                    Kind yet strict boss who keep everything
                    scheduled like what planned on WBS and
                    budget plan, check every milestone weekly and
                    take a peek of future through AOA diagram.
                    </p>
                </div>
                <div class="skillz-item">
                    <p class="text-break">
                    <p style="font-size: medium; font-weight: bold;">Content Creation</p>
                    Happily using Adobe Photoshop and Corel Draw
                    to make the world peace and colourful also
                    Pinnacle Studio to bake a brilliant video concept.
                    </p>
                </div>
            </div>

            <!--skillz chart -->
            <br>
            <div class="skillz-container text-left">
                <div class="skillz-item" style="width: 92%;">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Skillz Chart</p>
                    <img src="chart.jpg" alt="gambar ada didalam zip (char.jpg)" width="100%">
                    <br><br><br><br>
                </div>
            </div>

            <!-- work experience -->
            <br>
            <div class="work-education-interest-container text-left">
                <div class="work-education-interest-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Work Experience</p>
                    <small style="font-weight: lighter;">2016 - AUG 2016</small><br>
                    <text style="font-weight: bold;">INTERN ANDROID DEVELOPER</text><br>
                    PT. Bahasa Kinerja Utama<br>
                    <small style="font-weight: normal;">Indonesia, Bekasi</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <small style="font-weight: lighter;">JUL 2017 - AUG 2017</small><br>
                        <text style="font-weight: bold;">IT TRAINER</text><br>
                        BP2DK Kominfo<br>
                        <small style="font-weight: normal;">Indonesia, Boyolali</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <small style="font-weight: lighter;">Jul 2018 - Sep 2018</small><br>
                        <text style="font-weight: bold;">FREELANCE FULLSTACK WEB DEVELOPER</text><br>
                        Fintech Crown<br>
                        <small style="font-weight: normal;">Indonesia, Surakarta</small><br><br>
                    </p>
                </div>
                <br><br>
            </div>

            <!-- Education -->
            <br>
            <div class="work-education-interest-container text-left">
                <div class="work-education-interest-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Education</p>
                    <small style="font-weight: lighter;">2020 - Present</small><br>
                    <text style="font-weight: bold;">COMPUTER SCIENCE EDUCATION</text><br>
                    Universitas U.P.I YAI<br>
                    <small style="font-weight: normal;">Indonesia, Jakarta Timur</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <small style="font-weight: lighter;">JUL 2015 - APR 2018</small><br>
                        <text style="font-weight: bold;">NAIL SPREADING SCIENCE</text><br>
                        SMAN 22 Jakarta<br>
                        <small style="font-weight: normal;">Indonesia, Jakarta Timur</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <small style="font-weight: lighter;">2006 - 2012</small><br>
                        <text style="font-weight: bold;">TAMBELS BANS ACADEMY</text><br>
                        SD ST Antonius<br>
                        <small style="font-weight: normal;">Indonesia, Jakarta Timur</small><br><br>
                    </p>
                </div>
                <br><br>
            </div>

            <!-- Interest/Hobby -->
            <br>
            <div class="work-education-interest-container text-left">
                <div class="work-education-interest-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Interest</p>
                    <text style="font-weight: bold;">MENGKODING</text><br>
                    <small style="font-weight: medium;">i like koding</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">MENGMAIN</text><br>
                        <small style="font-weight: medium;">i like main</small><br><br>
                    </p>
                </div>
                <div class="work-education-interest-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">MENGSEDIH</text><br>
                        <small style="font-weight: medium;">i cri</small><br><br>
                    </p>
                </div>
                <br><br>
            </div>

            <!-- Portofolio -->
            <br>
            <div class="skillz-container">
                <div class="skillz-item">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Portofolio</p>
                    <a href="https://github.com/celzadinata" target="#blank"><img src="https://azinudinachzab.github.io/portofolio/img/portfolio.jpg" alt="portofolio 1" width="100%"></a>
                </div>
                <div class="skillz-item">
                    <br>
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;"> </p>
                    <a href="https://github.com/celzadinata" target="#blank"><img src="https://azinudinachzab.github.io/portofolio/img/portfolio.jpg" alt="portofolio 1" width="100%"></a>
                </div>
                <div class="skillz-item">
                    <a href="https://github.com/celzadinata" target="#blank"><img src="https://azinudinachzab.github.io/portofolio/img/portfolio.jpg" alt="portofolio 1" width="100%"></a>
                    <br><br><br><br>
                </div>
                <div class="skillz-item">
                    <a href="https://github.com/celzadinata" target="#blank"><img src="https://azinudinachzab.github.io/portofolio/img/portfolio.jpg" alt="portofolio 1" width="100%"></a>
                    <br><br><br><br>
                </div>
            </div>

            <!-- Contact -->
            <br>
            <div class="contact-container text-left">
                <div class="contact-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Contact</p>
                    <text style="font-weight: bold;">Address</text><br>
                    <small style="font-weight: medium;"> Jl. KH. Wahid Hasyim No.85, Jurang Manggu Tim.</small><br>
                    <small style="font-weight: medium;"> Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15222</small><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Phone Number</text><br>
                        <small style="font-weight: medium;"> -</small><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Mobile Number</text><br>
                        <small style="font-weight: medium;"> +62 817 6080 515</small><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Email</text><br>
                        <small style="font-weight: medium;"><a style="color: rgb(255, 174, 0);" href="https://mail.google.com/mail/u/0/#drafts">dinatacelza@gmail.com</a></small><br><br>
                    </p>
                </div>
            </div>

            <!-- Get in touch -->
            <br>
            <div class="contact-container text-left">
                <div class="contact-item">
                    <p class="text-break">
                    <p class="text-secondary" style="font-size: medium; font-weight: bold;">Get in touch</p>
                    <text style="font-weight: bold;">Name</text><br>
                    <input placeholder="Full Name" style="width: 90%; height: 50px;"></input><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Email address</text><br>
                        <input placeholder="Email" style="width: 90%; height: 50px;"></input><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Subjet</text><br>
                        <input placeholder="Subjet" style="width: 90%; height: 50px;"></input><br>
                    </p>
                </div>
                <div class="contact-item">
                    <p class="text-break">
                        <text style="font-weight: bold;">Message</text><br>
                        <input placeholder="Write message" style="width: 90%; height: 250px;"></input><br>
                    </p>
                    <button class="button-flat">Submit</button>
                </div>
                <br><br>
            </div>

        </div>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</html>