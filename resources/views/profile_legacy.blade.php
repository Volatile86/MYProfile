@extends('layouts.app')

@section('content')
<style>
      body {
    background: #0e0e0e;
    background-image: url("{{ asset('profileBackgrounds/default.jpg') }}");
    background-size: cover;
    background-attachment: fixed;
    font-family: sans-serif, helvetica;
    letter-spacing: 1px;
    line-height: 1.5;
  }
</style>
<div class="container">
    <div class="master-container">
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
        <div class="page-content-container">

          <!-- Profile Sidebar Begins -->
          <aside class="profile-sidebar">

            <header>
              <h1>Mr. Hockey</h1>
            </header>

            <!-- Profile Picture -->
            <div class="profile-picture-container">
              <img class="profile-pic" style="max-height:200px;max-width:150px;" src="{{ asset('testProfileContent/profilePic.jpg') }}" alt="A profile picture of Tom, the creator of MySpace.">

              <p class="personal-msg"><b>"Hockey 4 Life"</b></p>

              <ul class="gender-age">
                <li>Male</li>
                <li>15 years old</li>
                <li>Chicago, IL</li>
              </ul>

              <ul class="last-login">
                <li>Last Login:</li>
                <li>4/22/2023</li>
              </ul>

              <p class="pics-videos">View My: <a href="#"><b>Pics</b></a> | <a href="#"><b>Videos</b></a></p>
            </div>

            <!-- Contact Box -->
            <section class="contact-box">
              <h2>Contacting Tom</h2>

              <figure class="contact-images">
                <p>Message me</p>
                <p>Forward</p>
                <p>Add Friend</p>
                <p>Favourite</p>
                <p>Instant Message</p>
                <p>Block</p>
                <p>Add to Group</p>
                <p>Rank User</p>
              </figure>
            </section>

            <!-- MySpace URL -->
            <section class="myspace-url-box">
              <h3><b>MySpace URL:</b></h3>
              <p>http://www.myspace.com/xxlilcrysxx</p>
            </section>

            <!-- Interests Section -->
            <section class="interests">
              <table class="sidebar-table">

                <caption>
                  <h2 class="sidebar-table-h2">Tom's Interests</h2>
                </caption>

                <tbody>
                  <tr>
                    <th class="sidebar-table-header" scope="row">General</th>
                    <td class="sidebar-table-data">
                      <p>tv, films, my friends &hearts; &hearts; &hearts; </p>
                    </td>
                  </tr>

                  <tr>
                    <th class="sidebar-table-header" scope="row">Music</th>
                    <td class="sidebar-table-data">
                      <p>
                        fall out boy, P!ATD, a7x, tenacious d, paramore
                      </p>
                    </td>
                  </tr>

                  <tr>
                    <th class="sidebar-table-header" scope="row">Movies</th>
                    <td class="sidebar-table-data">
                      <p>
                        casino royale, hot fuzz, forrest gump, mean girls
                      </p>
                    </td>
                  </tr>

                  <tr>
                    <th class="sidebar-table-header" scope="row">Television</th>
                    <td class="sidebar-table-data">
                      <p>family guy, mighty boosh, 24, CSI, friends, scrubs, the oc</p>
                    </td>
                  </tr>

                </tbody>
              </table>
            </section>

            <!-- Tom's Details Section -->
            <section class="details">
              <table class="sidebar-table">

                <caption>
                  <h2 class="sidebar-table-h2">Tom's Details</h2>
                </caption>

                <tbody>
                  <tr>
                    <th class="sidebar-table-header" scope="row">Status:</th>
                    <td class="sidebar-table-data">Single</td>
                  </tr>

                  <th class="sidebar-table-header" scope="row">Zodiac Sign:</th>
                  <td class="sidebar-table-data">Libra</td>
                  </tr>

                </tbody>
              </table>
            </section>
          </aside>
          <!-- Profile Side Bar Ends -->

          <!-- Main Section -->
          <main>

            <section class="user-network">
              <header>
                <h2>xxlilcrysxx is in your extended network</h2>
              </header>
            </section>

            <section class="blurbs">
              <header class="main-section-header">
                <h2 class="main-section-h2">Tom's Blurbs</h2>
              </header>

              <h3><strike>About me</strike></h3>
              <p>
                <em>It just takes some time little girl, you're in the middle of the ride.<br /> <br />
                  Everything, everything will be just fine
                  everything, everything will be alright, alright <br /> <br /> &hearts;</em>
              </p>
              <iframe width="410" height="230" src="https://www.youtube.com/embed/FV-HPOHu8mY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <br />
              <br />
              <h3><strike>Who I'd like to meet:</strike></h3>
              <em>everyone and Noel Fielding</em>
            </section>

            <section class="friends">
              <header class="main-section-header">
                <h2 class="main-section-h2">xxlilcrysxx's Friend Space</h2>
              </header>

              <p><b>xxlilcrysxx has <span class="focus-highlight">98</span> Friends.</b></p>

              <div class="friend-pic-container">
                <figure>
                  <figcaption><a href="#">Mia</a></figcaption>
                  <img src="http://placekitten.com/100/100">
                </figure>

                <figure>
                  <figcaption><a href="#">Kat</a></figcaption>
                  <img src="http://placekitten.com/90/120">
                </figure>

                <figure>
                  <figcaption><a href="#">Mat</a></figcaption>
                  <img src="http://placekitten.com/120/80">
                </figure>

                <figure>
                  <figcaption><a href="#">Tommm</a></figcaption>
                  <img src="http://placekitten.com/80/110">
                </figure>

                <figure>
                  <figcaption><a href="#">Tim</a></figcaption>
                  <img src="http://placekitten.com/100/170">
                </figure>

                <figure>
                  <figcaption><a href="#">James</a></figcaption>
                  <img src="http://placekitten.com/80/100">
                </figure>

                <figure>
                  <figcaption><a href="#">Jamiii &hearts;</a></figcaption>
                  <img src="http://placekitten.com/105/100">
                </figure>

                <figure>
                  <figcaption><a href="#">Aaron</a></figcaption>
                  <img src="http://placekitten.com/100/108">
                </figure>
              </div>

              <p class="friends-list-link"><a href="#">View All of xxlilcrysxx's Friends</a></p>
            </section>

            <section class="comment-wall">
              <header class="main-section-header">
                <h2 class="main-section-h2">Tom's Friends Comments</h2>
              </header>

              <p id="comment-counter"><b>Displaying <span class="focus-highlight">5</span> of <span class="focus-highlight">220</span> comments (<a href="#">View/Edit All Comments</a>)</b></p>

              <table>
                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">Todd</a></figcaption>
                      <img src="http://placekitten.com/100/90">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 6:54 PM</h3>
                    <p>pc4pc?</p>
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">Laura</a></figcaption>
                      <img src="http://placekitten.com/100/150">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 6:51 PM</h3>
                    <p>thanx 4 the add!!!</p>
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">ASH</a></figcaption>
                      <img src="http://placekitten.com/50/50">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 5:30 PM</h3>
                    <p>hiiiii :)</p>
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">Sammy</a></figcaption>
                      <img src="http://placekitten.com/120/120">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 12:37 PM</h3>
                    <p>omg I luv that song</p>
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">Danny</a></figcaption>
                      <img src="http://placekitten.com/90/100">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 12:13 PM</h3>
                    <p>Hey add me I accept everyone</p>
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <figure>
                      <figcaption><a href="#">The Truckstop Fighters</a></figcaption>
                      <img src="http://placekitten.com/100/300">
                    </figure>
                  </th>
                  <td>
                    <h3>4/22/2006 12:08 PM</h3>
                    <p>Hey! cool music taste! check out our band! Our new song is on our page! FFO Green day, Blink 182, NOFX etc.</p>
                  </td>
                </tr>

              </table>

              <p id="add-comment"><a href="#">Add Comment</a></p>

            </section>
          </main>

        </div>
        <!-- Footer -->
        <footer class="footer">
          <small>©2024 MYProfile. All Rights Reserved.</small>
        </footer>
      </div>
</div>
@endsection
