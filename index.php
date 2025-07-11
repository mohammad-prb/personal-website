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
    <title><?php echo $content->name." | ".$content->title; ?></title>
    <base target="_blank" />
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="محمد پوربهزاد,محمد,پوربهزاد,پور بهزاد,محمد پور بهزاد,برنامه نویس,برنامه نویس وب,developer,web developer,frontend,backend,فرانت اند,بک اند,فول استک,mohammad,pourbehzad,mohammad pourbehzad,full stack"/>
    <meta name="description" content="<?php echo implode(' ', $content->about->texts); ?><"/>
    <meta name="author" content="<?php echo $content->name; ?>"/>
    <meta name="theme-color" content="#00B3FF"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
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
<body dir="<?php echo $lang == 'fa' ? 'rtl' : 'ltr'; ?>">
<div class="menu">
    <a class="changetThemeBtn" onclick="changeTheme()" href="javascript:void(0);" target="_self">
        <script>
            document.write(localStorage.getItem("theme") === "light" ? "" : "");
        </script>
    </a>
    <a class="lang" href="<?php echo $lang == 'fa' ? '?en' : ''; ?>" target="_self">
        <span class="icon"></span>
        <span class="text"><?php echo $lang == 'fa' ? 'EN' : 'FA'; ?></span>
    </a>
    <img class="mainImage" src="img/main-pic.jpg" alt="محمد پوربهزاد"/>
    <h1 class="name"><?php echo $content->name; ?></h1>
    <h2 class="title"><?php echo $content->title; ?></h2>
    <address class="info">
        <div class="infoItem">
            <span class="icon"></span>
            <span class="text"><?php echo $content->age; ?></span>
        </div>
        <div class="infoItem">
            <span class="icon"></span>
            <span class="text"><?php echo $content->experience; ?></span>
        </div>
        <div class="infoItem">
            <span class="icon"></span>
            <span class="text"><?php echo $content->mobile; ?></span>
        </div>
        <div class="infoItem">
            <span class="icon"></span>
            <span class="text">pspipm27@gmail.com</span>
        </div>
        <div class="infoItem">
            <span class="icon"></span>
            <span class="text"><?php echo $content->location; ?></span>
        </div>
        <div class="socials">
            <div class="socialsWrapper">
                <a class="socialItem" href="tel:+989158955030" title="Mobile"></a>
                <a class="socialItem" href="mailto:pspipm27@gmail.com" title="Email"></a>
                <a class="socialItem" href="https://linkedin.com/in/mohammad-pourbehzad" title="LinkedIn"></a>
                <a class="socialItem" href="https://github.com/mohammad-prb" title="Github"></a>
                <a class="socialItem" href="https://t.me/Mohammad_prb" title="Telegram"></a>
                <a class="socialItem" href="https://wa.me/+989158955030" title="WhatsApp"></a>
                <a class="socialItem" href="https://instagram.com/mammad.prb" title="Instagram"></a>
            </div>
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
                <span class="icon"></span>
                <span class="text">
                    <?php echo $content->about->title; ?>
                </span>
            </h3>
            <div class="boxContent">
                <p>
                    <?php echo implode('</p><p>', $content->about->texts); ?>
                </p>
            </div>
        </div>
        <div class="box skills">
            <h3 class="boxTitle">
                <span class="icon"></span>
                <span class="text">
                    <?php echo $content->skills; ?>
                </span>
            </h3>
            <div class="boxContent">
                <div class="skill">PHP/Laravel</div>
                <div class="skill">Python/FastAPI</div>
                <div class="skill">Java</div>
                <div class="skill">MySQL</div>
                <div class="skill">Vue/Nuxt</div>
                <div class="skill">React/Next</div>
                <div class="skill">jQuery</div>
                <div class="skill">JavaScript/TypeScript</div>
                <div class="skill">TailwindCSS</div>
                <div class="skill">SASS</div>
                <div class="skill">HTML/CSS</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box softSkills">
            <h3 class="boxTitle">
                <span class="icon"></span>
                <span class="text">
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
                <span class="icon"></span>
                <span class="text">
                    <?php echo $content->education->title; ?>
                </span>
            </h3>
            <div class="boxContent">
                <img class="uniLogo" src="img/university.png" alt="<?php echo $content->education->university; ?>"/>
                <div class="uniInfo">
                    <div class="uniInfoItem"><?php echo $content->education->description; ?></div>
                    <div class="uniInfoItem"><?php echo $content->education->university; ?></div>
                    <div class="uniInfoItem"><?php echo $content->education->gpa; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="box jobs">
        <h3 class="boxTitle">
            <span class="icon"></span>
            <span class="text">
                <?php echo $content->experiences->title; ?>
            </span>
        </h3>
        <div class="boxContent">
            <div class="line"></div>
            <?php
                array_map(function ($item) {
                    echo <<<HTML
                        <div class="jobItem">
                            <h4 class="jobTitle">$item->title</h4>
                            <div class="time">$item->date</div>
                            <div class="company">$item->organ</div>
                            <p class="description">$item->description</p>
                        </div>
                    HTML;
                }, $content->experiences->items);
            ?>
        </div>
    </div>
    <div class="box projects">
        <h3 class="boxTitle">
            <span class="icon"></span>
            <span class="text">
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
                            <span class="icon"></span>
                            $item->title
                        </h4>
                HTML;

                if (!empty($item->link))
                    echo <<<HTML
                        <div class="projectLinkBox">
                            <div class="projectLinkTitle">{$content->projects->linkTitle}:</div>
                            <a class="projectLink" href="$item->link">$item->link</a>
                        </div>
                    HTML;

                echo "<p>$description</p>";

                if (!empty($item->examples)) {
                    echo '<div class="examples">';
                    array_map(function ($example) use ($content) {
                        echo <<<HTML
                            <div class="example">
                                <a class="link" href="$example->link">$example->title</a>
                                <p class="exampleBody">$example->description</p>
                                <div class="showLink" onclick="clickLink(this);">
                                    {$content->projects->showTitle}
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
    <div class="source">
        <h4 class="sourceTitle"><?php echo $content->source; ?>:</h4>
        <a class="projectLink" href="https://github.com/mohammad-prb/personal-website">
            https://github.com/mohammad-prb/personal-website
        </a>
    </div>
</div>
</body>
<script src="js/main.js"></script>
</html>
