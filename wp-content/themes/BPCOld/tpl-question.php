<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );
/**
 * Template Name: Questions
 */
$us_layout = US_Layout::instance();
get_header();
us_load_template( 'templates/titlebar' );
?>
<!-- MAIN -->
<style>
.alert-con {text-align: center;}
.alert-con>span {display:inline-block;padding:3px 16px;border-radius:6px;color:#fff;background:red;margin-top:10px; }
.uvc-main-heading h2 {font-weight:400!important;}
#section4-container{background:#090909;position:relative;overflow:hidden;color:#CA974D;margin-top:143px;min-height:470px;margin-bottom:40px;}
.not-mobile-device .width-0-479 #section4-container{display:none;}
#section4-container input, #section4-container textarea {width: 100%;background-color: rgba(0,0,0,0.0);border: 0px;padding: 0px 0px;font-size: 23px;color: #000/*#CA974D*/;font-style: normal;font-weight: 500;text-align: center;}
#section4-container textarea {font-size: 25px;height: 160px;padding: 35px;}
#question-19{text-align:center;}
#question-19 .line-1 {font-size:30px;display:block;}
#question-19 .line-2 {font-size:26px;display:block;margin:20px 0;}
.question-container{width:800px;margin: 0 auto;position:absolute;top:100%;-webkit-transition: all .6s ease-in-out;-moz-transition: all .6s ease-in-out;-ms-transition: all .6s ease-in-out;-o-transition: all .6s ease-in-out;transition: all .6s ease-in-out;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter: alpha(opacity=0);-moz-opacity: 0.0;-khtml-opacity: 0.0;opacity: 0.0;left:50%;margin-left:-400px;}
.question-container.paragraph-container{width:900px;margin-left:-450px;}
.question-container.currentQuestion{top:0;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";filter: alpha(opacity=100);-moz-opacity: 1.0;-khtml-opacity: 1.0;opacity: 1.0;}
.question-container.questionCompleted{top:0px;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter: alpha(opacity=0);-moz-opacity: 0.0;-khtml-opacity: 0.0;opacity: 0.0;}
#question-0 .section4-selections{height:300px;width:665px;margin:0 auto;-webkit-border-radius: 33px;border-radius: 33px;position:relative;background:#121010;overflow:hidden;-webkit-box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);}
#question-0 .yes-no-divider-container{height:100%;width:12px;overflow:visible;background: #2B2B2B;position:absolute;top:0px;left:50%;margin-left:-6px;}
#question-0 .yes-no-circle-container{height:80px;width:80px;-webkit-border-radius: 50px;border-radius: 50px;background: #2B2B2B;position:absolute;top:50%;margin-top:-40px;left:50%;margin-left:-40px;padding:10px;}
#question-0 .yes-no-circle-inner{height:60px;width:60px;-webkit-border-radius: 33px;border-radius: 33px;position:relative;background:#1F1F1F;background-image: url('<?php echo get_template_directory_uri()?>/images/yes-no-or.svg');background-repeat:no-repeat;background-position: 11px 11px;overflow:hidden;-webkit-box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);text-align:center;padding:5px;}
a#first-yes {background: url('<?php echo get_template_directory_uri()?>/images/yes-button.svg');width: 173px;height: 205px;background-repeat: no-repeat;position: absolute;left: 84px;top: 48px;}
a#first-no {background: url('<?php echo get_template_directory_uri()?>/images/no-button.svg');width: 173px;height: 210px;background-repeat: no-repeat;position: absolute;left: 425px;top: 48px;}

.yes-no-wrapper{width:353px!important;height:115px;margin:0 auto;position:relative;}
.yes-no-wrapper .answer-yes{position:absolute;left:0px;z-index:1;-webkit-box-shadow: inset 5px 5px 0px 8px rgba(0, 0, 0, 1);box-shadow: inset 5px 5px 0px 8px rgba(0, 0, 0, 1);font-weight:900;}
.yes-no-wrapper .answer-no{position:absolute;   right:0px;z-index:1;-webkit-box-shadow: inset 5px 5px 0px 8px rgba(0, 0, 0, 1);box-shadow: inset 5px 5px 0px 8px rgba(0, 0, 0, 1);font-weight:900;}

.yes-no-or-circle{height:62px;width:62px;position:absolute;left:50%;top:24px;margin-left:-31px;-webkit-border-radius: 33px;border-radius: 33px;background:#1F1F1F;background-image: url('<?php echo get_template_directory_uri()?>/images/yes-no-or.svg');background-repeat:no-repeat;background-position: 11px 14px;overflow:hidden;-webkit-box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);z-index:1;}
.yes-no-or-line{height:3px;width:100%;position:absolute;top:55px;background:#000;z-index: 0;}
.radio-button-text {line-height: 28px;display: inline-block;padding-left: 100px;padding-top: 11px;width:100%;}
.radio-button-outer-circle {height: 58px;width: 58px;top: 22px;position: absolute;-webkit-border-radius: 33px;border-radius: 33px;background: #1F1F1F;overflow: hidden;-webkit-box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);box-shadow: inset 2px 2px 0px 3px rgba(0, 0, 0, 1);z-index: 1;display: inline-block;}
.radio-button-inner-circle{height:24px;width:24px;position:absolute;top:50%;left:50%;margin-top:-12px;margin-left:-12px;-webkit-border-radius: 33px;border-radius: 33px;background:#CA974D;z-index:2;display:none;}
a.radio-button-option:hover .radio-button-inner-circle,  span.radio-button-option:hover .radio-button-inner-circle{display:block;}
a.selection-option.radio-button-option, span.selection-option.radio-button-option  {-webkit-border-radius: 0;border-radius: 0;-webkit-box-shadow: none;box-shadow: none;display: block;width: 100%;height: auto;background: transparent;font-size: 25px;color: #CA974D;font-style: normal;font-weight: 400;text-align: left;position:relative;min-height:87px;}
.section4-input-container{-webkit-border-radius: 33px;border-radius: 33px;background:#cecece;overflow:hidden;-webkit-box-shadow: inset 15px 15px 0px 0px #cac9c9;box-shadow: inset 15px 15px 0px 0px #cac9c9;}
.smartest-input-container{display: inline-block;width: 420px;margin-left: 30px;}
#section4-container .smartest-input-container input{font-size: 24px;text-align: left;padding-left: 20px;}
.section4-selections{width: 700px;margin: 0 auto;}
a.selection-option{-webkit-border-radius: 100px;border-radius: 100px;-webkit-box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);display:inline-block;width:115px;height:115px;background:#121010;font-size: 70px;line-height:106px;color: #CA974D;font-style: normal;font-weight: 700;text-align:center;}
a.number-option {margin-right: 27px;}
a.number-option.last-select-option {margin-right: 0;}

a.selection-option.long-button {padding: 0 30px;font-size: 21px;background: #CA974D;-webkit-border-radius: 29px;border-radius: 29px;-webkit-box-shadow: inset -7px -7px 0px 0px rgba(0, 0, 0, .1);box-shadow: inset -7px -7px 0px 0px rgba(0, 0, 0, .1);font-style: normal;font-weight: 500;width: auto;height: 53px;padding-top: 14px;margin: 0 auto;display: inline-block;color:white;overflow:hidden;line-height:25px;}
a#submitting-button{font-size: 43px;-webkit-border-radius: 54px;border-radius: 54px;-webkit-box-shadow: inset -13px -13px 0px 0px rgba(0, 0, 0, .1);box-shadow: inset -13px -13px 0px 0px rgba(0, 0, 0, .1);font-weight: 500;height: 98px;padding-top: 20px;}
.section4-selections.paragraph-container {-webkit-border-radius: 100px;border-radius: 100px;-webkit-box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);box-shadow: inset 15px 15px 0px 0px rgba(0, 0, 0, 1);background: #121010;padding: 50px 70px;font-size: 36px;font-weight: 300;line-height: 1.38;width:800px;}
.button-container{text-align: center;padding-top: 60px;}
.button-container.not-under-paragraph{padding-top:0px;}
#section4-container input::-webkit-input-placeholder {color: #CA974D;}
#section4-container input:-moz-placeholder { /* Firefox 18- */color: #CA974D;  }
#section4-container input::-moz-placeholder {  /* Firefox 19+ */color: #CA974D;  }
#section4-container input:-ms-input-placeholder {  color: #CA974D;  }
#section4-container textarea::-webkit-input-placeholder {color: #CA974D;}
#section4-container textarea:-moz-placeholder { /* Firefox 18- */color: #CA974D;  }
#section4-container textarea::-moz-placeholder {  /* Firefox 19+ */color: #CA974D;  }
#section4-container textarea:-ms-input-placeholder {  color: #CA974D;  }
#section4-container .section-header{color:#CA974D;}
.question-header{color:#CA974D;text-align:center;font-size:23px;line-height:30px;font-weight: 500;margin-bottom:72px;}
</style>
<div class="l-main">
    <div class="l-main-h i-cf">

        <main class="l-content" role="main" itemprop="mainContentOfPage">

            <?php do_action( 'us_before_page' ) ?>

            <?php the_post(); the_content();?>

            <section id="section4-container" class="clear fill-browser">
                <div id="section4-inner" class="container wrap fill-browser-inner hide-on-mobile">
                    <div id="question-0" class="question-container currentQuestion fill-browser-inner-section4">
                        <div class="question-header">
                            Care to Enter?
                        </div>
                        <div class="section4-selections">
                            <a href="#1" id="first-yes" class="firstQuestion-selection-option yes-no big-buttons ignore-selection" data-answer="yes"></a>
                            <a href="#2" id="first-no" class="firstQuestion-selection-option yes-no big-buttons ignore-selection" data-answer="no"></a>
                            <div class="yes-no-divider-container">
                                <div class="yes-no-circle-container">
                                    <div class="yes-no-circle-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="enter-no" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Well done, you’ve passed the first test by refusing to find out more.  It only makes you that much stronger as a candidate. What is your name?
                        </div>
                        <div class="section4-input-container">
                            <input id="question0" type="text" class="section4-text-input wpcf7-text " name="name" title="Your Name" data-target="#s4-name" />
                        </div>
                    </div>
                    <div id="question-0-1" class="question-container  fill-browser-inner-section4">
                        <div class="question-header">
                            Ok but you fully understand there is no unseeing this part?
                        </div>
                        <div class="section4-selections">
                            <div class="button-container not-under-paragraph">
                                <a href="#1" id="second-yes" class="selection-option long-button ignore-selection" data-answer="yes">Yes</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-0-2" class="question-container paragraph-container fill-browser-inner-section4">
                        <div class="question-header">
                            See the thing is you’re clicking yes pretty quickly and we worry you’re not taking this seriously.  One more time are you sure you want to enter?
                        </div>
                        <div class="section4-selections">
                            <div class="button-container not-under-paragraph">
                                <a href="#join" id="join" class="selection-option long-button ignore-selection" data-answer="join">Yes I want to enter</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-1" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            First off, what’s your name?
                        </div>
                        <div class="section4-input-container">
                            <input type="text" id="sfb-name" class="section4-text-input wpcf7-text validation-required" data-validation="text" name="name" title="Your Name" data-target="#s4-name" />
                        </div>
                        <div class="alert-con"></div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button validation-required" data-target="#sfb-name" data-validation="text">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-2" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            You just give your name to strange websites that easily.  You’re not doing much in the way of convincing us to trust you with our inner most secrets.  Tell you what, no names, tell us what you’d like to be called.
                        </div>
                        <div class="section4-input-container">
                            <input type="text" id="sfb-real-name" class="section4-text-input wpcf7-text validation-required" data-validation="text" name="real_name" title="Try Again?" data-target="#s4-real-name" />
                        </div>
                        <div class="alert-con"></div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button validation-required" data-target="#sfb-real-name" data-validation="text">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-3" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            In case of emergency, at what email address can we reach you in order to ask for a phone number?
                        </div>
                        <div class="section4-input-container">
                            <input type="email" id="sfb-email" class="section4-text-input wpcf7-text validation-required" data-target="#sfb-email" data-validation="email" name="email" title="Email Address" data-target="#s4-email" />
                        </div>
                        <div class="alert-con"></div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button validation-required" data-target="#sfb-email" data-validation="email">Enter</a>
                            </div>
                        </div>
                    </div>
                    <!-- RATE -->
                    <div id="question-4" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Thank you.
                            <br> How would you rate your experience so far?
                        </div>
                        <div class="section4-selections">
                            <a href="#1" class="selection-option number-option" data-target="#s4-experience_1" data-answer="1">1</a>
                            <a href="#2" class="selection-option number-option" data-target="#s4-experience_1" data-answer="2">2</a>
                            <a href="#3" class="selection-option number-option" data-target="#s4-experience_1" data-answer="3">3</a>
                            <a href="#4" class="selection-option number-option" data-target="#s4-experience_1" data-answer="4">4</a>
                            <a href="#5" class="selection-option number-option last-select-option" data-target="#s4-experience_1" data-answer="5">5</a>
                            <div class="dotted-border-container">
                                <div class="dot dot1"></div>
                                <div class="dot dot2"></div>
                                <div class="dot dot3"></div>
                                <div class="dot dot4"></div>
                                <div class="dot dot5"></div>
                            </div>
                        </div>
                    </div>

                    <div id="question-5" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Next question, what is your superpower? You have to be bringing something to the table if we’re going to let you in. At the very least tell us what you’re best at.
                        </div>
                        <div class="section4-input-container">
                            <textarea type="text" id="sfb-superpower" class="section4-text-input wpcf7-text textarea-box validation-required" data-validation="text" name="superpower" data-target="#s4-superpower"></textarea>
                        </div>
                        <div class="alert-con"></div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button validation-required" data-target="#sfb-superpower" data-validation="text">Enter</a>
                            </div>
                        </div>
                    </div>

                    <div id="question-6" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            We ask everyone to freelance with us for the first 6 months – tell us what you think of this
                        </div>
                        <div class="section4-input-container">
                            <textarea type="text" id="sfb-freelance" class="section4-text-input wpcf7-text textarea-box validation-required" data-validation="text" name="freelance" title="What you think of this?" data-target="#s4-freelance"></textarea>
                        </div>
                        <div class="alert-con"></div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button validation-required" data-target="#sfb-freelance" data-validation="text">Enter</a>
                            </div>
                        </div>
                    </div>

                    <div id="question-6-1" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            By looking through our website tell us how you could improve any one of our  products and why.  Also how would you improve this website?
                        </div>
                        <div class="section4-input-container">
                            <textarea id="sfb-improve-web" type="text" class="section4-text-input wpcf7-text textarea-box validation-required" name="improve" title="How would you improve this website?" data-target="#s4-improve-web"></textarea>
                        </div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button ignore-selection" data-target="#sfb-improve-web">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-6-2" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            We have a ‘take as many days off as you need’ policy ( as long as your work is done ) what do you think of this and does that motivate you?
                        </div>
                        <div class="section4-input-container">
                            <textarea id="sfb-take-as-many-days-off" type="text" class="section4-text-input textareab textarea-box validation-required" name="take-as-many-days-off" title="Email Address" data-target="#s4-take-as-many-days-off"></textarea>
                        </div>
                        <div class="section4-selections"><br>
                            <div class="button-container not-under-paragraph">
                                <a href="#enter" class="selection-option long-button ignore-selection" data-raget="#sfb-take-as-many-days-off">Enter</a>
                            </div>
                        </div>
                    </div>
                    <div id="question-7" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Congratulations that’s all we needed.  Before we finally let you know what we offer our people, how would you rate your experience so far
                        </div>
                        <div class="section4-selections">
                            <a href="#1" class="selection-option number-option" data-answer="1" data-target="#s4-experience_2">1</a>
                            <a href="#2" class="selection-option number-option" data-answer="2" data-target="#s4-experience_2">2</a>
                            <a href="#3" class="selection-option number-option" data-answer="3" data-target="#s4-experience_2">3</a>
                            <a href="#4" class="selection-option number-option" data-answer="4" data-target="#s4-experience_2">4</a>
                            <a href="#5" class="selection-option number-option last-select-option" data-answer="5" data7target="#s4-experience_2">5</a>
                            <div class="dotted-border-container">
                                <div class="dot dot1"></div>
                                <div class="dot dot2"></div>
                                <div class="dot dot3"></div>
                                <div class="dot dot4"></div>
                                <div class="dot dot5"></div>
                            </div>
                        </div>
                    </div>
                    <div id="question-7-1" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            So that we know you are not a robot, how many letters are there in the word cat?
                        </div>
                        <div class="section4-input-container">
                            <input type="text" class="section4-text-input wpcf7-text " name="word-cat" title="How many letters are there in the word cat?" data-target="#s4-word-cat" />
                        </div>
                    </div>
                    <div id="question-8" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Last thing before you enter, did it bother you having to jump through so many hoops?
                        </div>
                        <div class="section4-selections yes-no-wrapper">
                            <a href="#1" class="selection-option radio-selection yes-no answer-yes" data-answer="Yes" data-target="#s4-surprised">Y</a>
                            <a href="#2" class="selection-option radio-selection yes-no answer-no" data-answer="No" data-target="#s4-surprised">N</a>
                            <div class="yes-no-or-circle"></div>
                            <div class="yes-no-or-line"></div>
                        </div>
                    </div>
                    <div id="question-9" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Ha! Well guess what, you’re not in. Not until you correctly answer these questions. Which is better?
                        </div>
                        <div class="section4-selections">
                            <a href="#RuttingElks" class="selection-option radio-selection text-option radio-button-option" data-answer="Donald Trump" data-target="#s4-better">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Donald Trump
                                </div>
                            </a>
                            <a href="#BassGuitar" class="selection-option radio-selection text-option radio-button-option" data-answer="Donald Duck" data-target="#s4-better">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Donald Duck
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="question-10" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            How many miles in a marathon?
                        </div>
                        <div class="section4-selections">
                            <a href="#26.2" class="selection-option radio-selection text-option radio-button-option " data-answer="26.2" data-target="#s4-miles_in_marathon">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    26.2
                                </div>
                            </a>
                            <a href="#2" class="selection-option radio-selection text-option radio-button-option" data-answer="2" data-target="#s4-miles_in_marathon">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    2
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="question-11" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Who is the smartest person alive?
                        </div>
                        <div class="section4-selections">
                            <!--a href="#smartest person alive" class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person" data-answer="Exactly the kind of question you would ask the actual smartest person alive">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Exactly the kind of question you would ask the <i>actual</i> smartest person alive
                                </div>
                            </a-->
                            <a href="#Boris Johnson" class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person" data-answer="Boris Johnson">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Boris Johnson
                                </div>
                            </a>
                            <a href="#Stephen Hawking" class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person" data-answer="Stephen Hawking">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Stephen Hawking
                                </div>
                            </a>
                            <a href="#David Beckham" class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person" data-answer="David Beckham">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    David Beckham
                                </div>
                            </a>
                            <a href="#Aunt Mavis" class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person" data-answer="Aunt Mavis">
                                <div class="radio-button-outer-circle">
                                    <div class="radio-button-inner-circle">
                                    </div>
                                </div>
                                <div class="radio-button-text">
                                    Aunt Mavis
                                </div>
                            </a>
                            <span class="selection-option radio-selection text-option radio-button-option" data-target="#s4-smartest_person">
                                <div class="radio-button-outer-circle">
                                <div class="radio-button-inner-circle">
                                </div>
                                </div>
                                <div class="radio-button-text">
                                Other: <div class="section4-input-container smartest-input-container">
                                <input type="text" class="section4-text-input" name="smartest_person_other"  data-target="#s4-smartest-person-other"/>
                                </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div id="question-12" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Name one thing you would introduce into our company if you were the boss
                        </div>
                        <div class="section4-input-container">
                            <input type="text" class="section4-text-input wpcf7-text " name="plant_life_former_president" data-target="#s4-plant_life_former_president" />
                        </div>
                    </div>
                    <div id="question-13" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Very good. How would you rate your experience so far?
                        </div>
                        <div class="section4-selections">
                            <a href="#1" class="selection-option number-option" data-answer="1" data-target="#s4-experience_3">1</a>
                            <a href="#2" class="selection-option number-option" data-answer="2" data-target="#s4-experience_3">2</a>
                            <a href="#3" class="selection-option number-option" data-answer="3" data-target="#s4-experience_3">3</a>
                            <a href="#4" class="selection-option number-option" data-answer="4" data-target="#s4-experience_3">4</a>
                            <a href="#5" class="selection-option number-option last-select-option" data-answer="5" data-target="#s4-experience_3">5</a>
                            <div class="dotted-border-container">
                                <div class="dot dot1"></div>
                                <div class="dot dot2"></div>
                                <div class="dot dot3"></div>
                                <div class="dot dot4"></div>
                                <div class="dot dot5"></div>
                            </div>
                        </div>
                    </div>
                    <div id="question-14" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Are you currently, or have you ever been, a member of any of the following, The Tiddly Wnks Society, The Earthworm Conservation Society, The Blue Peter Club, or the Susan Boyle fan club
                        </div>
                        <div class="section4-selections yes-no-wrapper">
                            <a href="#1" class="selection-option radio-selection yes-no answer-yes" data-answer="Yes" data-target="#s4-member_of">Y</a>
                            <a href="#2" class="selection-option radio-selection yes-no answer-no" data-answer="No" data-target="#s4-member_of">N</a>
                            <div class="yes-no-or-circle"></div>
                            <div class="yes-no-or-line"></div>
                        </div>
                    </div>
                    <?php /*
                    <!--div id="question-14b" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Have you ever been involved in the production or sale of those little miniature cars that Shriners drive during parades?
                        </div>
                        <div class="section4-selections yes-no-wrapper">
                            <a href="#1" class="selection-option radio-selection yes-no answer-yes" data-answer="Yes" data-target="#s4-little-cars">Y</a>
                            <a href="#2" class="selection-option radio-selection yes-no answer-no" data-answer="No" data-target="#s4-little-cars">N</a>
                            <div class="yes-no-or-circle"></div>
                            <div class="yes-no-or-line"></div>
                        </div>
                    </div>
                    <div id="question-15" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            What is the secret password?
                            <br>[Hint: Nice try. There are no hints!]
                        </div>
                        <div class="section4-input-container">
                            <input type="password" class="section4-text-input wpcf7-text " name="secret_password" data-target="#s4-secret_password" />
                        </div>
                    </div>
                    <div id="question-16" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            Please pick any contentious issue of the day, take a side, and state in 100 words or less why you are a fool for taking such a hardline stance in an ever-changing universe.
                        </div>
                        <div class="section4-input-container text-area-container">
                            <textarea name="essay" class="section4-text-input text-area wpcf7-text " data-target="#s4-essay"></textarea>
                        </div>
                    </div>
                    <div id="question-17" class="question-container fill-browser-inner-section4">
                        <div class="question-header">
                            How would you rate your experience so far?
                        </div>
                        <div id="trick-numbers" class="section4-selections">
                            <a href="#1" class="selection-option number-option changing-number" data-answer="5" data-original="1" data-target="#s4-experience_4">1</a>
                            <a href="#2" class="selection-option number-option changing-number" data-answer="5" data-original="2" data-target="#s4-experience_4">2</a>
                            <a href="#3" class="selection-option number-option changing-number" data-answer="5" data-original="3" data-target="#s4-experience_4">3</a>
                            <a href="#4" class="selection-option number-option changing-number" data-answer="5" data-original="4" data-target="#s4-experience_4">4</a>
                            <a href="#5" class="selection-option number-option last-select-option" data-answer="5" data-target="#s4-experience_4">5</a>
                            <div class="dotted-border-container">
                                <div class="dot dot1"></div>
                                <div class="dot dot2"></div>
                                <div class="dot dot3"></div>
                                <div class="dot dot4"></div>
                                <div class="dot dot5"></div>
                            </div>
                        </div>
                    </div-->
                    */ ?>
                    <div id="question-18" class="question-container fill-browser-inner-section4">
                        <div class="button-container not-under-paragraph">
                            <a href="#submit" id="submitting-button" class="selection-option long-button" data-target="#s4-submit">Ok, send my application</a>
                        </div>
                    </div>
                    <div id="question-19" class="question-container fill-browser-inner-section4">
                        <div class="">
<strong class="line-1">WELL DONE - YOU GOT THROUGH</strong>
<strong class="line-2">OK HERE IS WHAT WE OFFER OUR TEAMS</strong>
<p>1. We don’t tie you to an office, work where you like.</p>
<p>2. We don’t tie you to set hours, work when you like</p>
<p>3. We don’t set fixed holidays, take a holiday when you want and as many as you want Just as long as you get the job done and work well in a team. We believe it’s our friendly environment, flexible work practices and our commitment to making sure that our people are happy, healthy and enthusiastic, that is what really sets us apart.</p>
<br>
<strong>Are you still interested?</strong><br>
Then send us your CV and anything else you think we need to see
                        </div>
                    </div>
                </div>
                
            </section>
            <!-- #section4-container -->
            <?php echo do_shortcode('[contact-form-7 id="693" title="General Form"]')?>

            <?php do_action( 'us_after_page' ) ?>

        </main>

        <?php if ( $us_layout->sidebar_pos == 'left' OR $us_layout->sidebar_pos == 'right' ): ?>
            <aside class="l-sidebar at_<?php echo $us_layout->sidebar_pos ?><?php echo generated_dynamic_sidebar_class() ?>" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
                <?php generated_dynamic_sidebar(); ?>
            </aside>
        <?php endif; ?>

    </div>
</div>
<script>
    function section4_data() {
        console.log('Loaded');
        jQuery(".section4-text-input").keyup(function(event){
            if(event.keyCode == 13){
                validateDone = true;
                
                

                if (jQuery(this).hasClass('validation-required')){
                    if (jQuery(this).hasClass('textarea-box')){
                        validateDone = false;
                    } else {
                        if (doValidate(jQuery(this))){
                            validateDone = false;
                        }
                    }
                }

                if (validateDone){
                    $container = jQuery(this).closest('.question-container');
                    $container.addClass('questionCompleted');
                    $container.removeClass('questionNotCompleted');
                    $container.removeClass('currentQuestion');
                    
                    if (jQuery(this).attr('id') == 'question0') {
                        console.log('true');
                        $nextQuestion = jQuery( '#question-2' );
                    } else {
                        $nextQuestion = $container.next( '.question-container' );
                    };
                    
                    $nextQuestion.addClass('currentQuestion');
                    $nextInput = $nextQuestion.find('.section4-input-container input');
                    $nextInput.select();
            
                    $formTarget = jQuery(this).data('target');
                    $enteredValue = jQuery($formTarget).val();
                    $newFormTarget = $formTarget.replace('sfb-', 's4-');
                    console.log($formTarget);
                    console.log($newFormTarget);
                    console.log($enteredValue);
                    jQuery($newFormTarget).val($enteredValue);
                    console.log(jQuery($formTarget).val());
                    console.log("------------");
                    
                    /*
                    $enteredValue = jQuery(this).val();
                    jQuery($formTarget).val($enteredValue);
                    */
                }
            }
        });
        
         
        jQuery('a.selection-option').unbind('click');
        jQuery('a.selection-option').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $formTarget = jQuery(this).data('target');
            $dataAnswer = jQuery(this).data('answer');
            $canGoNext = true;
            if ($formTarget == "#s4-submit") {
                jQuery('#s4-submit').click();
            } else {
                if (!jQuery(this).hasClass('ignore-selection')) {
                        if (jQuery(this).hasClass('validation-required')){
                            if (doValidate(jQuery(this))){
                                $canGoNext = false;
                            }else{
                                $canGoNext = true;
                                $enteredValue = jQuery($formTarget).val();
                                $newFormTarget = $formTarget.replace('sfb-', 's4-');
                                console.log($newFormTarget);
                                console.log($enteredValue);
                                jQuery($newFormTarget).val($enteredValue);
                                console.log(jQuery($formTarget).val());
                            }
                        } else if (jQuery(this).hasClass('radio-selection')) {
                            $newThis = jQuery($formTarget).find('input');
                            $dataAnswer = '[value="' + $dataAnswer + '"]';
                            jQuery($newThis).filter($dataAnswer).prop('checked', true);
                        } else {
                            jQuery($formTarget)[0].selectedIndex = $dataAnswer - 1;
                            /*jQuery($formTarget).prop('checked',true);*/
                            jQuery($formTarget).attr("selected","selected");
                        };
                        console.log("Form Target: " + $formTarget);
                        console.log("------------");
                };
            };
            
            if ($canGoNext){
                jQuery(this).addClass('optionSelected');
                $container = jQuery(this).closest('.question-container');
                $container.addClass('questionCompleted');
                $container.removeClass('questionNotCompleted');
                $container.removeClass('currentQuestion');
                $nextQuestion = $container.next( '.question-container' );
                $nextQuestion.addClass('currentQuestion');
                $nextInput = $nextQuestion.find('.section4-input-container input');
                $nextInput.select();
            }
        });
        
        jQuery('a.firstQuestion-selection-option').unbind('click');
        jQuery('a.firstQuestion-selection-option').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            
             $container = jQuery(this).closest('.question-container');
             $container.removeClass('currentQuestion');
             $container.addClass('questionCompleted');
            
             
             /*if($isMobile || (jQuery('body').hasClass('width-0-479'))){
                 
                if (jQuery(this).data('answer') == 'yes') {
                    jQuery('#mobile-question-0-1').addClass('currentQuestion');
                } else {
                    jQuery('#mobile-question-0-2').addClass('currentQuestion');
                }
                 
                 
             } else {*/
                if (jQuery(this).data('answer') == 'yes') {
                    jQuery('#question-0-1').addClass('currentQuestion');
                } else {
                    jQuery('#enter-no').addClass('currentQuestion');
                }
             //}
                
            
            
        });
    }

    function doValidate($this){
        $newThis = jQuery($this.data('target'));
        $newThis.parents('.question-container').find('.alert-con').html('');
        $dataValidate = $this.data('validation');
        if ($dataValidate=="email"){
            var dataText = $newThis.val();
            var emailReg = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            if ( !emailReg.test(dataText) ){
                $newThis.parents('.question-container').find('.alert-con').html('<span>Invalid Email Address.</span>');
                return true;
            }
        }
        if ($dataValidate=="text"){
            var dataText = $newThis.val();
            if ( jQuery.trim(dataText).length<=0 ){
                $newThis.parents('.question-container').find('.alert-con').html('<span>Required.</span>');
                return true;
            }
        }
        //return false;
        return false;
    }

    jQuery(document).ready(function(){
        section4_data();
    });
</script>
<?php get_footer() ?>