<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digi Inc</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header, footer {
            background-color: #f8f9fa;
            padding: 10px;
        }
        .logo img {
            width: 150px;
        }
        nav button {
            margin: 0 5px;
            padding: 5px 10px;
        }
        .hero, .events, .discussion, .members, .photos {
            margin: 20px;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }
        .login-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }
        .login-form input, .login-form button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
        }
        .login-form input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
        .joms-avatar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .joms-list--thumbnail {
            list-style-type: none;
            padding: 0;
        }
        .joms-list__item {
            display: inline-block;
            margin-right: 10px;
        }
        .joms-icon {
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div id="sp-logo" class="col-auto">
            <div class="sp-column">
                <div class="logo"><a href="/digiinc/">
        <img class="logo-image  d-none d-lg-inline-block" srcset="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 1x, https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 2x" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" height="60px" alt="My Joomla">
        <img class="logo-image-phone d-inline-block d-lg-none" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" alt="My Joomla"></a></div>						
            </div>
        </div>
        <nav>
            <button>Login</button>
            <button>Register</button>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Get Connected!</h1>
            <p>Come and join our community. Expand your network and get to know new people!</p>
            <button>Register Account</button>
        </section>

        <section class="login-form">
            <form>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <div>
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Username?</a>
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </section>

        <div class="joms-stream__body">
            <div class="joms-media like">
                <a href="/digiinc/index.php/colab/events/viewevent/1-women-in-tech-experience-2023">
                    <div class="joms-media__cover">
                        <div class="joms-focus__date cover">
                            <span>Oct</span>
                            <span>18</span>
                        </div>
                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/cover-event.png" alt="Women in Tech Experience 2023">
                    </div>
                </a>
                <h4 class="joms-text--title"><a href="/digiinc/index.php/colab/events/viewevent/1-women-in-tech-experience-2023">Women in Tech Experience 2023</a></h4>
                <p class="joms-text--desc">This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement</p>
                <ul class="joms-list">
                    <li class="joms-list__item">
                        <svg viewBox="0 0 16 18" class="joms-icon">
                            <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-calendar"></use>
                        </svg>
                        Wednesday, 18 October 2023 09:00 AM
                    </li>
                    <li class="joms-list__item">
                        <svg viewBox="0 0 16 16" class="joms-icon">
                            <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-location"></use>
                        </svg>
                        Johannesburg, South Africa
                    </li>
                </ul>
            </div>
        </div>
        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-6" data-stream-id="6" data-stream-type="events">
            <div class="joms-list__options">
                <ul class="joms-dropdown"></ul>
            </div>
            <div class="joms-stream__header">
                <div class="joms-avatar--stream">
                    <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator">
                        <img data-author="103" src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Digi Inc">
                    </a>
                </div>
                <div class="joms-stream__meta">
                    <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" class="joms-stream__user">Digi Inc</a>
                    added a new event
                    <span class="joms-stream__time"><small>9 months ago</small></span>
                </div>
            </div>
            <div class="joms-stream__body">
                <div class="joms-media">
                    <h4 class="joms-text--title"><a href="/digiinc/index.php/colab/events/viewevent/1-women-in-tech-experience-2023">Women in Tech Experience 2023</a></h4>
                    <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement, envisioning a world where...</p>
                    <ul class="joms-list">
                        <li class="joms-list__item">
                            <svg viewBox="0 0 16 18" class="joms-icon">
                                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-calendar"></use>
                            </svg>
                            Wednesday, 18 October 2023 09:00 AM
                        </li>
                        <li class="joms-list__item">
                            <svg viewBox="0 0 16 16" class="joms-icon">
                                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-location"></use>
                            </svg>
                            Johannesburg, South Africa
                        </li>
                    </ul>
                </div>
            </div>
            <div class="joms-stream__actions">
                <!-- share -->
            </div>
            <div class="joms-stream__status">
                <div class="joms-stream__reactions">
                    <ul class="joms-reactions__list">
                        <li style="z-index: 100;">
                            <div class="joms-reactions__item reaction-like" title="1 people" data-count="1" data-reactid="1" data-uid="1" onclick="joms.popup.reaction('events', 1, 1)">
                            </div>
                        </li>
                    </ul>
                    <a class="joms-stream__reactions-text" href="javascript:;" onclick="joms.popup.reaction('events', 1)">Taks the Dev</a>
                </div>
            </div>
        </div>

        <section class="events">
            <h2>Women in Tech Experience 2023</h2>
            <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement.</p>
            <p><strong>Date:</strong> 18 October 2023</p>
            <p><strong>Location:</strong> Johannesburg, South Africa</p>
        </section>


        <div class="joms-comment joms-js--comments joms-js--comments-6" data-id="6">
    
        </div>            </div>
                                        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-5 " data-stream-id="5" data-stream-type="friends.connect">
            <div class="joms-stream__body no-head">
        <p>
        <svg viewBox="0 0 16 16" class="joms-icon">
        <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-user"></use>
        </svg>
        <b><a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">Taks the Dev</a></b> is friends with <b><a href="/digiinc/index.php/cowork/profile/edit-profile/107-mathapelo">Mathapelo</a></b>    </p>
        
        <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        </div>            </div>
                                        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-4 " data-stream-id="4" data-stream-type="profile">
            <div class="joms-stream__header">
        <div class="joms-avatar--stream ">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
            <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
        </a>
        </div>
        <div class="joms-stream__meta">
        
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" data-joms-username="" class="joms-stream__user active">Taks the Dev</a>
        
        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev?actid=4" style="display: inherit;">
        <span class="joms-stream__time">
            <small>9 months ago </small>
                                
        <svg viewBox="0 0 16 16" class="joms-icon joms-show-earth">
        <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-earth"></use>
        </svg>
                        </span>
        </a>
        </div>
        
        
        <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        
        </div>
        <div class="joms-stream__body">
        
        <div data-type="stream-editor" class="cStream-Respond" style="display:none">
        <textarea class="joms-textarea" style="margin-bottom:0">I need help editing pictures.</textarea>
        <div style="text-align:right;">
        <button class="joms-button--neutral joms-button--small" onclick="joms.view.stream.cancel('4');">Cancel</button>&nbsp;
        <button class="joms-button--primary joms-button--small" onclick="joms.view.stream.save('4', this);">Save</button>
        </div>
        </div>
        
        <p data-type="stream-content">
            <span class="joms-js--stream-text-4">I need help editing pictures.</span>            </p>
        
        <!-- Fetched data -->
        </div>
        
        
        <div class="joms-stream__actions">
        <!-- share -->
        
        </div>
        
                <div class="joms-stream__status" style="display:none;">
                </div>
        
        
        <div class="joms-comment joms-js--comments joms-js--comments-4" data-id="4">
        
        </div>            </div>
                                        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-3 " data-stream-id="3" data-stream-type="groups.wall">
            <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        
        
        <div class="joms-stream__header">
        <div class="joms-avatar--stream ">
            <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
        <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
        </a>
        </div>
        <div class="joms-stream__meta">
        
            <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" data-joms-username="" class="joms-stream__user">Taks the Dev</a>
                <span class="joms-stream__reference">
            <span class="joms-stream__arrow-right">▶</span> <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a>
        </span>
        
            <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development?actid=3">
            <span class="joms-stream__time">
        <small>9 months ago </small>
        
        </span>
                </a>
            </div>
        
        
        <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        
        </div>
        <div class="joms-stream__body">
        
        <div data-type="stream-editor" class="cStream-Respond" style="display:none">
        <textarea class="joms-textarea" style="margin-bottom:0">I need help with include(); function. It's not returning the correct values</textarea>
        <div style="text-align:right;">
        <button class="joms-button--neutral joms-button--small" onclick="joms.view.stream.cancel('3');">Cancel</button>&nbsp;
        <button class="joms-button--primary joms-button--small" onclick="joms.view.stream.save('3', this);">Save</button>
        </div>
        </div>
        
        <p data-type="stream-content">
                <span class="joms-js--stream-text-3">I need help with include(); function. It's not returning the correct values</span>            </p>
        
        <!-- Fetched data -->
        </div>
        
        
        <div class="joms-stream__actions">
        <!-- share -->
        
        </div>
        
                <div class="joms-stream__status" style="display:none;">
                </div>
        
        
        <div class="joms-comment joms-js--comments joms-js--comments-3" data-id="3">
        
                
        <div class="joms-comment__item joms-js--comment joms-js--comment-1" data-id="1" data-parent="3" data-comment-id="1" data-stream-id="3">
        <div class="joms-comment__header">
        <div class="joms-avatar--comment ">
        <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator">
            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Digi Inc" data-author="103">
        </a>
        </div>
        <div class="joms-comment__body joms-js--comment-body">
        <a class="joms-comment__user" href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" id="wall-id-1">Digi Inc</a>
        <span class="joms-js--comment-content"><span class="joms-js--comment-text-1">Have you tried clearing the cache?</span></span>
        
        <span class="joms-comment__time"><small>9 months ago </small></span>
        
                    
        </div>
        </div>
        <div class="joms-comment__reply joms-js--comment-editor">
        <div class="joms-textarea__wrapper" style="display:block">
        <div class="joms-textarea joms-textarea__beautifier"></div>
        <textarea class="joms-textarea" name="comment" data-id="1" data-edit="1" placeholder="Add a comment">Have you tried clearing the cache?</textarea>
        <div class="joms-textarea__loading"><img src="/digiinc/components/com_community/assets/ajax-loader.gif" alt="loader"></div>
        <div class="joms-textarea joms-textarea__attachment" data-no_thumb="1">
            <button onclick="joms.view.comment.removeAttachment(this);">×</button>
            <div class="joms-textarea__attachment--loading"><img src="/digiinc/components/com_community/assets/ajax-loader.gif" alt="loader"></div>
            <div class="joms-textarea__attachment--thumbnail">
                <img alt="Attachment">
            </div>
        </div>
        </div>
        
        <div class="joms-icon joms-icon--emoticon">
        <div style="position:relative">
            <svg viewBox="0 0 16 16" onclick="joms.view.comment.showEmoticonBoard(this);">
                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-smiley"></use>
            </svg>
        </div>
        </div>
        
        <svg viewBox="0 0 16 16" class="joms-icon joms-icon--add" onclick="joms.view.comment.addAttachment(this);" style="right:24px">
        <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-camera"></use>
        </svg>
        <div style="text-align:right;margin-top:4px">
        <button class="joms-button--small joms-button--neutral" onclick="joms.view.comment.cancel('1');">Cancel</button>
        <button class="joms-button--small joms-button--primary joms-js--btn-send">Send</button>
        </div>
        </div>
        </div>
        
        <div class="joms-comment__item joms-js--comment joms-js--comment-2" data-id="2" data-parent="3" data-comment-id="2" data-stream-id="3">
        <div class="joms-comment__header">
        <div class="joms-avatar--comment ">
        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev" data-author="105">
        </a>
        </div>
        <div class="joms-comment__body joms-js--comment-body">
        <a class="joms-comment__user" href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" id="wall-id-2">Taks the Dev</a>
        <span class="joms-js--comment-content"><span class="joms-js--comment-text-2">oh thanks!!!! I'll try just now.</span></span>
        
        <span class="joms-comment__time"><small>9 months ago </small></span>
        
                    
        </div>
        </div>
        <div class="joms-comment__reply joms-js--comment-editor">
        <div class="joms-textarea__wrapper" style="display:block">
        <div class="joms-textarea joms-textarea__beautifier"></div>
        <textarea class="joms-textarea" name="comment" data-id="2" data-edit="1" placeholder="Add a comment">oh thanks!!!! I'll try just now.</textarea>
        <div class="joms-textarea__loading"><img src="/digiinc/components/com_community/assets/ajax-loader.gif" alt="loader"></div>
        <div class="joms-textarea joms-textarea__attachment" data-no_thumb="1">
            <button onclick="joms.view.comment.removeAttachment(this);">×</button>
            <div class="joms-textarea__attachment--loading"><img src="/digiinc/components/com_community/assets/ajax-loader.gif" alt="loader"></div>
            <div class="joms-textarea__attachment--thumbnail">
                <img alt="Attachment">
            </div>
        </div>
        </div>
        
        <div class="joms-icon joms-icon--emoticon">
        <div style="position:relative">
            <svg viewBox="0 0 16 16" onclick="joms.view.comment.showEmoticonBoard(this);">
                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-smiley"></use>
            </svg>
        </div>
        </div>
        
        <svg viewBox="0 0 16 16" class="joms-icon joms-icon--add" onclick="joms.view.comment.addAttachment(this);" style="right:24px">
        <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-camera"></use>
        </svg>
        <div style="text-align:right;margin-top:4px">
        <button class="joms-button--small joms-button--neutral" onclick="joms.view.comment.cancel('2');">Cancel</button>
        <button class="joms-button--small joms-button--primary joms-js--btn-send">Send</button>
        </div>
        </div>
        </div>
        </div>            </div>
                                        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-2 " data-stream-id="2" data-stream-type="groups">
            <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        
           
        <div class="joms-stream__header">
        <div class="joms-avatar--stream ">
        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
        <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev"></a>
        </div>
        <div class="joms-stream__meta">
        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user">Taks the Dev</a>
        <span> created a new group</span>
        <span class="joms-stream__time">
        <small>9 months ago </small>
        </span>
        </div>
        </div>
        
        <div class="joms-stream__body">
        <div class="joms-media">
        <h4 class="joms-text--title"><a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a></h4>
        <span>A discussion group about PHP</span>
        </div>
        </div>
        
        
        <div class="joms-stream__actions">
        <!-- share -->
        
        </div>
        
                <div class="joms-stream__status" style="display:none;">
                </div>
        
        
        <div class="joms-comment joms-js--comments joms-js--comments-2" data-id="2">
        
        </div>            </div>
                                        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-1 " data-stream-id="1" data-stream-type="profile">
            <div class="joms-stream__header">
        <div class="joms-avatar--stream ">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
            <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
        </a>
        </div>
        <div class="joms-stream__meta">
        
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" data-joms-username="" class="joms-stream__user active">Taks the Dev</a>
        
        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev?actid=1" style="display: inherit;">
        <span class="joms-stream__time">
            <small>9 months ago </small>
                                
        <svg viewBox="0 0 16 16" class="joms-icon joms-show-earth">
        <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-earth"></use>
        </svg>
                        </span>
        </a>
        </div>
        
        
        <div class="joms-list__options">
        
        
        <ul class="joms-dropdown">
        
        
        
        
        
        
        
        
        
        
        </ul>
        
        </div>
        
        </div>
        <div class="joms-stream__body">
        
        <div data-type="stream-editor" class="cStream-Respond" style="display:none">
        <textarea class="joms-textarea" style="margin-bottom:0">I need help with PHP</textarea>
        <div style="text-align:right;">
        <button class="joms-button--neutral joms-button--small" onclick="joms.view.stream.cancel('1');">Cancel</button>&nbsp;
        <button class="joms-button--primary joms-button--small" onclick="joms.view.stream.save('1', this);">Save</button>
        </div>
        </div>
        
        <p data-type="stream-content">
            <span class="joms-js--stream-text-1">I need help with PHP</span>            </p>
        
        <!-- Fetched data -->
        </div>
        
        
        <div class="joms-stream__actions">
        <!-- share -->
        
        </div>
        
                <div class="joms-stream__status" style="display:none;">
                </div>
        
        
        <div class="joms-comment joms-js--comments joms-js--comments-1" data-id="1">
        
        </div>            </div>
        
        </div>
        <!-- end: .joms-stream__container -->
        
        
        
        
        </div>
        <!-- end: .joms-stream__wrapper -->
        </div>
        
        </div>
        </div>
        
        <script>
            joms_filter_params = {"filter":"","value":"default_value","hashtag":false};
        </script>
        
        </div></div>
        <script>window.joms && joms.fixUI && joms.fixUI();</script>
        
        
                </div>
        </main>
        </div>
                                                </div>
                    </div>
                            
        </section>
        <footer id="sp-footer">
        
                            <div class="container">
                    <div class="container-inner">

        <section class="discussion">
            <h2>PHP Development</h2>
            <p>I need help with <code>include()</code> function. It's not returning the correct values.</p>
        </section>

        <section class="members">
            <h2>JS Members</h2>
            <div class="joms-module__wrapper">
                <div class="joms-tab__bar">
                    <a href="#joms-app--129" class="active">
                        JS Members
                    </a>
                </div>

                <div id="joms-app--129" class="joms-tab__content">
                    <div class="joms-module">
                        <div class="joms-js--member-module">
                            <div class="joms-gap"></div>
                            <ul class="joms-list--thumbnail clearfix">
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/119-siyabonga">
                                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_3fdff448767f45551b3a2996.jpg" title="Siyabonga" alt="Siyabonga" data-author="119">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/118-zorro">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Zorro" alt="Zorro" data-author="118">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/117-roboto">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Roboto" alt="Roboto" data-author="117">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/116-flamingo">
                                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_8dac66e795b4c72b133c7fb2.png" title="Flamingo" alt="Flamingo" data-author="116">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/115-clare">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Clare" alt="Clare" data-author="115">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/114-kingsley">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Kingsley" alt="Kingsley" data-author="114">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/113-zero">
                                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_0d3aea357f1befbda94e6e10.jpg" title="Zero" alt="Zero" data-author="113">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/112-loni-hutchison">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Loni Hutchison" alt="Loni Hutchison" data-author="112">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/111-lerato">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Lerato" alt="Lerato" data-author="111">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/110-kamogelo-ngwenya">
                                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_d5d33adc6fb566144ef37670.jpg" title="Kamogelo Ngwenya " alt="Kamogelo Ngwenya " data-author="110">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/109-sizwe-mzansi">
                                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" title="Sizwe Mzansi" alt="Sizwe Mzansi" data-author="109">
                                        </a>
                                    </div>
                                </li>
                                <li class="joms-list__item joms-list__item--0">
                                    <div class="joms-avatar">
                                        <a href="/digiinc/index.php/cowork/profile/edit-profile/108-elsa">
                                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_89b96da3842d0597fd69a272.jpg" title="Elsa" alt="Elsa" data-author="108">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="joms-module__wrapper">
            <div class="joms-tab__bar">
                <a class="active" href="#joms-app--136">JS Photos</a>
                <a href="#joms-app--142">JS Videos</a>
            </div>
        
            <div id="joms-app--136" class="joms-tab__content">
                <div class="joms-module">
                    <ul class="joms-list--thumbnail">
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('40', '6');">
                                <img title="Uploaded by Siyabonga" src="https://radapps.co.za/digiinc/images/avatar/thumb_a45a72dd30f336eed66ded609c40aa18.jpg" alt="Siyabonga">
                            </a>
                        </li>
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('32', '5');">
                                <img title="Uploaded by Flamingo" src="https://radapps.co.za/digiinc/images/avatar/thumb_7afd0eceea70c74f9c75fb4a950b98fd.png" alt="Flamingo">
                            </a>
                        </li>
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('29', '4');">
                                <img title="Uploaded by Zero" src="https://radapps.co.za/digiinc/images/avatar/thumb_910a7762056ff0a32502045b33641ebd.jpg" alt="Zero">
                            </a>
                        </li>
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('20', '3');">
                                <img title="Uploaded by Kamogelo Ngwenya" src="https://radapps.co.za/digiinc/images/avatar/thumb_d8b16c807d47ef139802a298f7658ce9.jpg" alt="Kamogelo Ngwenya">
                            </a>
                        </li>
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('10', '2');">
                                <img title="Uploaded by Mathapelo" src="https://radapps.co.za/digiinc/images/avatar/thumb_0ff8dc39d41e9ed2eff5f04941374840.png" alt="Mathapelo">
                            </a>
                        </li>
                        <li class="joms-list__item">
                            <a href="javascript:" onclick="joms.api.photoOpen('2', '1');">
                                <img title="Uploaded by Taks the Dev" src="https://radapps.co.za/digiinc/images/avatar/thumb_a0f6fb3384b99f1f835911df865ac010.png" alt="Taks the Dev">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="joms-app--142" class="joms-tab__content" style="display:none">
                <div class="joms-module">
                    <div class="joms-module joms-js--video-module">
                        <div class="joms-blankslate">No public videos available.</div>
                    </div>
                    <div class="joms-gap"></div>
                    <a href="/digiinc/index.php/colab/videos" class="joms-button--link">
                        <small>View all videos</small>
                    </a>
        
                    <script>
                        (function (w) {
                            w.joms_queue || (w.joms_queue = []);
                            w.joms_queue.push(function ($) {
                                var $ct = $('#latest-videos-nav'),
                                    $loading = $ct.find('.joms-js--loading');
        
                                function render(json) {
                                    $list = $('.joms-js--video-module').find('.joms-list--half');
                                    $list.html(json.html || '&nbsp;');
                                }
        
                                $ct.on('click', '.newest-videos', function (e) {
                                    $loading.show();
                                    joms.ajax({
                                        func: 'frontpage,ajaxGetNewestVideos',
                                        data: [frontpageVideos],
                                        callback: function (json) {
                                            $(e.target).addClass('active-state').siblings('a').removeClass('active-state');
                                            $loading.hide();
                                            render(json);
                                        }
                                    });
                                });
        
                                $ct.on('click', '.featured-videos', function (e) {
                                    $loading.show();
                                    joms.ajax({
                                        func: 'frontpage,ajaxGetFeaturedVideos',
                                        data: [frontpageVideos],
                                        callback: function (json) {
                                            $(e.target).addClass('active-state').siblings('a').removeClass('active-state');
                                            $loading.hide();
                                            render(json);
                                        }
                                    });
                                });
        
                                $ct.on('click', '.popular-videos', function (e) {
                                    $loading.show();
                                    joms.ajax({
                                        func: 'frontpage,ajaxGetPopularVideos',
                                        data: [frontpageVideos],
                                        callback: function (json) {
                                            $(e.target).addClass('active-state').siblings('a').removeClass('active-state');
                                            $loading.hide();
                                            render(json);
                                        }
                                    });
                                });
                            });
                        })(window);
                    </script>
                </div>
            </div>

            
<div class="joms-body">

    <div class="joms-sidebar">

<div class="joms-module__wrapper"><div class="joms-tab__bar">
    <a class="active" href="#joms-app--125">JS Events</a>
<a href="#joms-app--127">JS Groups</a>
<a href="#joms-app--133">JS Pages</a>
</div>

<div id="joms-app--125" class="joms-tab__content">
<div class="joms-module">

<div class="joms-blankslate">Sorry, we currently have no events.</div>

<small><a class="joms-button--link" href="/digiinc/index.php/colab/events">View All Events</a></small>


</div>        </div>
<div id="joms-app--127" class="joms-tab__content" style="display:none">
<div class="joms-module">

<ul class="joms-list--group">

<li class="joms-stream__header no-gap">
<div class="joms-popover__avatar">
<div class="joms-avatar">
<img src="https://radapps.co.za/digiinc/components/com_community/assets/group_thumb.png" alt="PHP Development">
</div>
</div>
<div class="joms-popover__content">
<h5 class="reset-gap"><a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a></h5>
<div class="joms-gap--small"></div>
<div>
<ul class="joms-list joms-list--inline joms-text--light">
<li>
<svg class="joms-icon" viewBox="0 0 14 20">
    <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-users"></use>
</svg>
1                        </li>
<li>
<svg class="joms-icon" viewBox="0 0 14 20">
    <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-eye"></use>
</svg>
6                        </li>
<li>
<svg class="joms-icon" viewBox="0 0 14 20">
    <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-bubble"></use>
</svg>
0                        </li>
<li>
<svg class="joms-icon" viewBox="0 0 14 20">
    <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-pencil"></use>
</svg>
0                        </li>
</ul>
</div>
</div>
</li>
</ul>


<div class="joms-gap"></div>
<a href="/digiinc/index.php/colab/groups" class="joms-button--link"><small>View all groups</small></a>
</div>        </div>
<div id="joms-app--133" class="joms-tab__content" style="display:none">
<div class="joms-module">
<div class="joms-blankslate">No pages created yet</div>

<div class="joms-gap"></div>
<a href="/digiinc/index.php/colab/pages" class="joms-button--link"><small>View all pages</small></a>
</div>        </div>

</div>

</div>
    </main>

    <footer>
        <p>&copy; 2023 The Digi Inc. All rights reserved.</p>
    </footer>
</body>
</html>