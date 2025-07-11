<?php
$version = "4.0.0";

if (isset($_GET["en"])) $lang = "en";
else $lang = "fa";

$file = file_get_contents("lang/$lang.json");
$content = json_decode($file);
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <title><?php echo $content->name . " | " . $content->title; ?></title>
    <base target="_blank"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="محمد پوربهزاد,محمد,پوربهزاد,پور بهزاد,محمد پور بهزاد,برنامه نویس,برنامه نویس وب,developer,web developer,frontend,backend,فرانت اند,بک اند,فول استک,mohammad,pourbehzad,mohammad pourbehzad,full stack"/>
    <meta name="description" content="<?php echo implode(' ', $content->about->texts); ?><"/>
    <meta name="author" content="<?php echo $content->name; ?>"/>
    <meta name="theme-color" content="#00B3FF"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <link rel="shortcut icon" href="img/mohammad-pic.png"/>
    <script>
        let version = "<?php echo $version; ?>";
        if (localStorage.getItem("theme") === null)
            localStorage.setItem("theme", "light");
        document.write(`<link id="theme" rel="stylesheet" href="css/theme/${localStorage.getItem("theme")}.css?v=${version}"/>`);
    </script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo $version; ?>"/>
    <link rel="stylesheet" href="css/mobile.css?v=<?php echo $version; ?>"/>
</head>
<body dir="<?php echo $lang == 'fa' ? 'rtl' : 'ltr'; ?>" class="<?php echo $lang; ?>">
<div class="menu">
    <a class="changetThemeBtn" onclick="changeTheme()" href="javascript:void(0);" target="_self">
        <svg id="lightTheme" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun">
            <circle cx="12" cy="12" r="4"/>
            <path d="M12 2v2"/>
            <path d="M12 20v2"/>
            <path d="m4.93 4.93 1.41 1.41"/>
            <path d="m17.66 17.66 1.41 1.41"/>
            <path d="M2 12h2"/>
            <path d="M20 12h2"/>
            <path d="m6.34 17.66-1.41 1.41"/>
            <path d="m19.07 4.93-1.41 1.41"/>
        </svg>
        <svg id="darkTheme" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon-icon lucide-moon">
            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
        </svg>
    </a>
    <a class="lang icon" href="<?php echo $lang == 'fa' ? '?en' : '?fa'; ?>" target="_self">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
            <path d="M2 12h20"/>
        </svg>
        <span><?php echo $lang == 'fa' ? 'EN' : 'FA'; ?></span>
    </a>
    <img class="mainImage" src="img/main-pic.jpg" alt="محمد پوربهزاد"/>
    <h1 class="name"><?php echo $content->name; ?></h1>
    <h2 class="title"><?php echo $content->title; ?></h2>
    <address class="info">
        <div class="infoItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                <path d="M8 2v4"/>
                <path d="M16 2v4"/>
                <rect width="18" height="18" x="3" y="4" rx="2"/>
                <path d="M3 10h18"/>
            </svg>
            <span><?php echo $content->age; ?></span>
        </div>
        <div class="infoItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase-business-icon lucide-briefcase-business">
                <path d="M12 12h.01"/>
                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                <path d="M22 13a18.15 18.15 0 0 1-20 0"/>
                <rect width="20" height="14" x="2" y="6" rx="2"/>
            </svg>
            <span><?php echo $content->experience; ?></span>
        </div>
        <div class="infoItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
            </svg>
            <span><?php echo $content->mobile; ?></span>
        </div>
        <div class="infoItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
                <rect x="2" y="4" width="20" height="16" rx="2"/>
            </svg>
            <span>pspipm27@gmail.com</span>
        </div>
        <div class="infoItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
            <span><?php echo $content->location; ?></span>
        </div>
        <div class="socials">
            <div class="socialsWrapper">
                <a class="socialItem" href="tel:+989158955030" title="Mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
                    </svg>
                </a>
                <a class="socialItem" href="mailto:pspipm27@gmail.com" title="Email">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                    </svg>
                </a>
                <a class="socialItem" href="https://linkedin.com/in/mohammad-pourbehzad" title="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                        <rect width="4" height="12" x="2" y="9"/>
                        <circle cx="4" cy="4" r="2"/>
                    </svg>
                </a>
                <a class="socialItem" href="https://github.com/mohammad-prb" title="Github">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github-icon lucide-github">
                        <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/>
                        <path d="M9 18c-4.51 2-5-2-7-2"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="messageSocial">
            <a class="messageSocialItem" href="https://t.me/Mohammad_prb">
                <img src="img/telegram.png" alt="Telegram" class="messageSocialImage"/>
                <span>Telegram message</span>
            </a>
            <a class="messageSocialItem" href="https://wa.me/+989158955030">
                <img src="img/whatsapp.png" alt="WhatsApp" class="messageSocialImage"/>
                <span>WhatsApp message</span>
            </a>
        </div>
        <div class="otherSocial">
            <a class="otherSocialItem" href="https://stackoverflow.com/users/15959505/mohammad-pourbehzad" title="Stackoverflow account">
                <img class="otherSocialImage" src="img/stackoverflow.png" alt="stackoverflow account"/>
            </a>
            <a class="otherSocialItem" href="https://www.npmjs.com/~mohammad.prb" title="NPM account">
                <img class="otherSocialImage" src="img/npm.png" alt="NPM account"/>
            </a>
            <a class="otherSocialItem" href="https://pypi.org/user/mohammad-prb/" title="PyPI account">
                <img class="otherSocialImage" src="img/pypi.png" alt="PyPI account"/>
            </a>
            <a class="otherSocialItem" href="https://packagist.org/packages/mohammad-prb/" title="Packagist account">
                <img class="otherSocialImage" src="img/packagist.png" alt="Packagist account"/>
            </a>
        </div>
    </address>
