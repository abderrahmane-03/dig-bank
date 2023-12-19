<?php
require __DIR__ . "/../services/DatabaseService.php";

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
                            class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-black-400/90 text-secondary-inverse">abderrahmane</a>
                        <span
                            class="text-secondary-dark dark:text-gray-500 font-medium block text-[0.85rem]">ADMIN</span>
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
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[25px] h-[25x] pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 20">
                            <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
                        </svg>
                        <a href="admindashboardbank.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">bank</a>
                    </span>
                </div>
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[29px] h-[29px] pr-3 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                            <path
                                d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <a href="admindashboardusers.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">users</a>
                    </span>
                </div>
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
                        <a href="admindashboardaccounts.php"
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
                        <a href="admindashboardtransactions.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">transactions</a>
                    </span>
                </div>
                <!-- menu item -->
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[30px] h-[30px] pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 1h12M3 1v16M3 1H2m13 0v16m0-16h1m-1 16H3m12 0h2M3 17H1M6 4h1v1H6V4Zm5 0h1v1h-1V4ZM6 8h1v1H6V8Zm5 0h1v1h-1V8Zm-3 4h2a1 1 0 0 1 1 1v4H7v-4a1 1 0 0 1 1-1Z" />
                        </svg>
                        <a href="admindashboardagencies.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">agencies</a>
                    </span>
                </div>
                <!-- menu item -->
                <div>
                    <span
                        class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
                        <svg class="w-[30px] h-[30px] pr-2 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                        </svg>
                        <a href="admindashboardatm.php"
                            class="flex items-center flex-grow text-[1.15rem] dark:text-black-400/75 text-black-500 hover:text-dark">atm</a>
                    </span>
                </div>
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
                            <button id="actionsDropdownButton" onclick="showCreateClientModal()"
                                data-dropdown-toggle="actionsDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                type="button">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                add account
                            </button>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">id</th>
                                <th scope="col" class="px-4  py-3">rib</th>
                                <th scope="col" class="px-4  py-3">balance</th>
                                <th scope="col" class="px-4  py-3">currency</th>
                                <th scope="col" class="px-4  py-3">userid</th>
                     
                                <th scope="col" class="px-4  py-3"> actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row): ?>
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">
                                        <?= $row['id'] ?>
                                    </td>
                                    <td class="px-4 flex justify-center py-3">
                                        <?= $row['rib'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['balance'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['currency'] ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?= $row['user_id'] ?>
                                    </td>
                                  
                                    <td class="px-4 py-3 flex justify-center items-center">

                                        <!-- Inside your PHP loop -->
                                        <form method="post">
                                            <input type="hidden" name="delete_compte_id" value="<?= $row['id'] ?>">
                                            <button type="submit"
                                                class="flex w-full items-center py-2 px-2 hover:bg-gray-100 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 18 20">
                                                    <path
                                                        d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                </svg>
                                            </button>
                                        </form>

                                        <form method="post">
                                            <input type="hidden" name="update_compte_id" value="<?= $row['id'] ?>">

                                            <button type="button" onclick="showUpdateaccountModal()"
                                                class="flex w-full items-center py-2 px-2 hover:bg-gray-100 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 18">
                                                    <path
                                                        d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                                                    <path
                                                        d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                                                </svg>
                                            </button>
                                        </form>

                    </div>
                    </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
            </div>
            <!-- End block -->
            <!-- Create modal -->
            <div id="createclientModal" tabindex="-1" aria-hidden="true"
                class="hidden flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div
                            class=" flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add account</h3>
                            <button type="button" id="creataccount" onclick="hideCreateaclientModal()"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-target="createaccountModal" data-modal-toggle="createaccountModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="#" name="submit" method="post">
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="rib"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rib</label>
                                    <input type="text" name="rib" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type account rib" required="">
                                </div>
                                <div>
                                    <label for="balance"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">balance</label>
                                    <input type="text" name="balance" id="balance"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account balance" required="">
                                </div>
                                <div>
                                    <label for="currency"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">currency</label>
                                    <input type="text" name="currency" id="currency"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account currency" required="">
                                </div>
                                <div>
                                    <label for="userid"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">userid</label>
                                    <input type="text" name="userid" id="userid"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account userid" required="">
                                </div>
                                <button type="submit" name="submit" 
                                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    submit new account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Update modal -->
            <div id="updateaccountModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update account</h3>
                            <button type="button" onclick="hideUpdateclientModal()"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="updateaccountModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="admindashboardusers.php" method="post" name="edit_user_form">
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="new_rib"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rib</label>
                                    <input type="text" name="new_rib" id="new_rib"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type account new_rib" required="">
                                </div>
                                <div>
                                    <label for="new_balance"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">balance</label>
                                    <input type="text" name="new_balance" id="new_balance"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account new_balance" required="">
                                </div>
                                <div>
                                    <label for="new_currency"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">currency</label>
                                    <input type="text" name="new_currency" id="new_currency"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account new_currency" required="">
                                </div>
                                <div>
                                    <label for="new_userid"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">userid</label>
                                    <input type="text" name="new_userid" id="new_userid"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="account new_userid" required="">
                                </div>
                                <button type="submit" name="edite_compte_id" onclick="hideUpdateaccountModal()"
                                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    update account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="bank.js"></script>
</body>

</html>