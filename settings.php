<main class="mr-4">
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4">
    <a href="https://adsterra.com/" class="flex items-center">
        <img src="https://adsterra.com/logo.svg" class="h-8 mr-3" alt="Adsterra Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Adsterra</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="<?php echo admin_url('admin.php?page=adsterra-dashboard'); ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
          <a href="<?php echo admin_url('admin.php?page=adsterra-dashboard'); ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dashboard</a>
        </li>
        <li>
          <a href="<?php echo admin_url('admin.php?page=adsterra-analytics'); ?>" class="block text-red-700 md:text-red-600 py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 dark:text-red-500" aria-current="page">Analytics</a>
        </li>
        <li>
          <a href="<?php echo admin_url('admin.php?page=adsterra-settings'); ?>" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Settings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Tabs -->
<div class="w-full mx-auto py-4">
        <div class="flex flex-wrap border-b border-gray-300">
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 rounded-tl-lg focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab1')">Popunder</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab2')">Social Bar</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab3')">Native Banner</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab4')">468x60</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab5')">160×300</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab6')">300×250</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500   focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab7')">160x600</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500   focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab8')">320×50</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500   focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab9')">728x90</button>
            <button class="tab-button px-4 py-4 mb-2 text-center font-medium text-white bg-red-500 rounded-tr-lg focus:outline-none hover:bg-red-700 active:bg-red-800 transform hover:scale-105 transition-transform border border-red-600" onclick="openTab(event, 'tab10')">API</button>
        </div>
    </div>

        <!-- Tab Contents -->
        
<!-- Popunder -->
<div id="tab1" class="tab-content p-4">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="popunder">  
            <div class="mb-4">
                <label class="block text-red-600 text-sm font-semibold mb-2" for="ad_script">Popunder Ad Script:</label>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('popunder');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-red-600 text-sm font-semibold mb-2">Show in:</label>
                <select name="show_in" required> 
                    <option disabled><?php
$data = $db->getDataByName('popunder');
if ($data !== null && isset($data['additional'])) {
    echo $data['additional'];
}
?>
</option>
                    <option value="everywhere">Everywhere</option>
                    <option value="post">Post</option>
                    <option value="page">Page</option>
                </select>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- Social Bar -->
<div id="tab2" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="social_bar">
            <div class="mb-4">
                <label class="block text-red-600 text-sm font-semibold mb-2" for="ad_script">Social Bar Ad Script:</label>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('social_bar');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-red-600 text-sm font-semibold mb-2">Show in:</label>
                <select name="show_in" required> <!-- Select element with required attribute -->
                <option disabled><?php
$data = $db->getDataByName('social_bar');
if ($data !== null && isset($data['additional'])) {
    echo $data['additional'];
}
?>
</option>
                <option value="everywhere">Everywhere</option>
                
                    <option value="post">Post</option>
                    <option value="page">Page</option>
                    </select>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>


 <!-- Native Banner -->
<div id="tab3" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="native_banner">
            <div class="mb-4">
                <div class="inline">
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Native Banner Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('native_banner');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

    
     <!-- 468/60 -->
<div id="tab4" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="468_60_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="467/60"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('468_60');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- 160/30 -->
<div id="tab5" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="160_30_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="160/30"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('160_30');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- 300/250 -->
<div id="tab6" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="300_250_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="300/250"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('300_250');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- 160/600 -->
<div id="tab7" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="160_600_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="160/600"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('160_600');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- 320/50 -->
<div id="tab8" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="320_50_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="320/50"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('320_50');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- 728/90 -->
<div id="tab9" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="728_90_banner">  
            <div class="mb-4">
                <div>
                    <label class="text-red-600 text-sm font-semibold mb-2" for="ad_script">Ad Script:</label>
                    <span class="p-2 bg-gray-200 rounded float-right">[banner size="728/90"]</span>
                </div>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="ad_script" name="ad_script" rows="4" placeholder="Enter your Ad Script here..."><?php
$data = $db->getDataByName('728_90');
if ($data !== null && isset($data['value'])) {
    echo stripslashes(base64_decode($data['value']));
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

<!-- API Key -->
<div id="tab10" class="tab-content p-4 hidden">
    <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <form method="post">
            <input type="hidden" name="api_key">
            <div class="mb-4">
                <label class="block text-red-600 text-sm font-semibold mb-2" for="api_key">API Key:</label>
                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" id="api_key" name="ad_script" rows="4" placeholder="Enter your API Key here..."><?php
$data = $db->getDataByName('api_key');
if ($data !== null && isset($data['value'])) {
    echo base64_decode($data['value']);
}
?></textarea>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg" type="submit">Submit</button>
        </form>
    </div>
</div>

    
    
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.classList.remove('bg-red-600');
        });
        
        const clickedButton = evt.currentTarget;
        clickedButton.classList.add('bg-red-600');
        
        tabcontent = document.querySelectorAll('.tab-content');
        tabcontent.forEach(content => {
            content.style.display = 'none';
        });
        
        const tabContentToShow = document.getElementById(tabName);
        if (tabContentToShow) {
            tabContentToShow.style.display = 'block';
        }
    }
</script>
</main>