</div>
<div class="main">
    <div class="row">
        <div class="box about">
            <h3 class="boxTitle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                <span>
                    <?php echo $content->about->title; ?>
                </span>
            </h3>
            <div class="boxContent paragraphs">
                <p>
                    <?php echo implode('</p><p>', $content->about->texts); ?>
                </p>
            </div>
        </div>
        <div class="box skills">
            <h3 class="boxTitle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap-icon lucide-zap">
                    <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>
                </svg>
                <span>
                    <?php echo $content->skills; ?>
                </span>
            </h3>
            <div class="boxContent">
                <strong class="skill">PHP/Laravel</strong>
                <strong class="skill">Python/FastAPI</strong>
                <strong class="skill">Java</strong>
                <strong class="skill">MySQL</strong>
                <strong class="skill">Vue/Nuxt</strong>
                <strong class="skill">React/Next</strong>
                <strong class="skill">jQuery</strong>
                <strong class="skill">JavaScript/TypeScript</strong>
                <strong class="skill">TailwindCSS</strong>
                <strong class="skill">SASS</strong>
                <strong class="skill">HTML/CSS</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box softSkills">
            <h3 class="boxTitle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles-icon lucide-sparkles">
                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                    <path d="M20 3v4"/>
                    <path d="M22 5h-4"/>
                    <path d="M4 17v2"/>
                    <path d="M5 18H3"/>
                </svg>
                <span>
                    <?php echo $content->softSkills->title; ?>
                </span>
            </h3>
            <div class="boxContent">
                <div class="softSkillItem">
                    <strong class="softSkill"><?php echo $content->softSkills->items[0]; ?></strong>
                    <div class="range">
                        <span style="width: 95%;"></span>
                    </div>
                </div>
                <div class="softSkillItem">
                    <strong class="softSkill"><?php echo $content->softSkills->items[1]; ?></strong>
                    <div class="range">
                        <span style="width: 88%;"></span>
                    </div>
                </div>
                <div class="softSkillItem">
                    <strong class="softSkill"><?php echo $content->softSkills->items[2]; ?></strong>
                    <div class="range">
                        <span style="width: 92%;"></span>
                    </div>
                </div>
                <div class="softSkillItem">
                    <strong class="softSkill"><?php echo $content->softSkills->items[3]; ?></strong>
                    <div class="range">
                        <span style="width: 97%;"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="box education">
            <h3 class="boxTitle">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap-icon lucide-graduation-cap">
                    <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/>
                    <path d="M22 10v6"/>
                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/>
                </svg>
                <span>
                    <?php echo $content->education->title; ?>
                </span>
            </h3>
            <div class="boxContent">
                <div class="university">
                    <img class="uniLogo" src="img/university.png" alt="<?php echo $content->education->university; ?>"/>
                    <div class="uniInfo">
                        <div class="uniInfoItem"><?php echo $content->education->description; ?></div>
                        <div class="uniInfoItem"><?php echo $content->education->university; ?></div>
                        <div class="uniInfoItem"><?php echo $content->education->gpa; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box jobs">
        <h3 class="boxTitle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase-business-icon lucide-briefcase-business">
                <path d="M12 12h.01"/>
                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                <path d="M22 13a18.15 18.15 0 0 1-20 0"/>
                <rect width="20" height="14" x="2" y="6" rx="2"/>
            </svg>
            <span>
                <?php echo $content->experiences->title; ?>
            </span>
        </h3>
        <div class="boxContent">
            <div class="line"></div>
            <div class="jobs">
                <?php
                array_map(function ($item) {
                    echo '<div class="jobItem">';

                    echo <<<HTML
                        <div class="jobHeader">
                            <h4 class="jobTitle">$item->title</h4>
                            <div class="time">$item->date</div>
                        </div>
                        <div class="company">$item->organ</div>
                        <p class="description">$item->description</p>
                    HTML;

                    if (!empty($item->certificate)) {
                        echo <<<HTML
                            <a class="certificate" href="$item->certificate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check2-icon lucide-file-check-2">
                                    <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"/>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                                    <path d="m3 15 2 2 4-4"/>
                                </svg>
                                <span>Certificate</span>
                            </a>
                        HTML;
                    }

                    echo '</div>';
                }, $content->experiences->items);
                ?>
            </div>
        </div>
    </div>
    <div class="box projects">
        <h3 class="boxTitle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-icon lucide-code">
                <path d="m16 18 6-6-6-6"/>
                <path d="m8 6-6 6 6 6"/>
            </svg>
            <span>
                <?php echo $content->projects->title; ?>
            </span>
        </h3>
        <div class="boxContent">
            <?php
            array_map(function ($item) use ($content) {
                $description = implode('</p><p>', $item->texts);

                echo <<<HTML
                    <div class="projectItem">
                        <h4 class="projectTitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder-git-icon lucide-folder-git">
                                <circle cx="12" cy="13" r="2"/>
                                <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/>
                                <path d="M14 13h3"/>
                                <path d="M7 13h3"/>
                            </svg>
                            <span>$item->title</span>
                        </h4>
                HTML;

                if (!empty($item->link))
                    echo <<<HTML
                        <div class="projectLinkBox">
                            <div class="projectLinkTitle">{$content->projects->linkTitle}:</div>
                            <a class="projectLink" href="$item->link">$item->link</a>
                        </div>
                    HTML;

                echo <<<HTML
                    <div class="paragraphs">
                        <p>$description</p>
                    </div>
                HTML;

                if (!empty($item->examples)) {
                    echo '<div class="examples">';
                    array_map(function ($example) use ($content) {
                        echo <<<HTML
                            <div class="example">
                                <a class="link" href="$example->link">$example->title</a>
                                <p class="exampleBody">$example->description</p>
                                <div class="showLink" onclick="clickLink(this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link-icon lucide-external-link">
                                        <path d="M15 3h6v6"/>
                                        <path d="M10 14 21 3"/>
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                    </svg>
                                    <span>{$content->projects->showTitle}</span>
                                </div>
                            </div>
                        HTML;
                    }, $item->examples);
                    echo '</div>';
                }

                echo '</div>';
            }, $content->projects->items);
            ?>
        </div>
    </div>
    <div class="source">
        <h4 class="sourceTitle"><?php echo $content->source; ?>:</h4>
        <a class="projectLink" href="https://github.com/mohammad-prb/personal-website">
            https://github.com/mohammad-prb/personal-website
        </a>
    </div>
</div>
</body>
<script src="js/main.js"></script>
<script>
    if (localStorage.getItem("theme") === "light")
        document.getElementById("darkTheme").classList.add('active');
    else
        document.getElementById("lightTheme").classList.add('active');
</script>
</html>
