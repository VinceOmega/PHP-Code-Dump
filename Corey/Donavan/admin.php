<!DOCTYPE html>
<html><head>
<title>Righteous Inc's Admin Page</title>



    
    
    
      <link rel="stylesheet" href="color_scheme_2.css" type="text/css">
    <script type="text/javascript" src="p_loader.js"></script></head><body>

<div id="wrapper">
    
    <div id="nav">
        <ul>
            <li>
                <a href="#" onclick="selectTabs('featured')">
                    Featured
                </a>
            </li>
            <li>
                <a href="#" onclick="selectTabs('artists')">
                    Artists
                </a>
            </li>
            <li>
                <a href="#" onclick="selectTabs('shows')">
                    Shows
                </a>
            </li>
            <li>
                <a href="#" onclick="selectTabs('m_player')">
                    Music Player
                </a>
            </li>
            <li>
                <a href="#" onclick="selectTabs('rss_feed')">
                    Syndication
                </a>
            </li>
        </ul>
    </div>
    
    <div id="login">
       <form action="edit_page.php" method="post" onsubmit="return true">
        <p class="header">Username:</p><input size="60" value="username" type="text" name="username">
        <p class="header">Password:</p><input size="60" value="password" type="password" name="username">
        <input value="submit" name="L_submit" type="button">
       </form>
    </div>
    
    <div id="featured">
         <form action="edit_page.php" method="post" onsubmit="return true">
        <p class="header">Mixtape Picture:</p><input type="file">
        <p class="header">Description:</p>       
        <textarea name="featured">            
        </textarea>
        <p class="header">Track Listing:</p>
        <p>How many tracks?</p>
       
        <select name="tracks" id="track_number" onchange="createTracklisting()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        </select>
        <input value="submit" name="F_submit" type="button">
            <ul id="track_listing">
            </ul>
            </form>
    </div>
    
    <div id="artists">
        <form action="edit_page.php" method="post" onsumbit="return true">
        <select name="new_or_edit" id="artists">
            <option selected="selected">Edit</option>
            <option>New</option>
        </select>
     <input type="file">
     <input name="artists_name" value="name" type="text">
     <textarea name="artists">
    </textarea>
     <p>How many tracks?</p>
        <select name="a_tracks" id="a_track_number" onchange="createATracklisting()">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        </select>
        <input value="submit" name="a_submit" type="button">
        
        <ul id="a_track_listing">
        </ul>
        </form>
    </div>
    
    <div id="shows">
        <form action="edit_page.php" method="post">
        <select name="new_or_edit" id="shows">
            <option selected="selected">Edit</option>
            <option>New</option>
        </select>
            <p class="header">City:</p><input size="90" value="city" type="text">
            <p class="header">Venue:</p><input size="90" value="location" type="text">
            <p class="header">Time</p><input size="90" value="time" type="text">
            <p class="header">Description:</p>
            <textarea>            </textarea>
            <input value="submit" name="s_submit" type="button">
        </form>       
    </div>
    
    <div id="m_player">
        <form action="edit_page.php" method="post">
            <p class="header">New or Edit?</p>
            <select name="new_or_edit" id="m_player">
            <option selected="selected">Edit</option>
            <option>New</option>
            </select>
            <p class="header">Mixtape Picture:</p><input type="file">
        <p class="header">Track Listing:</p>
        <p>How many tracks?</p>
       
        <select name="m_tracks" id="m_track_number" onchange="createMTracklisting()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        </select>
        <input value="submit" name="M_submit" type="button">
            <ul id="m_track_listing">
            </ul>
        </form>
    </div>
    
    <div id="rss_feed">
        <form action="edit_page.php" method="post">
            <p class="header">Channel Title</p>
           <input name="channel_title" size="80" type="text">
                    <p class="header">Homepage URL</p>   
           <input name="link" size="80" type="text">
              <p class="header">Description of RSS/Podcast/Syndication Feed</p>
           <textarea name="description" id="channel" onkeypress="return twoHundredChars('channel')" onkeydown="twoHundredChars('channel')" onkeyup="twoHundredChars('channel')">            
           </textarea>
           <p class="counter"></p>
           <p class="header">Items in your feed.</p>
           <ul>
                <li>
                    <p class="header">Item Title </p>
                    
                    <input name="item_title_1" size="80" type="text">
                                <p class="header">Item Url</p>  
           <input name="link_1" size="80" type="text">
                   <p class="header">Item Descrption</p>
           <textarea name="description_1" id="feed_1" onkeypress="return twoHundredChars('feed_1')" onkeydown="twoHundredChars('feed_1')" onkeyup="twoHundredChars('feed_1')">            
           </textarea>
           <p class="counter"></p>
                  <p class="header">Item Image (Optional)</p>
           <input type="file" id="i_feed_1">
                </li>
                  <li>
                       <p class="header">Item Title</p>
                    <input name="title_2" size="80" type="text">
            <p class="header">Item Url</p>
           <input name="link_2" size="80" type="text">
            <p class="header">Item Description</p>
           <textarea name="description_2" id="feed_2" onkeypress="return twoHundredChars('feed_2')" onkeydown="twoHundredChars('feed_2')" onkeyup="twoHundredChars('feed_2')">            
           </textarea>
           <p class="counter"></p>
            <p class="header">Item Image (Optional)</p>
           <input type="file" id="i_feed_2">
             <li>
                   <p class="header">Item Title</p>
                    <input name="title_3" size="80" type="text">
               <p class="header">Item Url</p>
           <input name="link_3" size="80" type="text">
        <p class="header">Item Descrption</p>
           <textarea name="description_3" id="feed_3" onkeypress="return twoHundredChars('feed_3')" onkeydown="twoHundredChars('feed_3')" onkeyup="twoHundredChars('feed_3')">            
           </textarea>
           <p class="counter"></p>
           <p class="header">Item Image (Optional)</p>
           <input type="file" id="i_feed_3">
             <li>
                   <p class="header">Item Title</p>
                    <input name="title_4" size="80" type="text">
               <p class="header">Item Url</p>
           <input name="link_4" size="80" type="text">
        <p class="header">Item Descrption</p>
           <textarea name="description_4" id="feed_4" onkeypress="return twoHundredChars('feed_4')" onkeydown="twoHundredChars('feed_4')" onkeyup="twoHundredChars('feed_4')">            
           </textarea>
           <p class="counter"></p>
           <p class="header">Item Image (Optional)</p>
           <input type="file" id="i_feed_4">
             <li>
                   <p class="header">Item Title</p>
                    <input name="title_5" size="80" type="text">
               <p class="header">Item Url</p>
           <input name="link_5" size="80" type="text">
        <p class="header">Item Descrption</p>
           <textarea name="description_5" id="feed_5" onkeypress="return twoHundredChars('feed_5')" onkeydown="twoHundredChars('feed_5')" onkeyup="twoHundredChars('feed_5')">            
           </textarea>
           <p class="counter"></p>
           <p class="header">Item Image (Optional)</p>
           <input type="file" id="i_feed_5">
           </ul>
        </form>
    </div>
    
</div>

<div id="error">
</div>

</body></html>