<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digi Inc</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }
        header, footer {
            background-color: #0056b3; /* Dark blue */
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        .logo img {
            width: 150px;
        }
        nav button {
            margin: 0 5px;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            background-color: #0056b3; /* Dark blue */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        nav button:hover {
            background-color: #004494; /* Slightly darker blue */
        }
        .hero {
            text-align: center;
            background: linear-gradient(to right, #0056b3, #004494); /* Dark blue gradient */
            color: white;
            padding: 60px 20px;
            border-radius: 0 0 15px 15px;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .hero button {
            background-color: #ffffff;
            color: #0056b3; /* Dark blue */
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #f1f1f1;
        }
        .login-form {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0056b3; /* Dark blue */
        }
        .login-form input, .login-form button {
            display: block;
            width: calc(100% - 20px);
            margin: 10px auto;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        .login-form input:focus {
            border-color: #0056b3; /* Dark blue */
            outline: none;
        }
        .login-form button {
            background-color: #0056b3; /* Dark blue */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-form button:hover {
            background-color: #004494; /* Slightly darker blue */
        }
        .login-form div {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .login-form a {
            color: #0056b3; /* Dark blue */
            text-decoration: none;
            font-size: 0.9rem;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
        .events {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .events h2 {
            color: #0056b3; /* Dark blue */
            font-size: 2rem;
            margin-bottom: 15px;
        }
        .events p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .events img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .events .details {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        .events .details div {
            flex: 1;
            min-width: 200px;
            background-color: #0056b3; /* Dark blue */
            color: white;
            padding: 10px;
            border-radius: 8px;
        }
        .events .details div h4 {
            margin: 0;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <header>
        <div id="sp-logo" class="col-auto">
            <div class="sp-column">
                <div class="logo">
                    <a href="/digiinc/">
                        <img class="logo-image d-none d-lg-inline-block" srcset="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 1x, https://radapps.co.za/digiinc/images/digi-inc-logo-01.png 2x" src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" height="60px" alt="Digi Inc Logo">
                    </a>
                </div>						
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <h1>Get Connected!</h1>
            <p>Come and join our community. Expand your network and get to know new people!</p>
            <button>Register Account</button>
        </section>

        <section class="login-form">
            <h2>Login</h2>
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

        <section class="events">
            <h2>Women in Tech Experience 2023</h2>
            <img src="https://radapps.co.za/digiinc/components/com_community/assets/cover-event.png" alt="Women in Tech Experience 2023">
            <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement.</p>
            <div class="details">
                <div>
                    <h4>Date</h4>
                    <p>18 October 2023</p>
                </div>
                <div>
                    <h4>Location</h4>
                    <p>Johannesburg, South Africa</p>
                </div>
            </div>
            <p>Join us for an inspiring event that brings together women in tech to share their experiences, network, and empower each other.</p>
        </section>
    </main>

    <title>Discussion Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .joms-stream {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 15px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .joms-stream__header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .joms-avatar--stream img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .joms-stream__meta {
            margin-left: 10px;
        }
        .joms-stream__user {
            font-weight: bold;
            color: #0056b3; /* Kught blue color */
            text-decoration: none;
        }
        .joms-stream__user:hover {
            text-decoration: underline;
        }
        .joms-stream__time small {
            color: #888;
        }
        .joms-textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .joms-button--neutral, .joms-button--primary {
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px;
        }
        .joms-button--neutral {
            background-color: #f0f0f0;
            color: #333;
        }
        .joms-button--primary {
            background-color: #0056b3; /* Kught blue color */
            color: #fff;
        }
        .joms-button--primary:hover {
            background-color: #004494; /* Darker shade of kught blue */
        }
        .joms-icon {
            width: 16px;
            height: 16px;
            vertical-align: middle;
        }
        .joms-dropdown {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .joms-dropdown li {
            padding: 5px;
            cursor: pointer;
        }
        .joms-dropdown li:hover {
            background-color: #f0f0f0;
        }
        .joms-comment {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }
        .joms-comment__header {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .joms-comment__body {
            margin-left: 50px;
        }
        .joms-comment__user {
            font-weight: bold;
            color: #0056b3; /* Kught blue color */
            text-decoration: none;
        }
        .joms-comment__user:hover {
            text-decoration: underline;
        }
        .joms-comment__time small {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-5" data-stream-id="5" data-stream-type="friends.connect">
        <div class="joms-stream__body no-head">
            <p>
                <svg viewBox="0 0 16 16" class="joms-icon">
                    <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-user"></use>
                </svg>
                <b><a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user">Taks the Dev</a></b> is friends with <b><a href="/digiinc/index.php/cowork/profile/edit-profile/107-mathapelo" class="joms-stream__user">Mathapelo</a></b>
            </p>
            <div class="joms-list__options">
                <ul class="joms-dropdown">
                    <!-- Options here -->
                </ul>
            </div>
        </div>
    </div>

    <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-4" data-stream-id="4" data-stream-type="profile">
        <div class="joms-stream__header">
            <div class="joms-avatar--stream">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                    <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
                </a>
            </div>
            <div class="joms-stream__meta">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user active">Taks the Dev</a>
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev?actid=4">
                    <span class="joms-stream__time">
                        <small>9 months ago</small>
                        <svg viewBox="0 0 16 16" class="joms-icon joms-show-earth">
                            <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-earth"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="joms-stream__body">
            <div data-type="stream-editor" class="cStream-Respond" style="display:none">
                <textarea class="joms-textarea" style="margin-bottom:0">I need help editing pictures.</textarea>
                <div style="text-align:right;">
                    <button class="joms-button--neutral" onclick="joms.view.stream.cancel('4');">Cancel</button>
                    <button class="joms-button--primary" onclick="joms.view.stream.save('4', this);">Save</button>
                </div>
            </div>
            <p data-type="stream-content">
                <span class="joms-js--stream-text-4">I need help editing pictures.</span>
            </p>
        </div>
        <div class="joms-stream__actions">
            <!-- Actions here -->
        </div>
        <div class="joms-stream__status" style="display:none;"></div>
        <div class="joms-comment joms-js--comments joms-js--comments-4" data-id="4"></div>
    </div>

    <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-3" data-stream-id="3" data-stream-type="groups.wall">
        <div class="joms-list__options">
            <ul class="joms-dropdown">
                <!-- Options here -->
            </ul>
        </div>

        <div class="joms-stream__header">
            <div class="joms-avatar--stream">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                    <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
                </a>
            </div>
            <div class="joms-stream__meta">
                <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user">Taks the Dev</a>
                <span class="joms-stream__reference">
                    <span class="joms-stream__arrow-right">▶</span> <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a>
                </span>
                <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development?actid=3">
                    <span class="joms-stream__time">
                        <small>9 months ago</small>
                    </span>
                </a>
            </div>
        </div>
        <div class="joms-stream__body">
            <div data-type="stream-editor" class="cStream-Respond" style="display:none">
                <textarea class="joms-textarea" style="margin-bottom:0">I need help with include(); function. It's not returning the correct values</textarea>
                <div style="text-align:right;">
                    <button class="joms-button--neutral" onclick="joms.view.stream.cancel('3');">Cancel</button>
                    <button class="joms-button--primary" onclick="joms.view.stream.save('3', this);">Save</button>
                </div>
            </div>
            <p data-type="stream-content">
                <span class="joms-js--stream-text-3">I need help with include(); function. It's not returning the correct values</span>
            </p>
        </div>
        <div class="joms-stream__actions">
            <!-- Actions here -->
        </div>
        <div class="joms-stream__status" style="display:none;"></div>
        <div class="joms-comment joms-js--comments joms-js--comments-3" data-id="3"></div>
    </div>

        <div class="joms-comment__item joms-js--comment joms-js--comment-1" data-id="1" data-parent="3" data-comment-id="1" data-stream-id="3">
            <div class="joms-comment__body joms-js--comment-body">
                <a class="joms-comment__user" href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" id="wall-id-1">Digi Inc</a>
                <span class="joms-js--comment-content"><span class="joms-js--comment-text-1">Have you tried clearing the cache?</span></span>
                <span class="joms-comment__time"><small>9 months ago</small></span>
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
                <div class="joms-avatar--comment">
                    <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev" data-author="105">
                    </a>
                </div>
                <div class="joms-comment__body joms-js--comment-body">
                    <a class="joms-comment__user" href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" id="wall-id-2">Taks the Dev</a>
                    <span class="joms-js--comment-content"><span class="joms-js--comment-text-2">oh thanks!!!! I'll try just now.</span></span>
                    <span class="joms-comment__time"><small>9 months ago</small></span>
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
    
        <div class="joms-stream joms-embedly--left joms-js--stream joms-js--stream-2" data-stream-id="2" data-stream-type="groups">
            <div class="joms-list__options">
                <ul class="joms-dropdown">
                    <!-- Dropdown items here -->
                </ul>
            </div>
            <div class="joms-stream__header">
                <div class="joms-avatar--stream">
                    <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                        <img data-author="105" src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
                    </a>
                </div>
                <div class="joms-stream__meta">
                    <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user">Taks the Dev</a>
                    <span> created a new group</span>
                    <span class="joms-stream__time">
                        <small>9 months ago</small>
                    </span>
                </div>
            </div>
        </div>
    
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
                    <span class="joms-js--stream-text-1">I need help with PHP</span>
                </p>
                <!-- Fetched data -->
            </div>
            <div class="joms-stream__actions">
                <!-- share -->
            </div>
            <div class="joms-stream__status" style="display:none;">
            </div>
            <div class="joms-comment joms-js--comments joms-js--comments-1" data-id="1">
            </div>
        </div>
        <!-- end: .joms-stream__container -->
        <script>
            joms_filter_params = {"filter":"","value":"default_value","hashtag":false};
        </script>
        <script>window.joms && joms.fixUI && joms.fixUI();</script>
    </main>

                    <div class="joms-module__wrapper">
                        <div class="joms-tab__bar">
                            <a class="active" href="#joms-app--136">JS Photos</a>
                            <a href="#joms-app--142">JS Videos</a>
                        </div>
                    
                        <div id="joms-app--136" class="joms-tab__content active">
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
                    
                        <div id="joms-app--142" class="joms-tab__content">
                            <div class="joms-module">
                                <div class="joms-module joms-js--video-module">
                                    <div class="joms-blankslate">No public videos available.</div>
                                </div>
                                <div class="joms-gap"></div>
                                <a href="/digiinc/index.php/colab/videos" class="joms-button--link">
                                    <small>View all videos</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.querySelectorAll('.joms-tab__bar a').forEach(tab => {
                            tab.addEventListener('click', function(e) {
                                e.preventDefault();
                                document.querySelectorAll('.joms-tab__bar a').forEach(a => a.classList.remove('active'));
                                document.querySelectorAll('.joms-tab__content').forEach(content => content.classList.remove('active'));
                                this.classList.add('active');
                                document.querySelector(this.getAttribute('href')).classList.add('active');
                            });
                        });
                    </script>

        <div class="joms-module__wrapper">
            <div class="joms-tab__bar">
                <a class="active" href="#joms-app--125">JS Events</a>
                <a href="#joms-app--127">JS Groups</a>
                <a href="#joms-app--133">JS Pages</a>
            </div>
        
            <div id="joms-app--125" class="joms-tab__content active">
                <div class="joms-module">
                    <div class="joms-blankslate">Sorry, we currently have no events.</div>
                    <small><a class="joms-button--link" href="/digiinc/index.php/colab/events">View All Events</a></small>
                </div>
            </div>
        
            <div id="joms-app--127" class="joms-tab__content">
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
                                            1
                                        </li>
                                        <li>
                                            <svg class="joms-icon" viewBox="0 0 14 20">
                                                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-eye"></use>
                                            </svg>
                                            6
                                        </li>
                                        <li>
                                            <svg class="joms-icon" viewBox="0 0 14 20">
                                                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-bubble"></use>
                                            </svg>
                                            0
                                        </li>
                                        <li>
                                            <svg class="joms-icon" viewBox="0 0 14 20">
                                                <use xlink:href="https://radapps.co.za/digiinc/index.php/colab#joms-icon-pencil"></use>
                                            </svg>
                                            0
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="joms-gap"></div>
                    <a href="/digiinc/index.php/colab/groups" class="joms-button--link"><small>View all groups</small></a>
                </div>
            </div>
        
            <div id="joms-app--133" class="joms-tab__content">
                <div class="joms-module">
                    <div class="joms-blankslate">No pages created yet</div>
                    <div class="joms-gap"></div>
                    <a href="/digiinc/index.php/colab/pages" class="joms-button--link"><small>View all pages</small></a>
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll('.joms-tab__bar a').forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelectorAll('.joms-tab__bar a').forEach(a => a.classList.remove('active'));
                    document.querySelectorAll('.joms-tab__content').forEach(content => content.classList.remove('active'));
                    this.classList.add('active');
                    document.querySelector(this.getAttribute('href')).classList.add('active');
                });
            });
        </script>
        <footer>
            <p>&copy; 2023 The Digi Inc. All rights reserved.</p>
            
        </footer>
        </body>
        </html>
        