<?php
function adsterra_analytics_callback() {
    $db = new Database();
    
    $existing_data = $db->getDataByName('api_key');

    if ($existing_data !== null || $existing_data !== "" || $exisitng_data !== " ") {
        $api_key = base64_decode($existing_data['value']);
    }else{
        echo "Please Add API Key in Dashboard";
        return 0;
    }

    // Check if the form has been submitted
    if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
    } else {
        // If no date is specified, default to 10 days before start_date and current date for end_date
        $end_date = date("Y-m-d");
        $start_date = date("Y-m-d", strtotime("-10 days", strtotime($end_date)));
    }

    // Output HTML for the form
    echo ' 
    
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
          <a href="'.admin_url('admin.php?page=adsterra-dashboard').'" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
          <a href="'.admin_url('admin.php?page=adsterra-dashboard').'" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dashboard</a>
        </li>
        <li>
          <a href="'.admin_url('admin.php?page=adsterra-analytics').'" class="block text-red-700 md:text-red-600 py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 dark:text-red-500" aria-current="page">Analytics</a>
        </li>
        <li>
          <a href="'.admin_url('admin.php?page=adsterra-settings').'" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Settings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class="p-4 flex flex-wrap gap-2">
            <div> 
                <span class="font-bold">Starting Date:</span> 
                <input type="date" name="start_date" style="display:block;" value="' . $start_date . '"> 
            </div>
         
            <div> 
                <span class="font-bold">End Date:</span> 
                <input type="date" name="end_date" style="display:block;" value="' . $end_date . '"> 
            </div>   
        
        <input type="submit" value="Submit" class="bg-red-600 px-4 py-2.5 rounded text-white font-bold ">
        </div>
    </form>
    </main>
    ';

    // Output HTML for the table container
    echo '<center><div id="table-container" style="margin-top:20px;"></div></center>';
    // Include JavaScript code
    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetchAndDisplayData();
    });

    function fetchAndDisplayData() {
        const tableContainer = document.getElementById("table-container");
        tableContainer.innerHTML = "Loading...";

        const apiUrl = "https://api3.adsterratools.com/publisher/' . $api_key . '/stats.json?start_date=' . $start_date . '&finish_date=' . $end_date . '&group_by=date";

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                tableContainer.innerHTML = ""; // Clear loading message

                const table = document.createElement("table");
                table.classList.add("table-styles"); // Add your table styles here

                // Create table header
                const thead = document.createElement("thead");
                const headerRow = document.createElement("tr");
                ["Date", "Impression", "Clicks", "CTR", "CPM", "Revenue"].forEach(columnName => {
                    const th = document.createElement("th");
                    th.textContent = columnName;
                    headerRow.appendChild(th);
                });
                thead.appendChild(headerRow);
                table.appendChild(thead);

                // Create table body
                const tbody = document.createElement("tbody");
                data.items.forEach(item => {
                    const row = document.createElement("tr");
                    ["date", "impression", "clicks", "ctr", "cpm", "revenue"].forEach(key => {
                        const cell = document.createElement("td");
                        cell.textContent = item[key];
                        row.appendChild(cell);
                    });
                    tbody.appendChild(row);
                });
                table.appendChild(tbody);

                tableContainer.appendChild(table);
            })
            .catch(error => {
                tableContainer.innerHTML = "Error fetching data: " + error.message;
            });
    }
    </script>';
}
?>
