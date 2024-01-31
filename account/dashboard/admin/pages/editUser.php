<?php
session_start();
include '../../../auth/dbConfig.php';
include '../../../../partials/Header.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

$uid = $_GET['uid'];

// Validate and sanitize $uid
$uid = filter_var($uid, FILTER_VALIDATE_INT);
if ($uid === false) {
    // Handle invalid $uid, perhaps redirect or show an error message
    exit("Invalid user ID");
}

$users = $conn->prepare('SELECT 
        u.id,
        u.username,
        u.active,
        u.email 
       FROM users u
       WHERE u.id = ?');

$users->bind_param('i', $uid);
$users->execute();
$users->store_result();
$users->bind_result($userId, $username, $active, $email);
$users->fetch();
?>

<!-- component -->
<body class="font-poppins antialiased">
    <div
      id="view"
      class="h-full w-screen flex flex-row"
      x-data="{ sidenav: true }"
    >
      <button
        @click="sidenav = true"
        class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-red-900 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden"
      >
        <svg
          class="w-5 h-5 fill-current"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <div
        id="sidebar"
        class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
        x-show="sidenav"
        @click.away="sidenav = false"
      >
        <div class="space-y-6 md:space-y-10 mt-10">
         
          
          <div id="profile" class="space-y-3">
            <img
              src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
              alt="Avatar user"
              class="w-10 md:w-16 rounded-full mx-auto"
            />
            <div>
              <h2
                class="font-medium text-xs md:text-sm text-center text-red-900"
              >
                John Doe
              </h2>
              <p class="text-xs text-gray-500 text-center">Administrator</p>
            </div>
          </div>
          
          <div id="menu" class="flex flex-col space-y-2">
            <a
              href="<?=BASE_PATH?>a/allBlogs"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                ></path>
              </svg>
              <span class="">Blog</span>
            </a>

           
            <a
              href="<?=BASE_PATH?>a/pendingComments"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"
                ></path>
                <path
                  d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"
                ></path>
              </svg>
              <span class="">Comments</span>
            </a>
           
           
            <a
              href="<?=BASE_PATH?>a/allUsers"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
              <span class="">Users accounts</span>
            </a>




            <a
              href="<?=BASE_PATH?>logout"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <img src="<?=BASE_PATH?>assets/images/signOut.svg" width="20px" height="20px" class="w-6 h-6 fill-current inline-block"
                fill="currentColor">
               <span class="">Sign out</span>
            </a>
          </div>
        </div>
      </div>
     



<form action="<?=BASE_PATH?>account/dashboard/admin/config/editUserConfig.php?uid=<?= $uid ?>" method="post" class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
<div class="heading text-center font-bold text-2xl m-5 text-gray-800">Edit User</div>    
<label>Id</label>
<input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" type="text" value="<?= $userId ?>" name="uid" readonly>
<label>Username</label>
<input  class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" type="text" value="<?= $username ?>" name="username">
<!-- <label>Active</label>
<input  class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" type="text" value="<?= $active ?>" name="active"> -->
<label>Email</label>
<input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" type="text" value="<?= $email ?>" name="email">
<input   class=" p-1 px-4 font-semibold cursor-pointer text-red-800" type="submit" class="submit">
</form>



</div>
  </body>