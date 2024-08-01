<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digi Inc</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <header>

        <div class="logo">
            <a href="/digiinc/">
                <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" alt="Digi Inc Logo">
            </a>
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
                </div>

                <div>
                    <a href="#">Forgot Username?</a>
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </section>
        <style>
            .joms-body {
                display: flex;
                flex-direction: row;
            }
            .joms-sidebar {
                width: 20%;
            }
            .joms-main-content {
                width: 80%;
                padding: 10px;
            }
            .joms-tab-bar {
                margin-bottom: 10px;
            }
            .joms-tab-bar a {
                text-decoration: none;
                padding: 10px;
                display: inline-block;
            }
            .joms-tab-bar .active {
                font-weight: bold;
            }
            .joms-list-thumbnail {
                display: grid;
                grid-template-columns: repeat(4, 1fr); /* 4 columns */
                gap: 10px; /* Space between images */
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .joms-list-item {
                max-width: 100%; 
            }
            .joms-list-item img {
                width: 100%; 
                height: auto; 
                border-radius: 50%; /* Optional: Make images circular */
            }
            .joms-view-all {
                display: block;
                margin-top: 10px;
                text-align: center;
            }
        </style>
        
        <div class="joms-body">
            <div class="joms-sidebar">
                
            </div>
        
            <div class="joms-main-content">
                <div class="joms-tab-bar">
                    <a href="#joms-app--129" class="active">JS Members</a>
                </div>
        
                <div id="joms-app--129" class="joms-tab-content">
                    <div class="joms-module">
                        <div class="joms-member-module">
                            <div class="joms-gap"></div>
                            <ul class="joms-list-thumbnail">
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/119-siyabonga" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_3fdff448767f45551b3a2996.jpg" alt="Siyabonga" title="Siyabonga">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/118-zorro" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Zorro" title="Zorro">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/117-roboto" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Roboto" title="Roboto">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/116-flamingo" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_8dac66e795b4c72b133c7fb2.png" alt="Flamingo" title="Flamingo">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/115-clare" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Clare" title="Clare">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/114-kingsley" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Kingsley" title="Kingsley">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/113-zero" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_0d3aea357f1befbda94e6e10.jpg" alt="Zero" title="Zero">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/112-loni-hutchison" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Loni Hutchison" title="Loni Hutchison">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/111-lerato" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Lerato" title="Lerato">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/110-kamogelo-ngwenya" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/images/avatar/thumb_d5d33adc6fb566144ef37670.jpg" alt="Kamogelo Ngwenya" title="Kamogelo Ngwenya">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/109-amo-marengwa" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Amo Marengwa" title="Amo Marengwa">
                                    </a>
                                </li>
                                <li class="joms-list-item">
                                    <a href="/digiinc/index.php/cowork/profile/edit-profile/108-tanatswa" class="joms-avatar">
                                        <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Tanatswa" title="Tanatswa">
                                    </a>
                                </li>
                            </ul>
                            <div class="joms-gap"></div>
                            <a href="/digiinc/index.php/colab/search/browse" class="joms-view-all">
                                <small>View All (17)</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
           
            </style>
       
           <style>
               body {
                   font-family: Arial, sans-serif;
                   background-color: #f4f4f4;
                   margin: 0;
                   padding: 20px;
               }
       
               .container {
                   max-width: 800px;
                   margin: auto;
                   background: #fff;
                   border-radius: 8px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                   overflow: hidden;
               }
       
               .joms-tab__bar {
                   display: flex;
                   background: #ff9800;
                   color: #fff;
               }
       
               .joms-tab__bar a {
                   flex: 1;
                   padding: 15px;
                   text-align: center;
                   text-decoration: none;
                   color: #fff;
                   transition: background 0.3s;
               }
       
               .joms-tab__bar a:hover,
               .joms-tab__bar a.active {
                   background: #e68900;
               }
       
               .joms-tab__content {
                   display: none;
                   padding: 20px;
               }
       
               .joms-tab__content.active {
                   display: block;
               }
       
               .joms-blankslate {
                   color: #888;
                   text-align: center;
                   margin-top: 20px;
               }
       
               .joms-button--link {
                   display: inline-block;
                   margin-top: 10px;
                   color: #ff9800;
                   text-decoration: none;
                   border: 1px solid #ff9800;
                   padding: 5px 10px;
                   border-radius: 4px;
                   transition: background 0.3s, color 0.3s;
               }
       
               .joms-button--link:hover {
                   background: #ff9800;
                   color: #fff;
               }
       
               .joms-list--thumbnail {
                   list-style: none;
                   padding: 0;
                   display: flex;
                   flex-wrap: wrap;
               }
       
               .joms-list__item {
                   margin: 10px;
                   width: calc(33.333% - 20px);
               }
       
               .joms-list__item img {
                   max-width: 100%;
                   border-radius: 8px;
                   transition: transform 0.3s;
               }
       
               .joms-list__item img:hover {
                   transform: scale(1.05);
               }
           </style>
      
       
           <div class="container">
               <div class="joms-tab__bar">
                   <a class="active" href="#joms-app--136">JS Photos</a>
                   <a href="#joms-app--142">JS Videos</a>
               </div>
       
               <div id="joms-app--136" class="joms-tab__content active">
                   <div class="joms-module">
                       <ul class="joms-list--thumbnail">
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('40', '6');">
                                   <img title="Uploaded by Siyabonga" src="https://radapps.co.za/digiinc/images/avatar/thumb_a45a72dd30f336eed66ded609c40aa18.jpg" alt="Siyabonga">
                               </a>
                           </li>
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('32', '5');">
                                   <img title="Uploaded by Flamingo" src="https://radapps.co.za/digiinc/images/avatar/thumb_7afd0eceea70c74f9c75fb4a950b98fd.png" alt="Flamingo">
                               </a>
                           </li>
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('29', '4');">
                                   <img title="Uploaded by Zero" src="https://radapps.co.za/digiinc/images/avatar/thumb_910a7762056ff0a32502045b33641ebd.jpg" alt="Zero">
                               </a>
                           </li>
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('20', '3');">
                                   <img title="Uploaded by Kamogelo Ngwenya" src="https://radapps.co.za/digiinc/images/avatar/thumb_d8b16c807d47ef139802a298f7658ce9.jpg" alt="Kamogelo Ngwenya">
                               </a>
                           </li>
                         
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('10', '2');">
                                   <img title="Uploaded by Mathapelo" src="https://radapps.co.za/digiinc/images/avatar/thumb_0ff8dc39d41e9ed2eff5f04941374840.png" alt="Mathapelo">
                               </a>
                           </li>
                           <li class="joms-list__item">
                               <a href="javascript:void(0);" onclick="joms.api.photoOpen('2', '1');">
                                   <img title="Uploaded by Taks the Dev" src="https://radapps.co.za/digiinc/images/avatar/thumb_a0f6fb3384b99f1f835911df865ac010.png" alt="Taks the Dev">
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
       
               <div id="joms-app--142" class="joms-tab__content">
                   <div class="joms-module">
                       <div class="joms-js--video-module">
                           <div class="joms-blankslate">No public videos available.</div>
                       </div>
                       <a href="/digiinc/index.php/colab/videos" class="joms-button--link">
                           <small>View all videos</small>
                       </a>
                   </div>
               </div>
           </div>
       
           <script>
               document.querySelectorAll('.joms-tab__bar a').forEach(tab => {
                   tab.addEventListener('click', function(event) {
                       event.preventDefault();
                       document.querySelectorAll('.joms-tab__bar a').forEach(link => link.classList.remove('active'));
                       document.querySelectorAll('.joms-tab__content').forEach(content => content.classList.remove('active'));
                       
                       this.classList.add('active');
                       document.querySelector(this.getAttribute('href')).classList.add('active');
                   });
               });
           </script>

          <style>
              body {
                  font-family: Arial, sans-serif;
                  background-color: #f4f4f4;
                  margin: 0;
                  padding: 20px;
              }
      
              .joms-module__wrapper {
                  background: #fff;
                  border-radius: 8px;
                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                  overflow: hidden;
              }
      
              .joms-tab__bar {
                  display: flex;
                  background: #ff9800;
                  color: #fff;
              }
      
              .joms-tab__bar a {
                  flex: 1;
                  padding: 15px;
                  text-align: center;
                  text-decoration: none;
                  color: #fff;
              }
      
              .joms-tab__bar a:hover,
              .joms-tab__bar a.active {
                  background: #e68900;
              }
      
              .joms-tab__content {
                  display: none;
                  padding: 20px;
              }
      
              .joms-tab__content.active {
                  display: block;
              }
      
              .joms-blankslate {
                  color: #888;
                  text-align: center;
                  margin-top: 20px;
              }
      
              .joms-button--link {
                  display: inline-block;
                  margin-top: 10px;
                  color: #ff9800;
                  text-decoration: none;
                  border: 1px solid #ff9800;
                  padding: 5px 10px;
                  border-radius: 4px;
                  transition: background 0.3s, color 0.3s;
              }
      
              .joms-button--link:hover {
                  background: #ff9800;
                  color: #fff;
              }
          </style>
     
          <div class="joms-module__wrapper">
              <div class="joms-tab__bar">
                  <a class="" href="#joms-app--125">JS Events</a>
                  <a href="#joms-app--127" class="">JS Groups</a>
                  <a href="#joms-app--133" class="active">JS Pages</a>
              </div>
      
              <div id="joms-app--125" class="joms-tab__content">
                  <div class="joms-module">
                      <div class="joms-blankslate">Sorry, we currently have no events.</div>
                      <small><a class="joms-button--link" href="/digiinc/index.php/colab/events">View All Events</a></small>
                  </div>
              </div>
      
              <div id="joms-app--127" class="joms-tab__content">
                  <div class="joms-module">
                      <!-- Content for JS Groups -->
                      <div class="joms-blankslate">No groups available at the moment.</div>
                  </div>
              </div>
      
              <div id="joms-app--133" class="joms-tab__content active">
                  <div class="joms-module">
                      <!-- Content for JS Pages -->
                      <div class="joms-blankslate">Welcome to JS Pages. No pages to show currently.</div>
                  </div>
              </div>
          </div>
      
          <script>
              const tabs = document.querySelectorAll('.joms-tab__bar a');
              const contents = document.querySelectorAll('.joms-tab__content');
      
              tabs.forEach(tab => {
                  tab.addEventListener('click', event => {
                      event.preventDefault();
                      
                      tabs.forEach(t => t.classList.remove('active'));
                      contents.forEach(c => c.classList.remove('active'));
                      
                      tab.classList.add('active');
                      document.querySelector(tab.getAttribute('href')).classList.add('active');
                  });
              });
          </script>
     
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

            <style>
                .container {
                    max-width: 800px;
                    margin: auto;
                    padding: 20px;
                    font-family: Arial, sans-serif;
                    background-color: #f9f9f9;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                }
                .joms-stream__header, .joms-stream__body, .joms-stream__actions, .joms-stream__status {
                    margin-bottom: 20px;
                }
                .joms-avatar--stream {
                    display: inline-block;
                    vertical-align: top;
                }
                .joms-avatar--stream img {
                    border-radius: 50%;
                    width: 50px;
                    height: 50px;
                }
                .joms-stream__meta {
                    display: inline-block;
                    margin-left: 10px;
                    vertical-align: top;
                }
                .joms-stream__meta a {
                    text-decoration: none;
                    color: #333;
                }
                .joms-stream__body h4 {
                    margin: 10px 0;
                }
                .joms-list__item {
                    list-style: none;
                    margin: 5px 0;
                }
                .joms-icon {
                    width: 16px;
                    height: 16px;
                    vertical-align: middle;
                    margin-right: 5px;
                }
                .joms-reactions__list {
                    display: inline-block;
                    padding: 0;
                    margin: 0;
                }
                .joms-reactions__item {
                    display: inline-block;
                    margin-right: 5px;
                    cursor: pointer;
                }
                .joms-comment {
                    border-top: 1px solid #ddd;
                    padding-top: 10px;
                }
            </style>
    
            <div class="container">
                <div class="joms-stream__header">
                    <div class="joms-avatar--stream">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator">
                            <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Digi Inc">
                        </a>
                    </div>
                    <div class="joms-stream__meta">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" class="joms-stream__user">Digi Inc</a>
                        added a new event
                        <span class="joms-stream__time"><small>10 months ago</small></span>
                    </div>
                </div>
                <div class="joms-stream__body">
                    <div class="joms-media">
                        <h4 class="joms-text--title"><a href="/digiinc/index.php/colab/events/viewevent/1-women-in-tech-experience-2023">Women in Tech Experience 2023</a></h4>
                        <p>This year, the unique event calls on women from all corners of the tech world to unite and join the SHEvolution movement, envisioning a world where...</p>
                        <ul class="joms-list">
                            <li class="joms-list__item">
                                <svg viewBox="0 0 16 18" class="joms-icon">
                                    <use xlink:href="#joms-icon-calendar"></use>
                                </svg>
                                Wednesday, 18 October 2023 09:00 AM
                            </li>
                            <li class="joms-list__item">
                                <svg viewBox="0 0 16 16" class="joms-icon">
                                    <use xlink:href="#joms-icon-location"></use>
                                </svg>
                                Johannesburg, South Africa
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="joms-stream__actions"></div>
                <div class="joms-stream__status">
                    <div class="joms-stream__reactions">
                        <ul class="joms-reactions__list">
                            <li style="z-index: 100;">
                                <div class="joms-reactions__item reaction-like" title="1 people" data-count="1" data-reactid="1" data-uid="1">
                                    👍
                                </div>
                            </li>
                        </ul>
                        <a class="joms-stream__reactions-text" href="#">
                            Taks the Dev
                        </a>
                    </div>
                </div>
                <div class="joms-comment joms-js--comments joms-js--comments-6" data-id="6"></div>
            </div>
            <div class="container">
                <div class="joms-stream__body no-head">
                    <p>
                        <svg viewBox="0 0 16 16" class="joms-icon">
                            <use xlink:href="#joms-icon-user"></use>
                        </svg>
                        <b><a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">Taks the Dev</a></b> is friends with <b><a href="/digiinc/index.php/cowork/profile/edit-profile/107-mathapelo">Mathapelo</a></b>
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="joms-stream__header">
                    <div class="joms-avatar--stream">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
                        </a>
                    </div>
                    <div class="joms-stream__meta">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user active">Taks the Dev</a>
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev?actid=4" style="display: inherit;">
                            <span class="joms-stream__time">
                                <small>10 months ago</small>
                                <svg viewBox="0 0 16 16" class="joms-icon joms-show-earth">
                                    <use xlink:href="#joms-icon-earth"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="joms-stream__body">
                    <div data-type="stream-editor" class="cStream-Respond" style="display:none">
                        <textarea class="joms-textarea" style="margin-bottom:0">I need help editing pictures.</textarea>
                        <div style="text-align:right;">
                            <button class="joms-button--neutral joms-button--small">Cancel</button>&nbsp;
                            <button class="joms-button--primary joms-button--small">Save</button>
                        </div>
                    </div>
                    <p data-type="stream-content">
                        <span class="joms-js--stream-text-4">I need help editing pictures.</span>
                    </p>
                </div>
                <div class="joms-stream__actions"></div>
                <div class="joms-stream__status" style="display:none;"></div>
            </div>
       
     
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f2f2f2;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 800px;
                    margin: 20px auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }
                .joms-avatar img {
                    border-radius: 50%;
                    width: 50px;
                    height: 50px;
                }
                .joms-stream__header,
                .joms-stream__body,
                .joms-stream__actions,
                .joms-comment {
                    margin-bottom: 20px;
                }
                .joms-avatar--stream,
                .joms-avatar--comment {
                    display: inline-block;
                    vertical-align: top;
                }
                .joms-stream__meta,
                .joms-comment__body {
                    display: inline-block;
                    margin-left: 10px;
                    vertical-align: top;
                }
                .joms-stream__meta a,
                .joms-comment__user {
                    text-decoration: none;
                    color: #007bff;
                }
                .joms-stream__meta small,
                .joms-comment__time small {
                    color: #777;
                }
                .joms-stream__body p {
                    margin: 10px 0;
                }
                .joms-comment {
                    border-top: 1px solid #ddd;
                    padding-top: 10px;
                    margin-top: 20px;
                }
                .joms-comment__item {
                    padding: 10px;
                    background-color: #f9f9f9;
                    border-radius: 5px;
                    margin-bottom: 10px;
                }
                .joms-comment__item:nth-child(even) {
                    background-color: #e9ecef;
                }
                .joms-textarea__wrapper {
                    display: flex;
                    flex-direction: column;
                }
                .joms-textarea {
                    margin-bottom: 10px;
                    resize: vertical;
                }
                .joms-button--small {
                    padding: 5px 10px;
                    cursor: pointer;
                    border: none;
                    border-radius: 4px;
                }
                .joms-button--neutral {
                    background-color: #f0f0f0;
                    color: #333;
                }
                .joms-button--primary {
                    background-color: #007bff;
                    color: white;
                }
                .joms-icon {
                    width: 16px;
                    height: 16px;
                    vertical-align: middle;
                    margin-right: 5px;
                }
                .joms-comment__reply {
                    display: none;
                }
                .joms-comment__reply.active {
                    display: block;
                }
                .joms-icon svg {
                    cursor: pointer;
                }
            </style>
            
            <div class="container">
                <div class="joms-stream__header">
                    <div class="joms-avatar--stream">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev">
                            <img src="https://radapps.co.za/digiinc/images/avatar/thumb_4fa72a356cc722e7125a8ae1.png" alt="Taks the Dev">
                        </a>
                    </div>
                    <div class="joms-stream__meta">
                        <a href="/digiinc/index.php/cowork/profile/edit-profile/105-taks-the-dev" class="joms-stream__user">Taks the Dev</a>
                        <span class="joms-stream__reference">
                            <span class="joms-stream__arrow-right">▶</span> <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a>
                        </span>
                        <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development?actid=3">
                            <span class="joms-stream__time"><small>10 months ago</small></span>
                        </a>
                    </div>
                </div>
                <div class="joms-stream__body">
                    <p data-type="stream-content">
                        <span class="joms-js--stream-text-3">I need help with include(); function. It's not returning the correct values</span>
                    </p>
                </div>
                <div class="joms-stream__actions"></div>
                <div class="joms-stream__status" style="display:none;"></div>
                <div class="joms-comment joms-js--comments joms-js--comments-3" data-id="3">
                    <div class="joms-comment__item joms-js--comment joms-js--comment-1" data-id="1" data-parent="3" data-comment-id="1" data-stream-id="3">
                        <div class="joms-comment__header">
                            <div class="joms-avatar--comment">
                                <a href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator">
                                    <img src="https://radapps.co.za/digiinc/components/com_community/assets/user-Male-thumb.png" alt="Digi Inc" data-author="103">
                                </a>
                            </div>
                            <div class="joms-comment__body joms-js--comment-body">
                                <a class="joms-comment__user" href="/digiinc/index.php/cowork/profile/edit-profile/103-administrator" id="wall-id-1">Digi Inc</a>
                                <span class="joms-js--comment-content"><span class="joms-js--comment-text-1">Have you tried clearing the cache?</span></span>
                                <span class="joms-comment__time"><small>10 months ago</small></span>
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
                                <span class="joms-comment__time"><small>10 months ago</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function toggleReply(id) {
                    const replyBox = document.querySelector(`.joms-comment__reply[data-id="${id}"]`);
                    replyBox.classList.toggle('active');
                }
            </script>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .joms-avatar--stream img {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        vertical-align: middle;
    }
    .joms-stream__header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .joms-stream__meta {
        margin-left: 10px;
    }
    .joms-stream__meta a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    .joms-stream__meta span {
        display: block;
        color: #777;
    }
    .joms-stream__body {
        margin-bottom: 20px;
    }
    .joms-media {
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    .joms-media h4 a {
        text-decoration: none;
        color: #007bff;
        font-size: 18px;
    }
    .joms-media span {
        display: block;
        color: #555;
    }
    .joms-button {
        display: inline-block;
        padding: 8px 16px;
        margin-top: 10px;
        border-radius: 4px;
        border: none;
        color: #fff;
        cursor: pointer;
        text-align: center;
    }
    .joms-button--neutral {
        background-color: #6c757d;
    }
    .joms-button--primary {
        background-color: #007bff;
    }
    .joms-button--neutral:hover,
    .joms-button--primary:hover {
        opacity: 0.8;
    }
</style>

<div class="container">
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
                <small>10 months ago</small>
            </span>
        </div>
    </div>
    <div class="joms-stream__body">
        <div class="joms-media">
            <h4 class="joms-text--title">
                <a href="/digiinc/index.php/colab/groups/viewgroup/1-php-development">PHP Development</a>
            </h4>
            <span>A discussion group about PHP</span>
        </div>
    </div>
    <button class="joms-button joms-button--primary">Join Group</button>
    <button class="joms-button joms-button--neutral">View More</button>
</div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .joms-textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 14px;
            resize: vertical;
        }
        .joms-button--small {
            padding: 5px 10px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .joms-button--neutral {
            background-color: #6c757d;
            color: #fff;
        }
        .joms-button--primary {
            background-color: #007bff;
            color: #fff;
        }
        .joms-button--neutral:hover,
        .joms-button--primary:hover {
            opacity: 0.8;
        }
        .joms-comment {
            margin-bottom: 20px;
        }
        .joms-comment p {
            margin: 0;
        }
        .joms-comment__actions {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="joms-comment" data-id="1">
            <!-- Edit Form -->
            <div data-type="stream-editor" class="cStream-Respond" style="display: none;">
                <textarea class="joms-textarea">I need help with PHP</textarea>
                <div class="joms-comment__actions">
                    <button class="joms-button--neutral joms-button--small" onclick="toggleEditForm('1', false);">Cancel</button>
                    <button class="joms-button--primary joms-button--small" onclick="saveChanges('1');">Save</button>
                </div>
            </div>

            <!-- Display Content -->
            <p data-type="stream-content">
                <span class="joms-js--stream-text-1">I need help with PHP</span>
                <button class="joms-button--primary joms-button--small" onclick="toggleEditForm('1', true);">Edit</button>
            </p>
        </div>
    </div>

    <script>
        function toggleEditForm(id, show) {
            const form = document.querySelector(`.joms-comment[data-id="${id}"] [data-type="stream-editor"]`);
            const content = document.querySelector(`.joms-comment[data-id="${id}"] [data-type="stream-content"]`);

            if (show) {
                form.style.display = 'block';
                content.style.display = 'none';
            } else {
                form.style.display = 'none';
                content.style.display = 'block';
            }
        }

        function saveChanges(id) {
            const textarea = document.querySelector(`.joms-comment[data-id="${id}"] .joms-textarea`);
            const content = document.querySelector(`.joms-comment[data-id="${id}"] [data-type="stream-content"] .joms-js--stream-text-1`);

            content.textContent = textarea.value;
            toggleEditForm(id, false);
        }
    </script>

    <footer>
        <p>&copy; 2023 The Digi Inc. All rights reserved.</p>
    </footer>
</body>
</html>