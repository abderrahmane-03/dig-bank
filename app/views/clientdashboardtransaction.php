<?php
require __DIR__ . "/../services/DatabaseService.php";

// // SQL query to fetch user data
// $sql = "SELECT id,amount, currency, type, compte_id FROM transactions";
// $result = $conn->query($sql);

// // Initialize an empty array to store the rows of data
// $rows = [];

// // Check if there are rows in the result
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $rows[] = $row;
//     }
// }

// // Close the database connection


// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
//     // Retrieve form data
//     $amount = $_POST["amount"];
//     $currency = $_POST["currency"];
//     $type = $_POST["type"];
//     $accountid = $_POST["accountid"];
   

//     // Use prepared statement to prevent SQL injection
//     $sql = "INSERT INTO transactions (amount, currency, type,compte_id) VALUES (?, ?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ssss", $amount, $currency, $type, $accountid);

//     // Execute the statement
//     $result = $stmt->execute();

//     if ($result) {
//         // Data inserted successfully, you can redirect or display a success message
//         header('');
//         exit();
//     } else {
//         // Handle the error (e.g., log the error, display a user-friendly message)
//         echo "Error: " . $stmt->error;
//     }

//     // Close the statement
//     $stmt->close();
// } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Handle invalid requests (e.g., direct access to process.php)
//     echo "TTTGGGGGGTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT";
// }
// // Assuming $conn is your database connection

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_transaction_id'])) {
//     if (isset($_POST['delete_transaction_id'])) {
//         $deleteUserId = $_POST['delete_transaction_id'];

//         // Use prepared statement to delete the user and associated accounts
//         $sql = "DELETE FROM transactions WHERE id = ?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("i", $deleteUserId);

//         // Execute the statement
//         $result = $stmt->execute();

//         if ($result) {
//             // Data deleted successfully, you can redirect or display a success message
//             header('Location: success.php');
//             exit();
//         } else {
//             // Handle the error
//             echo "Error: " . $stmt->error;
//         }

//         // Close the statement
//         $stmt->close();
//     } else {
//         echo "Invalid request post2jjjjjjjjjjjjjjjjhhhhhhhhhhhhhhhhhhhhhhhhh!";
//     }
// }
// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CIHBANK</title>
    <link rel="shortcut icon" type="image/icon" href="CIHL.png" />
</head>

<body class="bg-white">
    <div class="container flex mx-auto bg-white">
        <div>
            <p class="text-lg font-medium text-gray-900 dark:text-white">...</p>
        </div>
        <aside
            class="group/sidebar flex flex-col shrink-0 lg:w-[270px] w-[20px] transition-all duration-300 ease-in-out m-0 fixed z-40 inset-y-0 left-0 bg-white border-r border-r-dashed border-r-black-200 sidenav fixed-start loopple-fixed-start"
            id="sidenav-main">
            <div class="flex shrink-0 px-8 items-center justify-between h-[60px]">
                <P>CIH</P>
                <a class="flex transition-colors duration-200 ease-in-out">
                    <img class="w-10 h-10" alt="Logo" src="CIHL.png" class="inline">
                </a>
                <P>BANK</P>
            </div>
            <div class="hidden border-b border-dashed lg:block dark:border-black-700/70 border-black-200"></div>
            <div class="flex items-center justify-between px-8 py-2">
                <div class="flex items-center mr-3">
                    <div class="mr-5">
                        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                            <img class="w-[35px] h-[35px] shrink-0 inline-block rounded-[.95rem]" src="adm.jpg"
                                alt="avatar image">
                        </div>
                    </div>
                    <div class="mr-2 ">
                        <a
                            class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-black-400/90 text-secondary-inverse"><?php echo $username ?></a>
                        <span
                            class="text-secondary-dark dark:text-gray-500 font-medium block text-[0.85rem]">CLIENT</span>
                    </div>
                </div>
                <a class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0"
                    href="">
                    <span
                        class="leading-none transition-colors duration-200 ease-in-out peer shrink-0 group-hover:text-primary text-secondary-dark"></span>
                </a>
            </div>
            <div class="hidden border-b border-dashed lg:block dark:border-black-700/70 border-black-200"></div>
            <div class="flex flex-col w-full font-medium">
                <!-- menu item -->
              
                <!-- menu item -->
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[30px] h-[30px] pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8">
                                <path d="M9 4.025A7.5 7.5 0 1 0 16.975 12H9V4.025Z" />
                                <path
                                    d="M12.5 1c-.169 0-.334.014-.5.025V9h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 12.5 1Z" />
                            </g>
                        </svg>
                        <a href="clientdashboardaccounts.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">accounts</a>
                    </span>
                </div>
                <!-- menu item -->
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[30px] h-[30px]  pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 14 3-3m-3 3 3 3m-3-3h16v-3m2-7-3 3m3-3-3-3m3 3H3v3" />
                        </svg>
                        <a href="clientdashboardtransaction.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">transactions</a>
                    </span>
                </div>
                <!-- menu item -->
                
                <!-- menu item -->
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-7 h-7 pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <a href="login.php"
                            class="flex  items-center flex-grow text-[1.15rem] dark:text-blue-500/75 text-blue-500 hover:text-orange-500">log
                            out</a>
                    </span>
                </div>
            </div>
        </aside>
    </div>
    <!-- Start block -->
    <section class="ml-64 bg-gray-50 p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">id</th>
                                <th scope="col" class="px-4  py-3">amount</th>
                                <th scope="col" class="px-4  py-3">currency</th>
                                <th scope="col" class="px-4  py-3">type</th>
                                <th scope="col" class="px-4  py-3">account-id</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row): ?>
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">
                                        <?= $row['id'] ?>
                                    </td>
                                    <td class="px-4 flex justify-center py-3">
                                        <?= $row['amount'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['currency'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['type'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['compte_id'] ?>
                                    </td>
                                
                                    
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- End block -->
               
                    
                <!-- Create modal -->
                </div>
            </div>
    </section>
    <script src="bank.js"></script>
</body>

</html>